<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

class EmpresasModelDcpe extends JModel {

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
            $query = "SELECT DCPE.*, CPE.cpe_serie, CPE.cpe_numero, AFE.detg_valor
FROM tfact_detalle_cpe DCPE 
LEFT JOIN tfact_cpe CPE ON (DCPE.cpe_id_cpe=CPE.cpe_id_cpe)
LEFT JOIN tfact_detalle_general AFE ON (AFE.dgen_catalogo=7 AND DCPE.dcpe_tipAfeIGV=AFE.detg_codigo)
WHERE DCPE.dcpe_id_detalle_cpe = " . $this->_id;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->dcpe_id_detalle_cpe = 0;            
            $this->_data->dcpe_id_producto = null;
            $this->_data->dcpe_codUnidadMedida = null;
            $this->_data->dcpe_ctdUnidadItem = null;
            $this->_data->dcpe_codProducto = null;
            $this->_data->dcpe_codProductoSUNAT = null;
            $this->_data->dcpe_desItem = null;
            $this->_data->dcpe_mtoValorUnitario = null;
            $this->_data->dcpe_mtoDsctoItem = null;
            $this->_data->dcpe_mtoIgvItem = null;
            $this->_data->dcpe_tipAfeIGV = null;
            $this->_data->dcpe_mtoIscItem = null;
            $this->_data->dcpe_tipSisISC = null;
            $this->_data->dcpe_mtoPrecioVentaItem = null;
            $this->_data->dcpe_mtoValorVentaItem = null;
            $this->_data->cpe_id_cpe = JRequest::getVar('cpeId', NULL);
            
            $this->_data->cpe_serie = null;
            $this->_data->cpe_numero = null;
            
            $this->_data->dcpe_fecCreacion = null;
            $this->_data->dcpe_usuCreacion = null;
            $this->_data->dcpe_fecModificacion = null;
            $this->_data->dcpe_usuModificacion = null;
            
            $this->_data->detg_valor = null;
            
        }
//        $this->obtenerValor(16);
        return $this->_data;
    }

    public function getDetalleCatalogo($idGeneral, $defaultId) {
        $query = "SELECT DG.detg_codigo AS value, DG.detg_descripcion AS text FROM tfact_detalle_general DG WHERE DG.dgen_catalogo='$idGeneral' AND DG.detg_id_detg != '$defaultId' ORDER BY DG.detg_orden ASC";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

//    public function getProductos() {
//        $query = "SELECT dcpe_id_detalle_cpe as value, tx_descripcion as text FROM detalle_general WHERE id_general = '21'";
//        $this->_db->setQuery($query);
//        $results = $this->_db->loadObjectList();
//        return $results;
//    }


    public function store($data) {
        $user = & JFactory::getUser();
        $usuario = $user->username;

        if (!$data['dcpe_id_detalle_cpe']) {
            $data['dcpe_fecCreacion'] = date('Y-m-d H:m:s');
            $data['dcpe_usuCreacion'] = $usuario;
        } else {
            $data['dcpe_fecModificacion'] = date('Y-m-d H:m:s');
            $data['dcpe_usuModificacion'] = $usuario;
        }

        $row = & $this->getTable('dcpe', '');
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
        return $row->dcpe_id_detalle_cpe;
    }

    public function removeDcpe($dcpeId) {
        $query = "DELETE FROM tfact_detalle_cpe WHERE dcpe_id_detalle_cpe = '$dcpeId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
    public function obtenerValor($dcpeAfectacion){
        $query = "SELECT DETG.detg_valor FROM tfact_detalle_general AS DETG WHERE DETG.dgen_catalogo=7 AND DETG.detg_codigo = '$dcpeAfectacion'";
//        die ($query);
        $this->_db->setQuery($query);
        $dato = $this->_db->loadObject();
        echo $dato->detg_valor;
        die();
//        print_r($dato);
//        die ();
    }

}

?>
