<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\NodeZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class NodeMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getNodes = $conn->fetchAll('select * FROM NODOS');
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
        $zohoSynchronizer->sendAppBeansToZoho();
    }
}
