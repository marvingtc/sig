<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

class EmpresasModelBajas extends JModel {

    /**
     * Data array
     *
     * @var array
     */
    var $_data;

    public function getDetalleCatalogo($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_codigo as value, DG.detg_descripcion as text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_id_detg != '$defaultId' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $lists = $this->_db->loadObjectList();
        return $lists;
    }

    public function getSearchResults() {

        $cpeId = JRequest::getInt('$cpe_id_cpe', 0);
        $emp_id_emp = JRequest::getVar('emp_id_emp', null);
        $cpe_tipCpe = JRequest::getVar('cpe_tipCpe', null);
        $cpe_numero = JRequest::getVar('cpe_numero', null);
        $cpe_numDocUsuario = JRequest::getVar('cpe_numDocUsuario', null);
        $cpe_rznSocialUsuario = JRequest::getVar('cpe_rznSocialUsuario', null);
        $cpe_codIngenieria = JRequest::getVar('cpe_codIngenieria', null);
        $cpe_inCancelado = JRequest::getVar('cpe_inCancelado', null);
        $cpe_fecEmision = JRequest::getVar('cpe_fecEmision', null);

        $where = array();
        if ($cpe_fecEmision) {
            $where[] = " CPE.cpe_fecEmision = '{$cpe_fecEmision}' ";
        }
        if ($cpe_inCancelado) {
            $where[] = " CPE.cpe_inCancelado = '{$cpe_inCancelado}' ";
        }
        if ($cpe_codIngenieria) {
            $where[] = " CPE.cpe_codIngenieria = '{$cpe_codIngenieria}' ";
        }
        if ($cpe_rznSocialUsuario) {
            $where[] = " CPE.cpe_rznSocialUsuario LIKE '%{$cpe_rznSocialUsuario}%' ";
        }
        if ($cpe_numDocUsuario) {
            $where[] = " CPE.cpe_numDocUsuario = '{$cpe_numDocUsuario}' ";
        }
        if ($cpe_numero) {
            $where[] = " CPE.cpe_numero = '{$cpe_numero}' ";
        }
        if ($cpe_tipCpe) {
            $where[] = " CPE.cpe_tipCpe = '{$cpe_tipCpe}' ";
        }
        if ($emp_id_emp) {
            $where[] = " CPE.emp_id_emp = '{$emp_id_emp}' ";
        }
        if ($cpeId > 0) {
            $where[] = " CPE.cpe_id_cpe = '{$cpeId}' ";
        }

        $where = ( count($where) ? ' WHERE CPE.cpe_inBaja=1 AND ' . implode(' AND ', $where) : '' );

        $query = "SELECT CPE.cpe_id_cpe, CPE.cpe_serie, CPE.cpe_numero, CPE.emp_id_emp, 
TCPE.detg_descripcion as cpe_tipCpe, TOPE.detg_descripcion as cpe_tipOperacion, TMON.detg_descripcion as cpe_tipMoneda,CPE.cpe_fecEmision,CPE.cpe_fecVencimiento,
CPE.cpe_codLocalEmisor,CASE  WHEN CPE.cpe_inCancelado='1' THEN 'SI' WHEN CPE.cpe_inCancelado='0' THEN 'NO' END as cpe_inCancelado, CPE.cpe_codIngenieria,
CPE.cpe_tipDocUsuario, CPE.cpe_numDocUsuario, CPE.cpe_rznSocialUsuario,  
CPE.cpe_sumDsctoGlobal, CPE.cpe_sumOtrosCargos, CPE.cpe_mtoDescuentos, CPE.cpe_mtoOperGravadas, CPE.cpe_mtoOperInafectas, 
CPE.cpe_mtoOperExoneradas, CPE.cpe_mtoIGV, CPE.cpe_mtoISC, CPE.cpe_mtoOtrosTributos, CPE.cpe_mtoImpVenta
FROM tfact_cpe AS CPE 
LEFT JOIN tfact_detalle_general AS TCPE ON (TCPE.dgen_catalogo=1  AND TCPE.detg_codigo = CPE.cpe_tipCpe)
LEFT JOIN tfact_detalle_general AS TOPE ON (TOPE.dgen_catalogo=17 AND TOPE.detg_codigo = CPE.cpe_tipOperacion)
LEFT JOIN tfact_detalle_general AS TMON ON (TMON.dgen_catalogo=2  AND TMON.detg_codigo = CPE.cpe_tipMoneda)
{$where} LIMIT 0,100";
//        print_r($query);
//        die();
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();

        return $results;
    }

    public function crearJson($cpe_id_cpe) {
        $query = "SELECT EMP.emp_numDocUsuario, CPE.cpe_fecModificacion,
CPE.cpe_fecEmision,
CASE CPE.cpe_tipCpe WHEN '01' THEN '01' WHEN '03' THEN '03' WHEN '07F' THEN '07' WHEN '07B' THEN '07' WHEN '08F' THEN '08' WHEN '08B' THEN '08' END AS cpe_tipCpe,
CPE.cpe_numero AS cpe_serie,
CPE.cpe_numero AS cpe_numero,
CPE.cpe_desBaja AS cpe_desBaja
FROM tfact_cpe CPE INNER JOIN tfact_emp EMP ON (CPE.emp_id_emp=EMP.emp_id_emp) 
WHERE CPE.cpe_id_cpe='$cpe_id_cpe'";
//                print_r($query);
//        die();
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}

?>