<?php
namespace Wabel\Zoho\CRM\Sync;

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

        $getVmatriculas = $conn->fetchAll('SELECT DISTINCT
                                                PRIMER_NOMBRE, SEGUNDO_NOMBRE, PRIMER_APELLIDO, 
                                                SEGUNDO_APELLIDO, IDENTIFICACION, GENERO, TO_CHAR(TO_DATE(FECHA_NACIMIENTO,\'DD/MM/YYYY\'), \'yyyy-mm-dd\') as FECHA , 
                                                TIPODOCUMENTO, EMAIL_PERSONAL, EMAIL_INSTITUCIONAL, CELULAR, TELEFONO, DIRECCION, CODCIUDAD
                                                FROM baninst1.V_MATRICULADOS
                                                WHERE ROWNUM <= 500');
        $chunks = array_chunk($getVmatriculas, 100);

        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('Contacts', 'Undergraduates', 'Undergraduate', __DIR__.'/generated/', 'TestNamespace');
        $generator->generateModule('CustomModule12', 'Cities', 'City', __DIR__.'/generated/', 'TestNamespace');

        require __DIR__.'/generated/Undergraduate.php';
        require __DIR__.'/generated/UndergraduateZohoDao.php';
        require __DIR__.'/generated/City.php';
        require __DIR__.'/generated/CityZohoDao.php';

        

        foreach ($chunks as $key => $chunk) {
            $VMatriculasArr = [];
            foreach ($chunk as $key  => $value) {                        
                $newStudentEl = new UndergraduateApplicationBean(null, $value['PRIMER_NOMBRE'], 
                $value['SEGUNDO_NOMBRE'], $value['PRIMER_APELLIDO'], $value['SEGUNDO_APELLIDO'], $value['TIPODOCUMENTO'], 
                $value['IDENTIFICACION'], $value['GENERO'], $value['FECHA'], $value['EMAIL_PERSONAL'], $value['EMAIL_INSTITUCIONAL'], 
                $value['CELULAR'], $value['TELEFONO'], $value['DIRECCION'], $value['CODCIUDAD'], '3229357000001414049');
                array_push($VMatriculasArr, $newStudentEl);            
            }

            $undergraduateZohoDao = new UndergraduateZohoDao($this->getZohoClient());
            $mapper = new UndergraduateMapper();
            $mapper->setUndergraduate($VMatriculasArr);            
            $zohoSynchronizer = new ZohoSynchronizer($undergraduateZohoDao, $mapper);
            $zohoSynchronizer->sendAppBeansToZoho();
        } 
    }
}
