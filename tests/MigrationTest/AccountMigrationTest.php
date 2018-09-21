<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\AccountZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class AccountMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAccounts = $conn->fetchAll('select * from SATURN.STVTRCN');
        $accountsArr = [];
        foreach ($getAccounts as $key  => $value) {                        
            $newAccountEl = new AccountApplicationBean(null, $value['STVTRCN_DESC'], $value['STVTRCN_CODE']);
            array_push($accountsArr, $newAccountEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('Accounts', 'Accounts', 'Account', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Account.php';
        require __DIR__.'/generated/AccountZohoDao.php';
        $accountZohoDao = new AccountZohoDao($this->getZohoClient());

        $mapper = new AccountMapper();
        $mapper->setAccounts($accountsArr);

        $zohoSynchronizer = new ZohoSynchronizer($accountZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
