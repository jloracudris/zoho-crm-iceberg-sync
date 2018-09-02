<?php
namespace Wabel\Zoho\CRM\Sync;

require 'ContactApplicationBean.php';
require 'ContactMapper.php';

require 'Faculty/FacultyApplicationBean.php';
require 'Faculty/FacultyMapper.php';

require 'Program/ProgramApplicationBean.php';
require 'Program/ProgramMapper.php';

require 'Undergraduate/UndergraduateApplicationBean.php';
require 'Undergraduate/UndergraduateMapper.php';

use Psr\Log\NullLogger;
use TestNamespace\ContactZohoDao;
use TestNamespace\FacultyZohoDao;
use TestNamespace\ProgramZohoDao;
use TestNamespace\UndergraduateZohoDao;
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

        /*Programs*/
        /* $getAllPrograms = $conn->fetchAll('select P.COD_PROGRAMA, P.DESC_PROGRAMA, F.NOMBRE
                                            from 
                                            SIUP_PROGRAMAS P
                                            Inner join FACULTADES F ON P.COLL_IN = F.COD_FACULTAD
                                            WHERE
                                            P.TIPO_PROGRAMA = ?', array('PREGRADO'));
        $prograsArr = [];
        foreach ($getAllPrograms as $key  => $value) {                        
            $newProgramEl = new ProgramApplicationBean(null, $value['COD_PROGRAMA'], $value['DESC_PROGRAMA'], $value['NOMBRE']);
            array_push($prograsArr, $newProgramEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('Products', 'Programs', 'Program', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Program.php';
        require __DIR__.'/generated/ProgramZohoDao.php';
        $programZohoDao = new ProgramZohoDao($this->getZohoClient());
        
        $mapper = new ProgramMapper();
        $mapper->setPrograms($prograsArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($programZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /*End Programs*/

        /* Students */

        // Create a new sanitizer instance by passing an array of rules to the `Sanitizer::make` method...

        
        $getAllStudents = $conn->fetchAll('SELECT SPRIDEN_FIRST_NAME, SPRIDEN_LAST_NAME, SPRIDEN_MI,CEDULA, GENERO, to_char("FECHA NACIMIENTO",\'yyyy-mm-dd\') as FECHA FROM V_SPAIDEN_BIOGRAFICA WHERE ROWNUM <= 10 ORDER BY SPRIDEN_PIDM DESC');        
        $studentsArr = [];
        foreach ($getAllStudents as $key  => $value) {                        
            $newStudentEl = new UndergraduateApplicationBean(null, $value['SPRIDEN_FIRST_NAME'], $value['SPRIDEN_MI'], $value['SPRIDEN_LAST_NAME'], null, null, $value['CEDULA'], $value['GENERO'], $value['FECHA']);
            array_push($studentsArr, $newStudentEl);            
        } 

        $getVmatriculas = $conn->fetchAll('SELECT PRIMER_NOMBRE, SEGUNDO_NOMBRE, PRIMER_APELLIDO, 
                                                SEGUNDO_APELLIDO, IDENTIFICACION, GENERO, TO_CHAR(TO_DATE(FECHA_NACIMIENTO,\'DD/MM/YYYY\'), \'yyyy-mm-dd\') as FECHA , 
                                                TIPODOCUMENTO, EMAIL_PERSONAL, EMAIL_INSTITUCIONAL, CELULAR, TELEFONO, DIRECCION
                                                FROM baninst1.V_MATRICULADOS 
                                                WHERE ROWNUM <= 5');
        $VMatriculasArr = [];
        foreach ($getVmatriculas as $key  => $value) {                        
            $newStudentEl = new UndergraduateApplicationBean(null, $value['PRIMER_NOMBRE'], 
            $value['SEGUNDO_NOMBRE'], $value['PRIMER_APELLIDO'], $value['SEGUNDO_APELLIDO'], $value['TIPODOCUMENTO'], 
            $value['IDENTIFICACION'], $value['GENERO'], $value['FECHA'], $value['EMAIL_PERSONAL'], $value['EMAIL_INSTITUCIONAL'], 
            $value['CELULAR'], $value['TELEFONO'], $value['DIRECCION']);
            array_push($VMatriculasArr, $newStudentEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('Contacts', 'Undergraduates', 'Undergraduate', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Undergraduate.php';
        require __DIR__.'/generated/UndergraduateZohoDao.php';
        $undergraduateZohoDao = new UndergraduateZohoDao($this->getZohoClient());
        
        $mapper = new UndergraduateMapper();
        $mapper->setUndergraduate($VMatriculasArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($undergraduateZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho();

        /* End Students */
    }
}
