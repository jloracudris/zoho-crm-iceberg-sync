<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\EthnicGroupZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class EthnicGroupMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAllEthnics = $conn->fetchAll('select * FROM V_PARAMETROS
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
        $zohoSynchronizer->sendAppBeansToZoho(); 
    }
}
