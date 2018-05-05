<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class EmpresasModelCpe extends JModel {

    var $_id;
    var $_data;

    function __construct() {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);
    }

    function setId($id) {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData() {

        // Load the data
        if (empty($this->_data)) {
            $query = "SELECT CPE.*, DGMO.detg_descripcion as moneda, EMP.emp_tipDocUsuario, EMP.emp_numDocUsuario, EMP.emp_rznSocialUsuario, EMP.emp_ipRepositorio, EMP.emp_rutaDest
FROM tfact_cpe CPE INNER JOIN tfact_emp EMP ON (CPE.emp_id_emp=EMP.emp_id_emp) 
INNER JOIN tfact_detalle_general DGMO ON (CPE.cpe_tipMoneda=DGMO.detg_codigo)
WHERE CPE.cpe_id_cpe =" . $this->_id;
            //echo $query;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->cpe_id_cpe = 0;
            $this->_data->cpe_tipCpe = null;
            $this->_data->cpe_serie = null;
            $this->_data->cpe_numero = null;
            $this->_data->cpe_numDocEmisor = null;
            $this->_data->cpe_tipOperacion = null;
            $this->_data->cpe_fecEmision = date('Y-m-d');;
            $this->_data->cpe_fecVencimiento = null;
            $this->_data->cpe_codLocalEmisor = '0000';
            $this->_data->cpe_tipDocUsuario = null;
            $this->_data->cpe_numDocUsuario = null;
            $this->_data->cpe_rznSocialUsuario = null;
            $this->_data->cpe_tipMoneda = null;

            $this->_data->cpe_codMotivo = null;
            $this->_data->cpe_desMotivo = null;
            $this->_data->cpe_tipDocAfectado = null;
            $this->_data->cpe_numDocAfectado = null;

            $this->_data->cpe_sumDsctoGlobal = 0;
            $this->_data->cpe_sumOtrosCargos = 0;
            $this->_data->cpe_mtoDescuentos = null;
            $this->_data->cpe_mtoOperGravadas = null;
            $this->_data->cpe_mtoOperInafectas = null;
            $this->_data->cpe_mtoOperExoneradas = null;
            $this->_data->cpe_mtoIGV = null;
            $this->_data->cpe_mtoISC = null;
            $this->_data->cpe_mtoOtrosTributos = null;
            $this->_data->cpe_mtoImpVenta = null;

            $this->_data->cpe_inCancelado = null;
            $this->_data->cpe_inBaja = null;
            $this->_data->cpe_desBaja = null;
            $this->_data->cpe_inEstado = '1';
            //ACA
            $this->_data->cpe_codRegPercepcion = '01';
            $this->_data->cpe_mtoBaseImponiblePercepcion = 0;
            $this->_data->cpe_mtoPercepcion = 0;
            $this->_data->cpe_mtoTotalIncPercepcion = 0;
            $this->_data->cpe_mtoOperGratuitas = null;
            $this->_data->cpe_mtoTotalAnticipo = null;
            $this->_data->cpe_codPaisCliente = 'PE';
            $this->_data->cpe_codUbigeoCliente = null;
            $this->_data->cpe_desDireccionCliente = null;
            $this->_data->cpe_codPaisEntrega = 'PE';
            $this->_data->cpe_codUbigeoEntrega = null;
            $this->_data->cpe_desDireccionEntrega = null;
            $this->_data->cpe_codIngenieria = null;
            $this->_data->cpe_fecPago = null;
            $this->_data->cpe_medPago = null;
            $this->_data->cpe_fecOtorgado = null;
            $this->_data->cpe_txtObservacion = null;
            //
            $this->_data->cpe_fecCreacion = null;
            $this->_data->cpe_usuCreacion = null;
            $this->_data->cpe_fecModificacion = null;
            $this->_data->cpe_usuModificacion = null;

            $this->_data->emp_id_emp = JRequest::getVar('empresaId', NULL);
            $this->_data->emp_tipDocUsuario = null;
            $this->_data->emp_numDocUsuario = null;
            $this->_data->emp_rznSocialUsuario = null;
        }
        return $this->_data;
    }

    function getNota() {
        $query = "SELECT CPE.cpe_id_cpe, CPE.emp_id_emp, CPE.cpe_serie, CPE.cpe_numero, CPE.cpe_numDocEmisor,
CASE CPE.cpe_tipCpe WHEN '01' THEN '01' WHEN '03' THEN '03' WHEN '07F' THEN '07' WHEN '07B' THEN '07' WHEN '08F' THEN '08' WHEN '08B' THEN '08' END AS cpe_tipCpe,
CPE.cpe_tipDocAfectado,
            CPE.cpe_codRegPercepcion,
            CPE.cpe_mtoBaseImponiblePercepcion,
            CPE.cpe_mtoPercepcion,
            CPE.cpe_mtoTotalIncPercepcion,
            CPE.cpe_mtoOperGratuitas,
            CPE.cpe_mtoTotalAnticipo,
            CPE.cpe_codPaisCliente,
            CPE.cpe_codUbigeoCliente,
            CPE.cpe_desDireccionCliente,
            CPE.cpe_codPaisEntrega,
            CPE.cpe_codUbigeoEntrega,
            CPE.cpe_desDireccionEntrega,
 CPE.cpe_tipOperacion, CPE.cpe_fecEmision
, CPE.cpe_fecVencimiento, CPE.cpe_codLocalEmisor, CPE.cpe_tipDocUsuario, CPE.cpe_numDocUsuario, CPE.cpe_rznSocialUsuario, CPE.cpe_tipMoneda
, CPE.cpe_codMotivo, CPE.cpe_desMotivo, CPE.cpe_tipDocAfectado, CPE.cpe_numDocAfectado, CPE.cpe_sumDsctoGlobal, CPE.cpe_sumOtrosCargos
, CPE.cpe_mtoDescuentos, CPE.cpe_mtoOperGravadas, CPE.cpe_mtoOperInafectas, CPE.cpe_mtoOperExoneradas, CPE.cpe_mtoIGV, CPE.cpe_mtoISC
, CPE.cpe_mtoOtrosTributos, CPE.cpe_mtoImpVenta, CPE.cpe_mtoOperGratuitas, CPE.cpe_mtoTotalAnticipo, CPE.cpe_inestado, 
EMP.emp_tipDocUsuario, EMP.emp_numDocUsuario, EMP.emp_rznSocialUsuario, EMP.emp_ipRepositorio, EMP.emp_rutaDest
FROM tfact_cpe CPE INNER JOIN tfact_emp EMP ON (CPE.emp_id_emp=EMP.emp_id_emp) 
WHERE CPE.cpe_inEstado=1 AND CPE.cpe_id_cpe =" . $this->_id;
        //echo $query;
        $this->_db->setQuery($query);
        $this->_data = $this->_db->loadObject();
        return $this->_data;
    }

    public function getDetalleMotivos($idGeneral) {
        $query = "SELECT DG.detg_codigo as value, DG.detg_descripcion as text FROM tfact_detalle_general DG WHERE DG.gen_id_gen='$idGeneral' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $motivos = $this->_db->loadObjectList();
        return $motivos;
    }
    
    public function getDetalleMedPago($idGeneral) {
        $query = "SELECT DG.detg_codigo as value, DG.detg_descripcion as text FROM tfact_detalle_general DG WHERE DG.gen_id_gen='$idGeneral' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $mps = $this->_db->loadObjectList();
        return $mps;
    }    

    public function getDetalleCatalogo($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_codigo as value, DG.detg_descripcion as text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_id_detg != '$defaultId' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $vias = $this->_db->loadObjectList();
        return $vias;
    }

    public function getDocumentoAfectado($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_codigo as value, DG.detg_descripcion as text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_id_detg != '$defaultId' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $docafecs = $this->_db->loadObjectList();
        return $docafecs;
    }

    public function store($data) {
        $user = & JFactory::getUser();
        $usuario = $user->username;

        if (!$data['cpe_id_cpe']) {
            $data['cpe_fecCreacion'] = date('Y-m-d H:m:s');
            $data['cpe_usuCreacion'] = $usuario;
        } else {
            $data['cpe_fecModificacion'] = date('Y-m-d H:m:s');
            $data['cpe_usuModificacion'] = $usuario;
        }


        if ($data['cpe_fecEmision']) {
            $temporalArray = explode('/', $data['cpe_fecEmision']);
            $data['cpe_fecEmision'] = $temporalArray[2] . '-' . $temporalArray[1] . '-' . $temporalArray[0];
        }

        if ($data['cpe_fecVencimiento']) {
            $temporalArray = explode('/', $data['cpe_fecVencimiento']);
            $data['cpe_fecVencimiento'] = $temporalArray[2] . '-' . $temporalArray[1] . '-' . $temporalArray[0];
        }
        
        if ($data['cpe_fecPago']) {
            $temporalArray = explode('/', $data['cpe_fecPago']);
            $data['cpe_fecPago'] = $temporalArray[2] . '-' . $temporalArray[1] . '-' . $temporalArray[0];
        }
        
        if ($data['cpe_fecOtorgado']) {
            $temporalArray = explode('/', $data['cpe_fecOtorgado']);
            $data['cpe_fecOtorgado'] = $temporalArray[2] . '-' . $temporalArray[1] . '-' . $temporalArray[0];
        }

        $row = & $this->getTable('cpe', '');
        // bind it to the table
        if (!$row->bind($data)) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }

        // Make sure the data is valid
        if (!$row->check()) {
            $this->setError($row->getError());
            return false;
        }
        // Store it in the db
        if (!$row->store()) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }
        return $row->cpe_id_cpe;
    }

    public function removeCpe($cpeId) {
        $query = "UPDATE tfact_cpe CPE SET CPE.cpe_inEstado = '0' WHERE CPE.cpe_id_cpe = '$cpeId'";
        $this->_db->setQuery($query);
        $this->_db->query();
//        print_r($query);
    }

    public function getDcpes($cpeId) {
        $query = "SELECT DCPE.dcpe_id_detalle_cpe, DCPE.dcpe_codProducto, DCPE.cpe_id_cpe, DCPE.dcpe_id_producto, UMED.detg_descripcion as dcpe_codUnidadMedida_desc, DCPE.dcpe_codUnidadMedida, DCPE.dcpe_ctdUnidadItem, 
DCPE.dcpe_codProducto, DCPE.dcpe_codProductoSUNAT, DCPE.dcpe_desItem, DCPE.dcpe_mtoValorUnitario, DCPE.dcpe_mtoDsctoItem, DCPE.dcpe_mtoIgvItem,
DCPE.dcpe_tipAfeIGV, AIGV.detg_descripcion as dcpe_tipAfeIGV_desc, DCPE.dcpe_mtoIscItem, DCPE.dcpe_tipSisISC, DCPE.dcpe_mtoPrecioVentaItem, DCPE.dcpe_mtoValorVentaItem
FROM tfact_detalle_cpe DCPE
LEFT JOIN tfact_detalle_general UMED ON (UMED.dgen_catalogo=3 AND DCPE.dcpe_codUnidadMedida=UMED.detg_codigo)
LEFT JOIN tfact_detalle_general AIGV ON (AIGV.dgen_catalogo=07 AND DCPE.dcpe_tipAfeIGV=AIGV.detg_codigo)
WHERE DCPE.cpe_id_cpe = '{$cpeId}'";

        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function getRel($cpeId) {
        $query = "SELECT REL.rel_id_rel,REL.cpe_id_cpe,
IDR.detg_descripcion as rel_indDocRelacionado_desc, REl.rel_indDocRelacionado,
TDR.detg_descripcion as rel_tipDocRelacionado_desc,REL.rel_tipDocRelacionado, REL.rel_numDocRelacionado,
TDE.detg_descripcion as rel_tipDocEmisor_desc, REL.rel_tipDocEmisor, REL.rel_numDocEmisor,REL.rel_mtoDocRelacionado
FROM tfact_rel REL 
LEFT JOIN tfact_detalle_general IDR ON (IDR.dgen_catalogo=0 AND REL.rel_indDocRelacionado=IDR.detg_codigo) 
LEFT JOIN tfact_detalle_general TDR ON (TDR.dgen_catalogo=12 AND REL.rel_tipDocRelacionado=TDR.detg_codigo) 
LEFT JOIN tfact_detalle_general TDE ON (TDE.dgen_catalogo=6 AND REL.rel_tipDocEmisor=TDE.detg_codigo) 
WHERE REL.cpe_id_cpe = {$cpeId}";

        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function getLey($cpeId) {
        $query = "SELECT LEY.*,
DL.detg_descripcion as ley_desLeyenda
FROM tfact_ley Ley 
LEFT JOIN tfact_detalle_general DL ON (DL.dgen_catalogo=15 AND LEY.ley_codLeyenda=DL.detg_codigo) 
WHERE LEY.cpe_id_cpe = {$cpeId}";

        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function generarNumero($emp_id_emp, $cpe_tipCpe, $cpe_serie) {
        $query = "SELECT MAX(CPE.cpe_numero) + 1 AS cpe_numeroSig
                  FROM tfact_cpe CPE WHERE CPE.cpe_inEstado=1 AND CPE.emp_id_emp='$emp_id_emp'  AND CPE.cpe_tipCpe='$cpe_tipCpe' AND CPE.cpe_serie='$cpe_serie'";
        $this->_db->setQuery($query);
        $dato = $this->_db->loadObject();
        echo $dato->cpe_numeroSig;
        die();
    }

    public function indicadorduplicado($emp_id_emp, $cpe_tipCpe, $cpe_serie, $cpe_numero, $cpe_id_cpe) {
        $query = "SELECT cpe_id_cpe, emp_id_emp, cpe_tipCpe, cpe_serie, cpe_numero FROM tfact_cpe WHERE cpe_inEstado=1 AND emp_id_emp='$emp_id_emp' AND cpe_tipCpe='$cpe_tipCpe' AND cpe_serie='$cpe_serie' AND cpe_numero='$cpe_numero' AND cpe_id_cpe!='$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
        $nfilas = $this->_db->getNumRows();
        if ($nfilas > 0) {
            echo 'invalid';
        } else {
            echo 'OK';
        }
        die();
    }

    public function obtenerDescLey($emp_id_emp, $cpe_tipCpe, $cpe_serie) {
        $query = "SELECT MAX(CPE.cpe_numero) + 1 AS cpe_numeroSig
                  FROM tfact_cpe CPE WHERE CPE.cpe_inEstado=1 AND CPE.emp_id_emp='$emp_id_emp'  AND CPE.cpe_tipCpe='$cpe_tipCpe' AND CPE.cpe_serie='$cpe_serie'";
        $this->_db->setQuery($query);
        $dato = $this->_db->loadObject();
        echo $dato->cpe_numeroSig;
        die();
    }

    public function mtoOperGravadas($cpe_id_cpe, $detg_tipo) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoOperGravadas = (
SELECT IFNULL(SUM(DCPE.dcpe_mtoValorUnitario*DCPE.dcpe_ctdUnidadItem),0) as totalValor
FROM tfact_detalle_cpe DCPE INNER JOIN 
tfact_detalle_general DETG ON (DCPE.dcpe_tipAfeIGV=detg_codigo AND DETG.dgen_catalogo=7)
WHERE DCPE.cpe_id_cpe = '$cpe_id_cpe' AND DETG.detg_tipo = '$detg_tipo')
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function mtoOperInafectas($cpe_id_cpe, $detg_tipo) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoOperInafectas = (
SELECT IFNULL(SUM(DCPE.dcpe_mtoValorUnitario*DCPE.dcpe_ctdUnidadItem),0) as totalValor
FROM tfact_detalle_cpe DCPE INNER JOIN 
tfact_detalle_general DETG ON (DCPE.dcpe_tipAfeIGV=detg_codigo AND DETG.dgen_catalogo=7)
WHERE DCPE.cpe_id_cpe = '$cpe_id_cpe' AND DETG.detg_tipo = '$detg_tipo')
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function mtoOperExoneradas($cpe_id_cpe, $detg_tipo) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoOperExoneradas = (
SELECT IFNULL(SUM(DCPE.dcpe_mtoValorUnitario*DCPE.dcpe_ctdUnidadItem),0) as totalValor
FROM tfact_detalle_cpe DCPE INNER JOIN 
tfact_detalle_general DETG ON (DCPE.dcpe_tipAfeIGV=detg_codigo AND DETG.dgen_catalogo=7)
WHERE DCPE.cpe_id_cpe = '$cpe_id_cpe' AND DETG.detg_tipo = '$detg_tipo')
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function calcIGVTotal($cpe_id_cpe) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoIGV = 
(SELECT SUM(DCPE.dcpe_mtoIgvItem) as totalValor
FROM tfact_detalle_cpe DCPE 
WHERE DCPE.cpe_id_cpe='$cpe_id_cpe')
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function calcISCTotal($cpe_id_cpe) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoISC= 
(SELECT SUM(DCPE.dcpe_mtoIscItem) as totalValor
FROM tfact_detalle_cpe DCPE 
WHERE DCPE.cpe_id_cpe='$cpe_id_cpe')
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function calcDescuento($cpe_id_cpe) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoDescuentos= 
(SELECT IFNULL(SUM(DCPE.dcpe_mtoDsctoItem),0) as totalValor
FROM tfact_detalle_cpe DCPE 
WHERE DCPE.cpe_id_cpe='$cpe_id_cpe')+ coalesce(CPE.cpe_sumDsctoGlobal,0)
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function calcTotalAnticipos($cpe_id_cpe) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoTotalAnticipo = 
(SELECT IFNULL(SUM(REL.rel_mtoDocRelacionado),0) as totalAnticipo
FROM tfact_rel REL 
WHERE REL.rel_tipDocRElacionado IN ('02','03') AND REL.cpe_id_cpe='$cpe_id_cpe')
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function obtener_mtoImpVenta($cpe_id_cpe) {
        $query = "SELECT CPE.cpe_mtoImpVenta FROM tfact_cpe CPE WHERE CPE.cpe_id_cpe='$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function mtoImpVenta($cpe_id_cpe) {
        $query = "UPDATE tfact_cpe CPE
SET CPE.cpe_mtoImpVenta =  coalesce(CPE.cpe_sumOtrosCargos,0) + coalesce(CPE.cpe_mtoOperGravadas,0) + coalesce(CPE.cpe_mtoOperInafectas,0) + coalesce(CPE.cpe_mtoOperExoneradas,0) 
+ coalesce(CPE.cpe_mtoIGV,0) + coalesce(CPE.cpe_mtoISC,0) + coalesce(CPE.cpe_mtoOtrosTributos,0) - coalesce(CPE.cpe_mtoDescuentos,0)
WHERE CPE.cpe_id_cpe = '$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function crearJson($cpe_id_cpe) {
        $query = "SELECT EMP.emp_numDocUsuario, CURDATE() as fecGeneracion,
CPE.cpe_fecEmision AS fecComunicacion,
CASE CPE.cpe_tipCpe WHEN '01' THEN '01' WHEN '03' THEN '03' WHEN '07F' THEN '07' WHEN '07B' THEN '07' WHEN '08F' THEN '08' WHEN '08B' THEN '08' END AS tipDocBaja,
CPE.cpe_numero AS numDocBaja,
CPE.cpe_desBaja AS desMotivoBaja
FROM tfact_cpe CPE INNER JOIN tfact_emp EMP ON (CPE.emp_id_emp=EMP.emp_id_emp) 
WHERE CPE.cpe_inEstado=1 AND CPE.cpe_id_cpe='$cpe_id_cpe'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function num2letras($cpe_mtoImpVenta, $cpe_id_cpe, $moneda) {
        $fem = false;
        $dec = true;
        $num = $cpe_mtoImpVenta;
        $matuni[2] = "dos";
        $matuni[3] = "tres";
        $matuni[4] = "cuatro";
        $matuni[5] = "cinco";
        $matuni[6] = "seis";
        $matuni[7] = "siete";
        $matuni[8] = "ocho";
        $matuni[9] = "nueve";
        $matuni[10] = "diez";
        $matuni[11] = "once";
        $matuni[12] = "doce";
        $matuni[13] = "trece";
        $matuni[14] = "catorce";
        $matuni[15] = "quince";
        $matuni[16] = "dieciseis";
        $matuni[17] = "diecisiete";
        $matuni[18] = "dieciocho";
        $matuni[19] = "diecinueve";
        $matuni[20] = "veinte";
        $matunisub[2] = "dos";
        $matunisub[3] = "tres";
        $matunisub[4] = "cuatro";
        $matunisub[5] = "quin";
        $matunisub[6] = "seis";
        $matunisub[7] = "sete";
        $matunisub[8] = "ocho";
        $matunisub[9] = "nove";

        $matdec[2] = "veint";
        $matdec[3] = "treinta";
        $matdec[4] = "cuarenta";
        $matdec[5] = "cincuenta";
        $matdec[6] = "sesenta";
        $matdec[7] = "setenta";
        $matdec[8] = "ochenta";
        $matdec[9] = "noventa";
        $matsub[3] = 'mill';
        $matsub[5] = 'bill';
        $matsub[7] = 'mill';
        $matsub[9] = 'trill';
        $matsub[11] = 'mill';
        $matsub[13] = 'bill';
        $matsub[15] = 'mill';
        $matmil[4] = 'millones';
        $matmil[6] = 'billones';
        $matmil[7] = 'de billones';
        $matmil[8] = 'millones de billones';
        $matmil[10] = 'trillones';
        $matmil[11] = 'de trillones';
        $matmil[12] = 'millones de trillones';
        $matmil[13] = 'de trillones';
        $matmil[14] = 'billones de trillones';
        $matmil[15] = 'de billones de trillones';
        $matmil[16] = 'millones de billones de trillones';

        //Zi hack
        $float = explode('.', $num);
        $num = $float[0];

        $num = trim((string) @$num);
        if ($num[0] == '-') {
            $neg = 'menos ';
            $num = substr($num, 1);
        } else
            $neg = '';
        while ($num[0] == '0')
            $num = substr($num, 1);
        if ($num[0] < '1' or $num[0] > 9)
            $num = '0' . $num;
        $zeros = true;
        $punt = false;
        $ent = '';
        $fra = '';
        for ($c = 0; $c < strlen($num); $c++) {
            $n = $num[$c];
            if (!(strpos(".,'''", $n) === false)) {
                if ($punt)
                    break;
                else {
                    $punt = true;
                    continue;
                }
            } elseif (!(strpos('0123456789', $n) === false)) {
                if ($punt) {
                    if ($n != '0')
                        $zeros = false;
                    $fra .= $n;
                } else
                    $ent .= $n;
            } else
                break;
        }
        $ent = '     ' . $ent;
        if ($dec and $fra and ! $zeros) {
            $fin = ' coma';
            for ($n = 0; $n < strlen($fra); $n++) {
                if (($s = $fra[$n]) == '0')
                    $fin .= ' cero';
                elseif ($s == '1')
                    $fin .= $fem ? ' una' : ' un';
                else
                    $fin .= ' ' . $matuni[$s];
            }
        } else
            $fin = '';
        if ((int) $ent === 0)
            return 'Cero ' . $fin;
        $tex = '';
        $sub = 0;
        $mils = 0;
        $neutro = false;
        while (($num = substr($ent, -3)) != '   ') {
            $ent = substr($ent, 0, -3);
            if (++$sub < 3 and $fem) {
                $matuni[1] = 'una';
                $subcent = 'as';
            } else {
                $matuni[1] = $neutro ? 'un' : 'uno';
                $subcent = 'os';
            }
            $t = '';
            $n2 = substr($num, 1);
            if ($n2 == '00') {
                
            } elseif ($n2 < 21)
                $t = ' ' . $matuni[(int) $n2];
            elseif ($n2 < 30) {
                $n3 = $num[2];
                if ($n3 != 0)
                    $t = 'i' . $matuni[$n3];
                $n2 = $num[1];
                $t = ' ' . $matdec[$n2] . $t;
            }else {
                $n3 = $num[2];
                if ($n3 != 0)
                    $t = ' y ' . $matuni[$n3];
                $n2 = $num[1];
                $t = ' ' . $matdec[$n2] . $t;
            }
            $n = $num[0];
            if ($n == 1) {
                $t = ' ciento' . $t;
            } elseif ($n == 5) {
                $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t;
            } elseif ($n != 0) {
                $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t;
            }
            if ($sub == 1) {
                
            } elseif (!isset($matsub[$sub])) {
                if ($num == 1) {
                    $t = ' mil';
                } elseif ($num > 1) {
                    $t .= ' mil';
                }
            } elseif ($num == 1) {
                $t .= ' ' . $matsub[$sub] . '?n';
            } elseif ($num > 1) {
                $t .= ' ' . $matsub[$sub] . 'ones';
            }
            if ($num == '000')
                $mils ++;
            elseif ($mils != 0) {
                if (isset($matmil[$sub]))
                    $t .= ' ' . $matmil[$sub];
                $mils = 0;
            }
            $neutro = true;
            $tex = $t . $tex;
        }
        $tex = $neg . substr($tex, 1) . $fin;
        //Zi hack --> return ucfirst($tex);
        $end_num = ucfirst($tex) . ' con ' . $float[1] . '/100 ' . $moneda;

        $query = "UPDATE tfact_ley LEY
                  SET LEY.ley_desLeyendaPers =  '$end_num' WHERE LEY.cpe_id_cpe = '$cpe_id_cpe' AND LEY.ley_codLeyenda = 1000";
        $this->_db->setQuery($query);
        $this->_db->query();
        //print_r($query);
    }

}

?>
