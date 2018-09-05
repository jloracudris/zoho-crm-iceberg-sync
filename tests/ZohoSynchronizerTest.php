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

require 'EthnicGroups/EthnicGroupApplicationBean.php';
require 'EthnicGroups/EthnicGroupMapper.php';

require 'Disabilities/DisabilitiesApplicationBean.php';
require 'Disabilities/DisabilitiesMapper.php';

require 'Agreement/AgreementApplicationBean.php';
require 'Agreement/AgreementMapper.php';

require 'Node/NodeApplicationBean.php';
require 'Node/NodeMapper.php';

require 'OnGoingPrograms/OnGoingProgramApplicationBean.php';
require 'OnGoingPrograms/OnGoingProgramMapper.php';

require 'Locations/LocationApplicationBean.php';
require 'Locations/LocationMapper.php';

require 'Periods/PeriodApplicationBean.php';
require 'Periods/PeriodMapper.php';

require 'OnGoingProgramTypes/OnGoingProgramTypeApplicationBean.php';
require 'OnGoingProgramTypes/OnGoingProgramTypeMapper.php';

require 'Accounts/AccountApplicationBean.php';
require 'Accounts/AccountMapper.php';

require 'Jornadas/JornadaApplicationBean.php';
require 'Jornadas/JornadaMapper.php';


use Psr\Log\NullLogger;
use TestNamespace\ContactZohoDao;
use TestNamespace\FacultyZohoDao;
use TestNamespace\ProgramZohoDao;
use TestNamespace\UndergraduateZohoDao;
use TestNamespace\EthnicGroupZohoDao;
use TestNamespace\DisabilityZohoDao;
use TestNamespace\CityZohoDao;
use TestNamespace\NodeZohoDao;
use TestNamespace\AgreementZohoDao;
use TestNamespace\LocationZohoDao;
use TestNamespace\OnGoingProgramZohoDao;    
use TestNamespace\PeriodZohoDao;
use TestNamespace\OnGoingProgramTypeZohoDao;
use TestNamespace\AccountZohoDao;
use TestNamespace\JornadaZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;
use DateTime;

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
       /*$getAllPrograms = $conn->fetchAll('select P.COD_PROGRAMA, P.DESC_PROGRAMA, F.NOMBRE
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

        /* $getVmatriculas = $conn->fetchAll('SELECT PRIMER_NOMBRE, SEGUNDO_NOMBRE, PRIMER_APELLIDO, 
                                                SEGUNDO_APELLIDO, IDENTIFICACION, GENERO, TO_CHAR(TO_DATE(FECHA_NACIMIENTO,\'DD/MM/YYYY\'), \'yyyy-mm-dd\') as FECHA , 
                                                TIPODOCUMENTO, EMAIL_PERSONAL, EMAIL_INSTITUCIONAL, CELULAR, TELEFONO, DIRECCION, CODCIUDAD
                                                FROM baninst1.V_MATRICULADOS 
                                                WHERE ROWNUM <= 5 ORDER BY IDBANNER');
        $VMatriculasArr = [];
        foreach ($getVmatriculas as $key  => $value) {                        
            $newStudentEl = new UndergraduateApplicationBean(null, $value['PRIMER_NOMBRE'], 
            $value['SEGUNDO_NOMBRE'], $value['PRIMER_APELLIDO'], $value['SEGUNDO_APELLIDO'], $value['TIPODOCUMENTO'], 
            $value['IDENTIFICACION'], $value['GENERO'], $value['FECHA'], $value['EMAIL_PERSONAL'], $value['EMAIL_INSTITUCIONAL'], 
            $value['CELULAR'], $value['TELEFONO'], $value['DIRECCION'], $value['CODCIUDAD'], '3229357000001414049');
            array_push($VMatriculasArr, $newStudentEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('Contacts', 'Undergraduates', 'Undergraduate', __DIR__.'/generated/', 'TestNamespace');
        $generator->generateModule('CustomModule12', 'Cities', 'City', __DIR__.'/generated/', 'TestNamespace');

        require __DIR__.'/generated/Undergraduate.php';
        require __DIR__.'/generated/UndergraduateZohoDao.php';
        require __DIR__.'/generated/City.php';
        require __DIR__.'/generated/CityZohoDao.php';
        $undergraduateZohoDao = new UndergraduateZohoDao($this->getZohoClient());
        
        $mapper = new UndergraduateMapper();
        $mapper->setUndergraduate($VMatriculasArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($undergraduateZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /* End Students */

        /* $getAllEthnics = $conn->fetchAll('select * FROM V_PARAMETROS
                                            WHERE
                                            TABLA = ?', array('TIPO_DE_ETNIA'));
        $ethnicsArr = [];
        foreach ($getAllEthnics as $key  => $value) {                        
            $newEthnicsEl = new EthnicGroupApplicationBean(null, $value['DESCRIPCION'], $value['CODIGO']);
            array_push($ethnicsArr, $newEthnicsEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule9', 'Ethnic_Groups', 'EthnicGroup', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/EthnicGroup.php';
        require __DIR__.'/generated/EthnicGroupZohoDao.php';
        $ethnicGroupZohoDao = new EthnicGroupZohoDao($this->getZohoClient());
        
        $mapper = new EthnicGroupMapper();
        $mapper->setEthnicGroup($ethnicsArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($ethnicGroupZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho(); */

       /*  $getAllDisabilities = $conn->fetchAll('select * FROM V_PARAMETROS
                                            WHERE
                                            TABLA = ?', array('TIPO_DE_DISCAPACIDAD'));
        $disabilitiesArr = [];
        foreach ($getAllDisabilities as $key  => $value) {                        
            $newDisabilyEl = new DisabilitiesApplicationBean(null, $value['DESCRIPCION'], $value['CODIGO']);
            array_push($disabilitiesArr, $newDisabilyEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule10', 'Disabilities', 'Disability', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Disability.php';
        require __DIR__.'/generated/DisabilityZohoDao.php';
        $disabilitiesZohoDao = new DisabilityZohoDao($this->getZohoClient());
        
        $mapper = new  DisabilitiesMapper();
        $mapper->setDisabilities($disabilitiesArr);
        
        $zohoSynchronizer = new ZohoSynchronizer($disabilitiesZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /* $getNodes = $conn->fetchAll('select * FROM NODOS');
        $nodesArr = [];
        foreach ($getNodes as $key  => $value) {                        
        $newnodeEl = new NodeApplicationBean(null, $value['DESCRIPCION'], $value['ID_NODO']);
        array_push($nodesArr, $newnodeEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule15', 'Nodes', 'Node', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Node.php';
        require __DIR__.'/generated/NodeZohoDao.php';
        $nodeZohoDao = new NodeZohoDao($this->getZohoClient());

        $mapper = new NodeMapper();
        $mapper->setNodes($nodesArr);

        $zohoSynchronizer = new ZohoSynchronizer($nodeZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /* $getAgreement = $conn->fetchAll('select * FROM CONVENIOS_BANNER');
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
        $zohoSynchronizer->sendAppBeansToZoho(); */
/* 
        $getOnGoingProgram = $conn->fetchAll('select CODPROGRAMA, PERIODO, ESTADO, JORNADA, SEDE, TIPOESTUDIANTE, IDENTIFICACION, IDBANNER FROM baninst1.V_MATRICULADOS 
                                              WHERE ROWNUM <= 5 ORDER BY IDBANNER');
        $onGoingProgramArr = [];
        foreach ($getOnGoingProgram as $key  => $value) {                        
            $newOngoingEl = new OnGoingProgramApplicationBean(null, null, $value['PERIODO'], $value['ESTADO'], $value['JORNADA'] , $value['CODPROGRAMA'], $value['SEDE'] , $value['TIPOESTUDIANTE'], $value['IDENTIFICACION'], $value['IDBANNER']);
            array_push($onGoingProgramArr, $newOngoingEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule4', 'OngoingPrograms', 'OnGoingProgram', __DIR__.'/generated/', 'TestNamespace');
        
        require __DIR__.'/generated/OnGoingProgram.php';
        require __DIR__.'/generated/OnGoingProgramZohoDao.php';        
        require __DIR__.'/generated/ProgramZohoDao.php';        
        require __DIR__.'/generated/UndergraduateZohoDao.php';        
        require __DIR__.'/generated/Program.php';
        require __DIR__.'/generated/Undergraduate.php';
        $onGoingProgramZohoDao = new OnGoingProgramZohoDao($this->getZohoClient());

        $mapper = new OnGoingProgramMapper();
        $mapper->setOnGoingProgram($onGoingProgramArr);

        $zohoSynchronizer = new ZohoSynchronizer($onGoingProgramZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho(); */


       /*  $getLocations = $conn->fetchAll('select * from SATURN.STVCAMP');
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
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /* $getPeriods = $conn->fetchAll('select DESCRIPCION, CODIGO, TO_CHAR(INICIO, \'yyyy-mm-dd\') as INICIO, TO_CHAR(FIN, \'yyyy-mm-dd\') as FIN, AÑO as YEAR from  SIUP.V_PERIODOS order by inicio');
        $periodsArr = [];
        foreach ($getPeriods as $key  => $value) {                        
            $newPeriodEl = new PeriodApplicationBean(null, $value['DESCRIPCION'], $value['CODIGO'], new DateTime($value['INICIO']), new DateTime($value['FIN']), $value['YEAR']);
            array_push($periodsArr, $newPeriodEl);            
        }        
        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule16', 'Periods', 'Period', __DIR__.'/generated/', 'TestNamespace');
        require __DIR__.'/generated/Period.php';
        require __DIR__.'/generated/PeriodZohoDao.php';
        $periodZohoDao = new PeriodZohoDao($this->getZohoClient());

        $mapper = new PeriodMapper();
        $mapper->setPeriods($periodsArr);

        $zohoSynchronizer = new ZohoSynchronizer($periodZohoDao, $mapper);
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /* $getAccounts = $conn->fetchAll('select * from SATURN.STVTRCN');
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
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /* $getJornadas = $conn->fetchAll('SELECT * FROM SATURN.STVATTS WHERE STVATTS_code like (\'J%\') or STVATTS_code like (\'VIRT\') or STVATTS_code like (\'DIST\')');
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
        $zohoSynchronizer->sendAppBeansToZoho(); */

        /* $getAllPrograms = $conn->fetchAll('select P.COD_PROGRAMA, P.DESC_PROGRAMA, F.NOMBRE
                                            from 
                                            SIUP_PROGRAMAS P
                                            Inner join FACULTADES F ON P.COLL_IN = F.COD_FACULTAD
                                            WHERE
                                            P.TIPO_PROGRAMA = ?', array('POSTGRADO'));
        $prograsArr = [];
        foreach ($getAllPrograms as $key  => $value) {                        
            $newProgramEl = new ProgramApplicationBean(null, $value['COD_PROGRAMA'], $value['DESC_PROGRAMA'], $value['NOMBRE'], '3229357000001595537');
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

        $getAllPrograms = $conn->fetchAll('select P.COD_PROGRAMA, P.DESC_PROGRAMA, F.NOMBRE
                                            from 
                                            SIUP_PROGRAMAS P
                                            Inner join FACULTADES F ON P.COLL_IN = F.COD_FACULTAD
                                            WHERE
                                            P.TIPO_PROGRAMA = ?', array('EDUCACION CONTINUA'));
        $prograsArr = [];
        foreach ($getAllPrograms as $key  => $value) {                        
            $newProgramEl = new ProgramApplicationBean(null, $value['COD_PROGRAMA'], $value['DESC_PROGRAMA'], $value['NOMBRE'], '3229357000001595543');
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
        $zohoSynchronizer->sendAppBeansToZoho();


    }
}
