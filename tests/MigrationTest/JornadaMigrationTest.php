<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\JornadaZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class JornadaMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getJornadas = $conn->fetchAll('SELECT * FROM SATURN.STVATTS WHERE STVATTS_code like (\'J%\') or STVATTS_code like (\'VIRT\') or STVATTS_code like (\'DIST\')');
        $jornadasArr = [];
        foreach ($getJornadas as $key  => $value) {                        
            $newJornadaEl = new JornadaApplicationBean(null, $value['STVATTS_DESC'], $value['STVATTS_CODE']);
            array_push($jornadasArr, $newJornadaEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule19', 'Jornadas', 'Jornada', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Jornada.php';
        require __DIR__.'/generated/JornadaZohoDao.php';
        $jornadaZohoDao = new JornadaZohoDao($this->getZohoClient());

        $mapper = new JornadaMapper();
        $mapper->setJornadas($jornadasArr);

        $zohoSynchronizer = new ZohoSynchronizer($jornadaZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
