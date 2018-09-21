<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\PeriodZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class PeriodMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getPeriods = $conn->fetchAll('select DESCRIPCION, CODIGO, TO_CHAR(INICIO, \'yyyy-mm-dd\') as INICIO, TO_CHAR(FIN, \'yyyy-mm-dd\') as FIN, AÑO as YEAR from  SIUP.V_PERIODOS order by inicio');
        $periodsArr = [];
        foreach ($getPeriods as $key  => $value) {                        
            $newPeriodEl = new PeriodApplicationBean(null, $value['DESCRIPCION'], $value['CODIGO'], new DateTime($value['INICIO']), new DateTime($value['FIN']), $value['YEAR']);
            array_push($periodsArr, $newPeriodEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule16', 'Periods', 'Period', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Period.php';
        require __DIR__.'/generated/PeriodZohoDao.php';
        $periodZohoDao = new PeriodZohoDao($this->getZohoClient());

        $mapper = new PeriodMapper();
        $mapper->setPeriods($periodsArr);

        $zohoSynchronizer = new ZohoSynchronizer($periodZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
