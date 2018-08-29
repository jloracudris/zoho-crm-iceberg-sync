<?php
namespace Wabel\Zoho\CRM\Sync;

require 'ContactApplicationBean.php';
require 'ContactMapper.php';

require 'Faculty/FacultyApplicationBean.php';
require 'Faculty/FacultyMapper.php';

use Psr\Log\NullLogger;
use TestNamespace\ContactZohoDao;
use TestNamespace\FacultyZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class ZohoSynchronizerTest extends \PHPUnit_Framework_TestCase
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
        $getAllFaculties = $conn->fetchAll('select * from FACULTADES');                
        $faculties = [];
        foreach ($getAllFaculties as $key  => $value) {                        
            $newFacultyEl = new FacultyApplicationBean($value['ID_FACULTAD'], $value['NOMBRE'], $value['COD_FACULTAD'], $value['DESCRIPCION']);
            array_push($faculties, $newFacultyEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule7', 'Faculties', 'Faculty', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Faculty.php';
        require __DIR__.'/generated/FacultyZohoDao.php';
        $facultyZohoDao = new FacultyZohoDao($this->getZohoClient());
        
        $mapper = new FacultyMapper();
        $mapper->setFaculties($faculties);
        
        $zohoSynchronizer = new ZohoSynchronizer($facultyZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();

        // end our shit

       /*  $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('Contacts', 'Contacts', 'Contact', __DIR__.'/generated/', 'TestNamespace');

        require __DIR__.'/generated/Contact.php';
        require __DIR__.'/generated/ContactZohoDao.php';

        $contactZohoDao = new ContactZohoDao($this->getZohoClient());
        $firstName = uniqid("Test");
        $this->firstName = $firstName;

        $contacts = [
            new ContactApplicationBean(1, "Test1", $firstName, "test@yopmail.com", "0123456789"),
            new ContactApplicationBean(2, "Test2", $firstName, "test2@yopmail.com", "0123456789"),
            new ContactApplicationBean(3, "Test3", $firstName, "test3@yopmail.com", "0123456789"),
            new ContactApplicationBean(4, "Test4", $firstName, "test4@yopmail.com", "0123456789"),
            new ContactApplicationBean(5, "Test5", $firstName, "test5@yopmail.com", "0123456789"),
        ];

        $mapper = new ContactMapper();
        $mapper->setTestContacts($contacts);

        // Let's start by removing past inserted clients:
        $pastContacts = $contactZohoDao->searchRecords('(First Name:'.$firstName.')');
        foreach ($pastContacts as $pastContact) {
            $contactZohoDao->delete($pastContact->getZohoId());
        }

        // Before calling sync, let's input some test data to sync!
        $contactBean = new \TestNamespace\Contact();
        $contactBean->setFirstName($firstName);
        $contactBean->setLastName("InZohoFirst");
        $contactZohoDao->save($contactBean);

        // Let's wait for the sync of our Zoho user.
        sleep(120);

        $zohoSynchronizer = new ZohoSynchronizer($contactZohoDao, $mapper);

        $appBeans = $zohoSynchronizer->getZohoBeansInApp();

        $found = false;
        foreach ($appBeans as $appBean) {
            $this->assertInstanceOf("Wabel\\Zoho\\CRM\\Sync\\ContactApplicationBean", $appBean);
            if ($appBean->getLastName() == 'InZohoFirst') {
                $found = true;
            }
        }
        if (!$found) {
            $this->fail('Could not find bean from Zoho in app.');
        }


        $zohoSynchronizer->sendAppBeansToZoho();


        sleep(120);

        $newContacts = $contactZohoDao->searchRecords('(First Name:'.$firstName.')');
        $this->assertCount(6, $newContacts);
        // The ZohoID should be set in all fields:
        foreach ($newContacts as $contact) {
            $this->assertNotEmpty($contact->getZohoId());
        } */
    }
}
