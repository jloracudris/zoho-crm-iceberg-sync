<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class AccountMigrationTest extends \PHPUnit_Framework_TestCase
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
            'servicename' => 'TEST',       
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

        $getAccounts = $conn->fetchAll('select
        ndb.cliente as cliente,
        per.nombre_razon_social as nombre,
        per.primer_apellido as primer_apellido,
        per.segundo_apellido as segundo_apellido,
        per.direccion_electronica as direccion_electronica,
        per.telefono_residencia as telefono,
        per.identificacion as identificacion,
        per.tipo_identificacion as tipo_identificacion,
        0 as grupo,
        ndb.fecha_vencimiento as fecha_vencimiento,
        0 as porcentaje,
        ndb.nota_debito as  recibo_consignacion,
        (
        nvl(
            (select tipo_entidad
            from cuenta_recibo_centro
            where centro_costo = cli.centro_Costo
            and rownum = 1), (select tipo_entidad from cuenta_recibo_centro where rownum = 1)
            )
        ) as tipo_entidad,
        (
        nvl(
            (select entidad
            from cuenta_recibo_centro
            where centro_costo = cli.centro_Costo
            and rownum = 1), (select entidad from cuenta_recibo_centro where rownum = 1)
            )
        ) as entidad,
        (
        nvl(
            (select oficina_entidad
            from cuenta_recibo_centro
            where centro_costo = cli.centro_Costo
            and rownum = 1), (select oficina_entidad from cuenta_recibo_centro where rownum = 1)
            )
        )  as oficina_entidad,
        (
         nvl(
            (select numero_cuenta
            from cuenta_recibo_centro
            where centro_costo = cli.centro_Costo
            and rownum = 1), (select numero_cuenta from cuenta_recibo_centro where rownum = 1)
            )
        ) as numero_cuenta,
        ndb.descripcion as observaciones,
        (sc.valor_documento-sc.valor_afectado) as valor_total,
        (sc.valor_documento-sc.valor_afectado) as valor_detalle,
        nvl(ndb.periodo, ?) as  periodo,
        row_number() over(partition by ndb.cliente, ndb.periodo order by ndb.fecha_vencimiento, ndb.nota_debito ) as numero_fila,
        ndb.fecha as fecha,
        ? as genera_comision
  from nota_debito ndb
  inner join saldo_cartera sc
  on sc.numero_credito = ndb.nota_debito
  and sc.organizacion = ndb.organizacion
  and sc.documento = ?
  inner join cliente cli
  on cli.cliente = ndb.cliente
  inner join persona per
  on per.secuencia_persona = cli.secuencia_persona
  where exists (select ? from credito cr
                inner join nota_detalle_credito ndc on
                ndc.credito = cr.credito
                where cr.estado in (?,?)
                and ndc.concepto = ?
                and ndc.nota_debito = ndb.nota_debito)', array("0", "S", "NDB", "x", "C", "E", "C"));

        /* $accountsArr = [];
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
    }
}
