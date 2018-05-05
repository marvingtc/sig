<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class EmpresasModelDataBase extends JModel {

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
            $query = "SELECT EMP.*
                      FROM tfact_emp EMP
                      WHERE EMP.emp_id_emp=" . $this->_id;

            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->emp_id_emp = 0;
            $this->_data->emp_tipDocUsuario = NULL;
            $this->_data->emp_numDocUsuario = NULL;
            $this->_data->emp_rznSocialUsuario = NULL;
            $this->_data->emp_ipRepositorio = NULL;
            $this->_data->emp_rutaDest = NULL;
            
            $this->_data->emp_fecCreacion = null;
            $this->_data->emp_usuCreacion = null;
            $this->_data->emp_fecModificacion = null;
            $this->_data->emp_usuModificacion = null;
        }
        return $this->_data;
    }

    public function store($data) {
        $user = & JFactory::getUser();
        $usuario = $user->username;

        if (!$data['emp_id_emp']) {
            $data['emp_fecCreacion'] = date('Y-m-d H:m:s');
            $data['emp_usuCreacion'] = $usuario;
        } else {
            $data['emp_fecModificacion'] = date('Y-m-d H:m:s');
            $data['emp_usuModificacion'] = $usuario;
        }

        $row = & $this->getTable('database', '');
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

        return $row->emp_id_emp;
    }

    public function getCpes($empresaId) {
        $query = "SELECT CPE.cpe_id_cpe, CPE.cpe_serie, CPE.cpe_numero, CPE.emp_id_emp, 
TCPE.detg_descripcion as cpe_tipCpe, TOPE.detg_descripcion as cpe_tipOperacion, TMON.detg_descripcion as cpe_tipMoneda,CPE.cpe_fecEmision,CPE.cpe_fecVencimiento,
CPE.cpe_codLocalEmisor,CASE  WHEN CPE.cpe_inCancelado='1' THEN 'Pagado' WHEN CPE.cpe_inCancelado='0' THEN 'Pendiente' END as cpe_inCancelado, 
CASE  WHEN CPE.cpe_inBaja='1' THEN 'Anulado (Baja)' WHEN CPE.cpe_inBaja='0' THEN 'Emitido' END as cpe_inBaja,
CPE.cpe_codIngenieria,
CPE.cpe_tipDocUsuario, CPE.cpe_numDocUsuario, CPE.cpe_rznSocialUsuario,  
CPE.cpe_sumDsctoGlobal, CPE.cpe_sumOtrosCargos, CPE.cpe_mtoDescuentos, CPE.cpe_mtoOperGravadas, CPE.cpe_mtoOperInafectas, 
CPE.cpe_mtoOperExoneradas, CPE.cpe_mtoIGV, CPE.cpe_mtoISC, CPE.cpe_mtoOtrosTributos, CPE.cpe_mtoImpVenta
FROM tfact_cpe AS CPE 
LEFT JOIN tfact_detalle_general AS TCPE ON (TCPE.dgen_catalogo=1  AND TCPE.detg_codigo = CPE.cpe_tipCpe)
LEFT JOIN tfact_detalle_general AS TOPE ON (TOPE.dgen_catalogo=17 AND TOPE.detg_codigo = CPE.cpe_tipOperacion)
LEFT JOIN tfact_detalle_general AS TMON ON (TMON.dgen_catalogo=2  AND TMON.detg_codigo = CPE.cpe_tipMoneda)
WHERE CPE_inEstado=1 AND CPE.emp_id_emp = {$empresaId} 
ORDER BY CPE.cpe_fecEmision DESC, CPE.cpe_tipCpe,CPE.cpe_serie, CPE.cpe_numero";

        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
        public function getCpesRangos($empresaId, $inicio) {
        $query = "SELECT CPE.cpe_id_cpe, CPE.cpe_serie, CPE.cpe_numero, CPE.emp_id_emp, 
TCPE.detg_descripcion as cpe_tipCpe, TOPE.detg_descripcion as cpe_tipOperacion, TMON.detg_descripcion as cpe_tipMoneda,CPE.cpe_fecEmision,CPE.cpe_fecVencimiento,
CPE.cpe_codLocalEmisor,CASE  WHEN CPE.cpe_inCancelado='1' THEN 'Pagado' WHEN CPE.cpe_inCancelado='0' THEN 'Pendiente' END as cpe_inCancelado, 
CASE  WHEN CPE.cpe_inBaja='1' THEN 'Anulado (Baja)' WHEN CPE.cpe_inBaja='0' THEN 'Emitido' END as cpe_inBaja,
CPE.cpe_codIngenieria,
CPE.cpe_tipDocUsuario, CPE.cpe_numDocUsuario, CPE.cpe_rznSocialUsuario,  
CPE.cpe_sumDsctoGlobal, CPE.cpe_sumOtrosCargos, CPE.cpe_mtoDescuentos, CPE.cpe_mtoOperGravadas, CPE.cpe_mtoOperInafectas, 
CPE.cpe_mtoOperExoneradas, CPE.cpe_mtoIGV, CPE.cpe_mtoISC, CPE.cpe_mtoOtrosTributos, CPE.cpe_mtoImpVenta
FROM tfact_cpe AS CPE 
LEFT JOIN tfact_detalle_general AS TCPE ON (TCPE.dgen_catalogo=1  AND TCPE.detg_codigo = CPE.cpe_tipCpe)
LEFT JOIN tfact_detalle_general AS TOPE ON (TOPE.dgen_catalogo=17 AND TOPE.detg_codigo = CPE.cpe_tipOperacion)
LEFT JOIN tfact_detalle_general AS TMON ON (TMON.dgen_catalogo=2  AND TMON.detg_codigo = CPE.cpe_tipMoneda)
WHERE CPE_inEstado=1 AND CPE.emp_id_emp = {$empresaId} 
ORDER BY CPE.cpe_fecEmision DESC, CPE.cpe_tipCpe,CPE.cpe_serie, CPE.cpe_numero 
LIMIT  {$inicio}, 10";

        $this->_db->setQuery($query);
        $rangos = $this->_db->loadObjectList();
        return $rangos;
    }

    public function totalRegistros($emp_id_emp) {
        $query = "SELECT count(*) FROM tfact_cpe CPE WHERE CPE.emp_id_emp='$emp_id_emp'";
        $this->_db->setQuery($query);
        $total = $this->_db->loadObjectList();
        return $total;
    }
    public function getDetalleCatalogoFijo($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_codigo as value, DG.detg_descripcion as text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_codigo = '$defaultId'";
        $this->_db->setQuery($query);
        $vias = $this->_db->loadObjectList();
        return $vias;
    }
    public function getDetalleCatalogo($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_codigo as value, DG.detg_descripcion as text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_id_detg != '$defaultId' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $vias = $this->_db->loadObjectList();
        return $vias;
    }
    public function getDetalleRuta($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_descripcion as value, DG.detg_codigo as text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_id_detg != '$defaultId' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $vias = $this->_db->loadObjectList();
        return $vias;
    }
    
        public function removeCpe($cpeId) {
        $query = "UPDATE tfact_cpe CPE SET CPE.cpe_inEstado = '0' WHERE CPE.cpe_id_cpe = '$cpeId'";
        $this->_db->setQuery($query);
        $this->_db->query();
        print_r($query);
    }
    
   
}

?>

