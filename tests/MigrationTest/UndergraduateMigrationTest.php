<?php
/* namespace Wabel\Zoho\CRM\Sync;

require 'tests/Undergraduate/UndergraduateApplicationBean.php';
require 'tests/Undergraduate/UndergraduateMapper.php';


use Psr\Log\NullLogger;
use TestNamespace\UndergraduateZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class UndergraduateMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAllStudents = $conn->fetchAll('SELECT SPRIDEN_FIRST_NAME, SPRIDEN_LAST_NAME, SPRIDEN_MI,CEDULA, GENERO, to_char("FECHA NACIMIENTO",\'yyyy-mm-dd\') as FECHA FROM V_SPAIDEN_BIOGRAFICA WHERE ROWNUM <= 10 ORDER BY SPRIDEN_PIDM DESC');
        $studentsArr = [];
        foreach ($getAllStudents as $key  => $value) {                        
            $newStudentEl = new UndergraduateApplicationBean(null, $value['SPRIDEN_FIRST_NAME'], $value['SPRIDEN_MI'], $value['SPRIDEN_LAST_NAME'], null, null, $value['CEDULA'], $value['GENERO'], $value['FECHA']);
            array_push($studentsArr, $newStudentEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('Contacts', 'Undergraduates', 'Undergraduate', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Undergraduate.php';
        require __DIR__.'/generated/UndergraduateZohoDao.php';
        $undergraduateZohoDao = new UndergraduateZohoDao($this->getZohoClient());
        
        $mapper = new UndergraduateMapper();
        $mapper->setUndergraduate($studentsArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($undergraduateZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();    
    }
} */
