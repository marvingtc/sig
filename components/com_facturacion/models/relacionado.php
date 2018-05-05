<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class EmpresasModelRelacionado extends JModel {

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
            $query = "SELECT REL.*, CPE.cpe_serie, CPE.cpe_numero
FROM tfact_rel REL INNER JOIN tfact_cpe CPE ON (REL.cpe_id_cpe=CPE.cpe_id_cpe)
WHERE REL.rel_id_rel = " . $this->_id;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->rel_id_rel = 0;            
            $this->_data->rel_indDocRelacionado = null;
            $this->_data->rel_tipDocRelacionado = null;
            $this->_data->rel_numDocRelacionado = null;
            $this->_data->rel_tipDocEmisor = null;
            $this->_data->rel_numDocEmisor = null;
            $this->_data->rel_mtoDocRelacionado = null;
            
            $this->_data->cpe_id_cpe = JRequest::getVar('cpeId', NULL);
     
            $this->_data->rel_fecCreacion = null;
            $this->_data->rel_usuCreacion = null;
            $this->_data->rel_fecModificacion = null;
            $this->_data->rel_usuModificacion = null;
        }
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

        if (!$data['rel_id_rel']) {
            $data['rel_fecCreacion'] = date('Y-m-d H:m:s');
            $data['rel_usuCreacion'] = $usuario;
        } else {
            $data['rel_fecModificacion'] = date('Y-m-d H:m:s');
            $data['rel_usuModificacion'] = $usuario;
        }

        $row = & $this->getTable('rel', '');
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
        return $row->rel_id_rel;
    }

    public function removeRel($dcpeId) {
        $query = "DELETE FROM tfact_rel WHERE rel_id_rel = '$dcpeId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

}

?>
