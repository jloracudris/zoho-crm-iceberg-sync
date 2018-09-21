<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\AgreementZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class AgreementMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAgreement = $conn->fetchAll('select * FROM CONVENIOS_BANNER');
        $agreementsArr = [];
        foreach ($getAgreement as $key  => $value) {                        
            $newagrrEl = new AgreementApplicationBean(null, $value['NOMBRE'], $value['CODIGO']);
            array_push($agreementsArr, $newagrrEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule14', 'Agreements', 'Agreement', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Agreement.php';
        require __DIR__.'/generated/AgreementZohoDao.php';
        $agreementZohoDao = new AgreementZohoDao($this->getZohoClient());

        $mapper = new AgreementMapper();
        $mapper->setAgreement($agreementsArr);

        $zohoSynchronizer = new ZohoSynchronizer($agreementZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
