<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\DisabilitiesZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class DisabilitiesMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAllDisabilities = $conn->fetchAll('select * FROM V_PARAMETROS
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
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
