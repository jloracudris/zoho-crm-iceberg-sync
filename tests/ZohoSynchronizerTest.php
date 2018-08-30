<?php
namespace Wabel\Zoho\CRM\Sync;

require 'ContactApplicationBean.php';
require 'ContactMapper.php';

require 'Faculty/FacultyApplicationBean.php';
require 'Faculty/FacultyMapper.php';

require 'Program/ProgramApplicationBean.php';
require 'Program/ProgramMapper.php';

use Psr\Log\NullLogger;
use TestNamespace\ContactZohoDao;
use TestNamespace\FacultyZohoDao;
use TestNamespace\ProgramZohoDao;
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

        /*Faculties*/
        /* $getAllFaculties = $conn->fetchAll('select * from FACULTADES');                
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
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /*End Faculties*/

        /*Faculties*/
        $getAllPrograms = $conn->fetchAll('select * from SIUP_PROGRAMAS');                
        $prograsArr = [];
        foreach ($getAllPrograms as $key  => $value) {                        
            $newProgramEl = new ProgramApplicationBean(null, $value['COD_PROGRAMA'], $value['DESC_PROGRAMA'], 'FAC CIENCIAS EMPRESARIALES');
            array_push($prograsArr, $newProgramEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
       /*  $generator->generateModule('Products', 'Programs', 'Program', __DIR__.'/generated/', 'TestNamespace'); */
        require __DIR__.'/generated/Program.php';
        require __DIR__.'/generated/ProgramZohoDao.php';
        $programZohoDao = new ProgramZohoDao($this->getZohoClient());
        
        $mapper = new ProgramMapper();
        $mapper->setPrograms($prograsArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($programZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();

        /*End Faculties*/
    }
}
