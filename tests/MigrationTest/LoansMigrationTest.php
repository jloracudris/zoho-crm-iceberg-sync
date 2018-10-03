<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\LoanZohoDao;
use TestNamespace\UndergraduateZohoDao;
use TestNamespace\PeriodZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class LoansMigrationTest extends \PHPUnit_Framework_TestCase
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
            'servicename' => 'ICEBERG',       
            'user' => 'ICEBERG',
            'password' => 'iberoice2015',
            'host' => '172.16.15.108',
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

        $getLoans = $conn->fetchAll('SELECT CR.CREDITO,
                                            CR.DOCUMENTO,
                                            CR.ORDEN,
                                            CR.PERIODO_FACTURACION,
                                            CR.ESTADO,
                                            CR.PAGO_INICIAL,
                                            CR.VALOR_FINANCIACION,
                                            CR.CUOTAS,
                                            CR.PLAZO,
                                            CR.LINEA_CREDITO,
                                            CR.VALOR_CUOTA,
                                            CR.VALOR_PAGADO,
                                            CR.FECHA_SOLICITUD,
                                            CR.FECHA_APROBACION,
                                            per.IDENTIFICACION
                                            FROM ICEBERG.CREDITO CR
                                            Inner join CLIENTE C ON C.CLIENTE = CR.CLIENTE
                                            INNER JOIN persona per ON per.secuencia_persona = C.secuencia_persona');

        $chunks = array_chunk($getLoans, 1000);

        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule5', 'Loans', 'Loan', __DIR__.'/generated/', 'TestNamespace');
        $generator->generateModule('Contacts', 'Contacts', 'Undergraduate', __DIR__.'/generated/', 'TestNamespace');
        $generator->generateModule('CustomModule16', 'Periods', 'Period', __DIR__.'/generated/', 'TestNamespace');
        
        require __DIR__.'/generated/Loan.php';
        require __DIR__.'/generated/LoanZohoDao.php';
        require __DIR__.'/generated/UndergraduateZohoDao.php';        
        require __DIR__.'/generated/Undergraduate.php';
        require __DIR__.'/generated/Period.php';
        require __DIR__.'/generated/PeriodZohoDao.php';

        $undergraduateZohoDao = new UndergraduateZohoDao($this->getZohoClient());
        $arrayOfUndergraduates = $undergraduateZohoDao->getRecords(null, null, null, "Contacts(Identification Number,Created Time,Modified Time)");
        
        $periodZohoDao = new PeriodZohoDao($this->getZohoClient());
        $arrayOfPeriods = $periodZohoDao->getRecords();

        foreach ($chunks as $key => $chunk) {
            $loansArr = [];
            foreach ($chunk as $key  => $value) {
                $requestDateGet = strtotime($value['FECHA_SOLICITUD']);
                if(!$requestDateGet) {
                    $requestDate = null;
                } else {
                    $requestDate = date('Y-m-d',$requestDateGet);
                }
                
                $approvalDateGet = strtotime($value['FECHA_APROBACION']);
                if(!$approvalDateGet) {
                    $approvalDate = null;
                } else {
                    $approvalDate = date('Y-m-d',$approvalDateGet);
                }
                $newLoansEl = new LoansApplicationBean(null, $value['IDENTIFICACION'], $value['CREDITO'], $value['DOCUMENTO'], $value['PERIODO_FACTURACION'],
                                                         $requestDate, $approvalDate, $value['ESTADO'], null, $value['VALOR_FINANCIACION'],
                                                         $value['PAGO_INICIAL'], $value['PLAZO'], $value['CUOTAS'], $value['VALOR_CUOTA'], $value['VALOR_PAGADO']);
                array_push($loansArr, $newLoansEl);            
                }        
                
                $loanZohoDao = new LoanZohoDao($this->getZohoClient());        
                $mapper = new LoansMapper();
                $mapper->setLoans($loansArr);        
                $mapper->setUndergraduates($arrayOfUndergraduates);
                $mapper->setPeriods($arrayOfPeriods);
                $zohoSynchronizer = new ZohoSynchronizer($loanZohoDao, $mapper);
                $zohoSynchronizer->sendAppBeansToZoho();
            }        
        }    
}
