<?php
namespace Wabel\Zoho\CRM\Sync;


use Psr\Log\NullLogger;
use TestNamespace\OnGoingProgramLoadZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class OnGoingProgramLoadMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAllOnGoingProgramLoad = $conn->fetchAll('SELECT * FROM SATURN.STVATTS WHERE STVATTS_DESC like (\'%CARGA%\')');
        $OnGoingProgramLoadArr = [];
        foreach ($getAllOnGoingProgramLoad as $key  => $value) {                        
            $newOnGoPloadEl = new OnGoingProgramLoadApplicationBean(null, $value['STVATTS_DESC'], $value['STVATTS_CODE']);
            array_push($OnGoingProgramLoadArr, $newOnGoPloadEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule22', 'OnGoingProgramLoad', 'OnGoingProgramLoad', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/OnGoingProgramLoad.php';
        require __DIR__.'/generated/OnGoingProgramLoadZohoDao.php';
        $onGoingProgramLoadZohoDao = new OnGoingProgramLoadZohoDao($this->getZohoClient());
        
        $mapper = new OnGoingProgramLoadMapper();
        $mapper->setOnGoingProgramLoad($OnGoingProgramLoadArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($onGoingProgramLoadZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
