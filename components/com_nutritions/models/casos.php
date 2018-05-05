<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

class NutritionsModelCasos extends JModel {

    /**
     * Data array
     *
     * @var array
     */
    var $_data;
    
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
    
        
        public function getSearchResults() {
        $n1Id = JRequest::getInt('filter_tema', 0);
        $n2Id = JRequest::getInt('filter_subtema', 0);
        
        $casoId = JRequest::getInt('id_caso', 0);
        $agente = JRequest::getVar('tx_agente', null);
        $ruc = JRequest::getVar('nu_ruc', null);
        
        $temaId = 0;
        
        if($n1Id > 0){
            $ubigeoId = $n1Id;
            if($n2Id > 0){
                $temaId = $n2Id;
            }
        }
        
        $where = array();
        
        if( $temaId > 0 ){
            $where[] = " C.id_tema LIKE '{$temaId}%' ";
        }
         if($casoId > 0){
            $where[] = " C.id_caso = '{$casoId}' ";
        }
        if($agente){
            $where[] = " C.tx_agente LIKE '%{$agente}%' ";
        }
        if($ruc){
            $where[] = " C.nu_ruc LIKE '%{$ruc}%' ";
        }       
        
        $where = ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
        
        $query = "SELECT C.id_caso, C.id_tema, C.id_dg_tipo_caso, C.fe_caso, C.nu_ruc, C.tx_razon_social, C.tx_agente,C.tx_contacto, C.id_tema,
                   T.id_n1, T.n1_name, T.id_n2 , T.n2_name, SUM(DG_ES.nu_categoria) as total
                  FROM caso C INNER JOIN detalle_caso DC on (C.id_caso=DC.id_caso)
		  INNER JOIN 001_tema T ON (C.id_tema=T.id_tema)
                  INNER JOIN detalle_general DG_ES on (DG_ES.id_detalle_general=DC.id_dg_estado) {$where} GROUP BY C.id_caso LIMIT 0,100";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}

?>