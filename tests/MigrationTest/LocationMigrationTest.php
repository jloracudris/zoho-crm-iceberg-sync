<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\LocationZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class LocationMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getLocations = $conn->fetchAll('select * from SATURN.STVCAMP');
        $locationsArr = [];
        foreach ($getLocations as $key  => $value) {                        
            $newLocationEl = new LocationApplicationBean(null, $value['STVCAMP_DESC'], $value['STVCAMP_CODE']);
            array_push($locationsArr, $newLocationEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule17', 'Locations', 'Location', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Location.php';
        require __DIR__.'/generated/LocationZohoDao.php';
        $locationZohoDao = new LocationZohoDao($this->getZohoClient());

        $mapper = new LocationMapper();
        $mapper->setLocations($locationsArr);

        $zohoSynchronizer = new ZohoSynchronizer($locationZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
