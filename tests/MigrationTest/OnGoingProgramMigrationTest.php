<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\OnGoingProgramZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class OnGoingProgramMigrationTest extends \PHPUnit_Framework_TestCase
{

    public function getZohoClient()
    {
        return new ZohoClient($GLOBALS['auth_token']);
    }

    public function getEntitiesGeneratorService()
    {
        return new EntitiesGeneratorService($this->getZohoClient(), new NullLogger());
    }

    protected $firstName;

    private function ConnectToDb() {
        $config = new Configuration();
        //..
        $connectionParams = array(
            'dbname' => '',
            'servicename' => 'TRNG.UIBERO.EDU.CO',       
            'user' => 'siup',
            'password' => 'siup2018',
            'host' => '172.16.15.111',
            'driver' => 'oci8',
            'port' => '1521',
            'charset' => 'AL32UTF8',
            'service' => true
        );
        return \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
    }


    public function testSync()
    {
        $conn = $this->ConnectToDb();
        $conn->connect();

        $getOnGoingProgram = $conn->fetchAll('select CODPROGRAMA, PERIODO, ESTADO, JORNADA, SEDE, TIPOESTUDIANTE, IDENTIFICACION, IDBANNER FROM baninst1.V_MATRICULADOS 
                                              WHERE ROWNUM <= 5');
       
        $chunks = array_chunk($getOnGoingProgram, 100);
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule4', 'OngoingPrograms', 'OnGoingProgram', __DIR__.'/generated/', 'TestNamespace');
        
        require __DIR__.'/generated/OnGoingProgram.php';
        require __DIR__.'/generated/OnGoingProgramZohoDao.php';        
        require __DIR__.'/generated/ProgramZohoDao.php';        
        require __DIR__.'/generated/UndergraduateZohoDao.php';        
        require __DIR__.'/generated/Program.php';
        require __DIR__.'/generated/Undergraduate.php';
        require __DIR__.'/generated/Period.php';
        require __DIR__.'/generated/PeriodZohoDao.php';
        require __DIR__.'/generated/Location.php';
        require __DIR__.'/generated/LocationZohoDao.php';
        require __DIR__.'/generated/Jornada.php';
        require __DIR__.'/generated/JornadaZohoDao.php';

        foreach ($chunks as $key => $chunk) {
            $onGoingProgramArr = [];
            foreach ($chunk as $key  => $value) {                        
                $newOngoingEl = new OnGoingProgramApplicationBean(null, null, $value['PERIODO'], $value['ESTADO'], $value['JORNADA'] , $value['CODPROGRAMA'], $value['SEDE'] , $value['TIPOESTUDIANTE'], $value['IDENTIFICACION'], $value['IDBANNER']);
                array_push($onGoingProgramArr, $newOngoingEl);            
            }
            
            $onGoingProgramZohoDao = new OnGoingProgramZohoDao($this->getZohoClient());
            $mapper = new OnGoingProgramMapper();
            $mapper->setOnGoingProgram($onGoingProgramArr);

            $zohoSynchronizer = new ZohoSynchronizer($onGoingProgramZohoDao, $mapper);
            $zohoSynchronizer->sendAppBeansToZoho();
        }
    }
}
