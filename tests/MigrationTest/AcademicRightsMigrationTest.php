<?php
namespace Wabel\Zoho\CRM\Sync;

use Psr\Log\NullLogger;
use TestNamespace\AcademicRightsZohoDao;
use TestNamespace\UndergraduateZohoDao;
use TestNamespace\PeriodZohoDao;
use TestNamespace\AcademicRightStatusZohoDao;
use Wabel\Zoho\CRM\Service\EntitiesGeneratorService;
use Wabel\Zoho\CRM\ZohoClient;
use Doctrine\DBAL\Configuration;
use ArrayObject;

class AcademicRightsMigrationTest extends \PHPUnit_Framework_TestCase
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

        $getAcademicRights = $conn->fetchAll('SELECT cliente as cliente,
        nombre as nombre,
        primer_apellido as primer_apellido,
        segundo_apellido as segundo_apellido,
        direccion_electronica as direccion_electronica,
        telefono as telefono,
        identificacion as identificacion,
        tipo_identificacion as tipo_identificacion,
        nombre_tipo_identificacion as nombre_tipo_identificacion,
        orden as orden,
        estado_orden as estado_orden,
        documento_orden as documento_orden,
        organizacion_orden as organizacion_orden,
        centro_costo as centro_costo,
        grupo as grupo,
        fecha_vencimiento as fecha_vencimiento,
        porcentaje as porcentaje,
        recibo_consignacion as recibo_consignacion,
        tipo_entidad as tipo_entidad,
        entidad as entidad,
        oficina_entidad as oficina_entidad,
        numero_cuenta as numero_cuenta,
        observaciones as observaciones,
         valor_total  as valor_total,
           valor_detalle_extra+(valor_detalle_extra*(porcentaje)/100) +valor_sin_extra as valor_detalle,
           periodo as periodo,
           numero_fila as numero_fila,
           fecha as fecha,
           \'S\' as genera_comision
        from (
               select
                 rec.cliente cliente,
                 per.nombre_razon_social nombre,
                 per.primer_apellido primer_apellido,
                 per.segundo_apellido segundo_apellido,
                 per.direccion_electronica direccion_electronica,
                 per.telefono_residencia telefono,
                 per.identificacion identificacion,
                 per.tipo_identificacion tipo_identificacion,
                 tid.nombre_tipo_identificacion nombre_tipo_identificacion,
                 ord.orden orden,
                 ord.estado estado_orden,
                 ord.documento documento_orden,
                 ord.organizacion organizacion_orden,
                 ord.centro_costo centro_costo,
                 ven.grupo grupo,
                 ven.fecha_vencimiento fecha_vencimiento,
                 ven.porcentaje porcentaje,
                 ven.descripcion_fecha descripcion_fecha,
                 rec.recibo_consignacion recibo_consignacion,
                 rec.tipo_entidad tipo_entidad,
                 rec.entidad entidad,
                 rec.oficina_entidad oficina_entidad,
                 rec.numero_cuenta numero_cuenta,
                 case when ord.descripcion is not null then
                     ord.descripcion||
                         case when ven.descripcion_fecha is not null then
                         \' - \' || ven.descripcion_fecha || \' \' || to_char(ven.fecha_vencimiento, \'dd/mm/yyyy\')
                        else
                             null
                        end
                 else
                     rec.observaciones
                 end observaciones,
                 rec.valor valor_total,
                 (
                    SELECT
                           SUM     ( DRC.valor )   valor
                       FROM
                           detalle_recibo_consignacion DRC,
                           recibo_consignacion RC,
                           tipo_solicitud_nota ts
                       WHERE   rc.cliente = rec.cliente
                       AND     RC.estado IN  (\'I\', \'C\')
                       AND     RC.recibo_consignacion = DRC.recibo_consignacion
                       AND     ts.concepto_nota (+) = drc.concepto_nota
                       AND     ts.causa_nota (+) = drc.causa_nota
                       AND     rc.recibo_consignacion = rec.recibo_consignacion
                       AND     (NVL(ts.incluye_liquidacion_extra, \'N\') = \'S\'
                                OR drc.orden > 0
                               )
                       AND NOT EXISTS (
                                       SELECT \'X\'
                                       FROM concepto_ingreso_credito
                                       WHERE concepto IN (\'EX\',\'CX\')
                                       AND concepto_nota = drc.concepto_nota
                                    AND causa_nota = drc.causa_nota
                                    )
    
                    )   valor_detalle_extra,
                   (
                    SELECT
                           nvl(SUM     (DRC.valor),0)   valor
                       FROM
                           detalle_recibo_consignacion DRC,
                           recibo_consignacion RC,
                           tipo_solicitud_nota ts
                       WHERE  rc.cliente = rec.cliente
                       AND     RC.estado IN  (\'I\', \'C\')
                       AND     RC.recibo_consignacion = DRC.recibo_consignacion
                       AND     ts.concepto_nota (+) = drc.concepto_nota
                       AND     ts.causa_nota (+) = drc.causa_nota
                       AND     NVL(ts.incluye_liquidacion_extra, \'N\') = \'N\'
                       AND     rc.recibo_consignacion = rec.recibo_consignacion
                       AND     drc.orden IS NULL
                       AND NOT EXISTS (SELECT \'X\'
                                       FROM concepto_ingreso_credito
                                       WHERE concepto IN ( \'EX\',\'CX\')
                                       AND concepto_nota = drc.concepto_nota
                                    AND causa_nota = drc.causa_nota
                                    )
                    )  valor_sin_extra,
                 nvl(ord.periodo, \'0\') periodo,
                 row_number()
                 over (partition by ord.cliente_solicitado,ord.documento, ord.orden, rec.recibo_consignacion
                 order by  ord.documento, ord.orden, rec.recibo_consignacion, ven.fecha_vencimiento) numero_fila,
                 ord.fecha_orden fecha
        from
            orden ord,
             recibo_consignacion rec,
             vencimiento_periodo ven,
             detalle_recibo_consignacion detcon,
             persona per,
             cliente cli,
             tipo_identificacion tid
        where
            ord.cliente_solicitado = rec.cliente
            and rec.cliente  = cli.cliente
            and cli.secuencia_persona = per.secuencia_persona
            and tid.tipo_identificacion = per.tipo_identificacion
            and ord.grupo = ven.grupo
            and ord.orden = detcon.orden
            and ord.documento = detcon.documento_orden
         --   and ord.estado = \'V\'
         --   and rec.estado = \'I\'
            and ord.periodo = ven.periodo
          --  and ven.fecha_vencimiento >= TRUNC(SYSDATE)
            and rec.recibo_consignacion = detcon.recibo_consignacion
            and not exists(select \'x\'
                    from liquidacion_orden liq
                    where liq.estado = \'V\'
                    and liq.documento_originado = ord.documento
                    and liq.orden = ord.orden)
            --and cli.cliente =:cliente
           --and NVL(ord.periodo, \'1\') = NVL(NVL(:periodo, ord.periodo), \'1\')
           and rownum <=1
           ) 
           order by cliente, recibo_consignacion, fecha_vencimiento');

        $chunks = array_chunk($getAcademicRights, 1000);

        $generator = $this->getEntitiesGeneratorService();
        $generator->generateModule('CustomModule23', 'AcademicRights', 'AcademicRights', __DIR__.'/generated/', 'TestNamespace');
        $generator->generateModule('Contacts', 'Contacts', 'Undergraduate', __DIR__.'/generated/', 'TestNamespace');
        $generator->generateModule('CustomModule16', 'Periods', 'Period', __DIR__.'/generated/', 'TestNamespace');
        $generator->generateModule('CustomModule26', 'AcademicRightStatus', 'AcademicRightStatus', __DIR__.'/generated/', 'TestNamespace');
        
        require __DIR__.'/generated/AcademicRights.php';
        require __DIR__.'/generated/AcademicRightsZohoDao.php';
        require __DIR__.'/generated/UndergraduateZohoDao.php';        
        require __DIR__.'/generated/Undergraduate.php';
        require __DIR__.'/generated/Period.php';
        require __DIR__.'/generated/PeriodZohoDao.php';
        require __DIR__.'/generated/AcademicRightStatus.php';
        require __DIR__.'/generated/AcademicRightStatusZohoDao.php';

        $undergraduateZohoDao = new UndergraduateZohoDao($this->getZohoClient());
        $arrayOfUndergraduates = $undergraduateZohoDao->getRecords(null, null, null, "Contacts(Identification Number,Created Time,Modified Time)");
        
        $periodZohoDao = new PeriodZohoDao($this->getZohoClient());
        $arrayOfPeriods = $periodZohoDao->getRecords();

        $AcademicRightStatusZohoDao = new AcademicRightStatusZohoDao($this->getZohoClient());
        $arrayOfAcademicRightStatus = $AcademicRightStatusZohoDao->getRecords();

        foreach ($chunks as $key => $chunk) {
            $academicRightsArr = [];
            foreach ($chunk as $key  => $value) {
                $dueDateGet = strtotime($value['FECHA_VENCIMIENTO']);
                if(!$dueDateGet) {
                    $dueDate = null;
                } else {
                    $dueDate = date('Y-m-d',$dueDateGet);
                }
               
                $newAcademicRightsEl = new AcademicRightsApplicationBean(null, $value['IDENTIFICACION'], $value['ORDEN'], $value['OBSERVACIONES'], $dueDate,
                                                                               $value['PORCENTAJE'], $value['VALOR_TOTAL'], $value['PERIODO'], $value['ESTADO_ORDEN']);
                array_push($academicRightsArr, $newAcademicRightsEl);            
                }        
                
                $academicRightsZohoDao = new AcademicRightsZohoDao($this->getZohoClient());        
                $mapper = new AcademicRightsMapper();
                $mapper->setAcademicRights($academicRightsArr);        
                $mapper->setUndergraduates($arrayOfUndergraduates);
                $mapper->setPeriods($arrayOfPeriods);
                $mapper->setAcademicRightsStatus($arrayOfAcademicRightStatus);
                $zohoSynchronizer = new ZohoSynchronizer($academicRightsZohoDao, $mapper);
                $zohoSynchronizer->sendAppBeansToZoho();
            }        
        }    
}
