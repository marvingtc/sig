<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelCaso extends JModel
{
    var $_id;
    var $_data;

    function __construct()
    {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);
    }

    function setId($id)
    {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData()    
    {    date_default_timezone_set('America/Lima'); 
        // Load the data
        if (empty( $this->_data )) {
            $query = "SELECT C.id_caso, C.id_tema, T.id_n1, T.id_n2 , C.id_dg_tipo_caso, C.tx_especifico,C.nu_ruc, C.tx_razon_social, C.fe_caso, 
                      C.tx_agente, C.tx_contacto, C.tx_telefono                      
                      FROM caso C LEFT JOIN 001_tema T ON (C.id_tema=T.id_tema)
		      WHERE C.id_caso =".$this->_id;
            
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->id_caso = 0;
            $this->_data->id_tema = NULL;
            $this->_data->id_n1 = NULL;
            $this->_data->id_n2 = NULL;
            $this->_data->id_dg_tipo_caso = NULL;
            $this->_data->tx_especifico = NULL;            
            $this->_data->nu_ruc = NULL;
            $this->_data->tx_razon_social = NULL;

            $this->_data->fe_caso =  date("Y-m-d");
            $this->_data->tx_agente = NULL;
            $this->_data->tx_contacto = NULL;
            $this->_data->tx_telefono = NULL;
        }
        return $this->_data;
    }
    
     public function getN1s() {
        $query = "SELECT id_tema as value, tx_descripcion as text FROM tema WHERE id_dg_nivel = '262'";
        $this->_db->setQuery($query);
        $n1s = $this->_db->loadObjectList();
        return $n1s;
    }
    
    public function getN2s() {
        global $mainframe, $option;
        $filter_n1 = $mainframe->getUserStateFromRequest( $option.'.nutritions.filter_n1','filter_n1', '0', 'int' );
        $where = '';
        if($filter_n1 > 0){
            $where = "AND id_tema_padre = '{$filter_n1}'";
        }
        $query = "SELECT id_tema as value, tx_descripcion as text FROM tema WHERE id_dg_nivel = '256' {$where}";
        $this->_db->setQuery($query);
        $n2s = $this->_db->loadObjectList();
        return $n2s;
    }
    
     public function getTipos() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '37'";
        $this->_db->setQuery($query);
        $tipos = $this->_db->loadObjectList();
        return $tipos;
    }

    public function store($data)
    {   
        if($data['fe_caso']){
            $tempArray = explode('/', $data['fe_caso']);
            $data['fe_caso'] = $tempArray[2].'-'.$tempArray[1].'-'.$tempArray[0];
        }
        $row  =& $this->getTable('caso', '');
        // bind it to the table
        if (!$row->bind($data)) {
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }
        
        // Make sure the data is valid
        if (!$row->check()) {
            $this->setError($row->getError());
            return false;
        }
        // Store it in the db
        if (!$row->store()) {
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }
       
        return $row->id_caso;
    }
    
    public function getDetallesCaso($casoId) {
        $query = "SELECT DC.id_detalle_caso, DC.id_dg_estado, DG_ES.tx_descripcion as estado_detalle, DC.tx_respuesta, DC.tx_sau, DC.fe_evento 
                  FROM detalle_caso DC 
                  INNER JOIN detalle_general DG_ES on (DG_ES.id_detalle_general=DC.id_dg_estado)
                  WHERE DC.id_caso = {$casoId}";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}
?>
