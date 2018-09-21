<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\DegreeTypesZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class DegreeTypesMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAllDegreeTypes = $conn->fetchAll('select * from SATURN.STVLEVL');
        $degreeTypesArr = [];
        foreach ($getAllDegreeTypes as $key  => $value) {                        
            $newDegreeTypeEl = new DegreeTypesApplicationBean(null, $value['STVLEVL_DESC'], $value['STVLEVL_CODE']);
            array_push($degreeTypesArr, $newDegreeTypeEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule21', 'DegreeTypes', 'DegreeTypes', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/DegreeTypes.php';
        require __DIR__.'/generated/DegreeTypesZohoDao.php';
        $degreeTypeZohoDao = new DegreeTypesZohoDao($this->getZohoClient());
        
        $mapper = new  DegreeTypesMapper();
        $mapper->setDegreeTypes($degreeTypesArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($degreeTypeZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
