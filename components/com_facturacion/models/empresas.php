<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

class EmpresasModelEmpresas extends JModel {

    var $_data;

    public function getSearchResults() {
        $empresaId = JRequest::getInt('$emp_id_emp', 0);
        $emp_numDocUsuario = JRequest::getVar('emp_numDocUsuario', null);
        $emp_rznSocialUsuario = JRequest::getVar('emp_rznSocialUsuario', null);

        $where = array();

        if ($emp_numDocUsuario) {
            $where[] = " EMP.emp_rznSocialUsuario LIKE '%{$emp_numDocUsuario}%' ";
        }
        if ($emp_rznSocialUsuario) {
            $where[] = " EMP.emp_rznSocialUsuario LIKE '%{$emp_rznSocialUsuario}%' ";
        }
        if ($empresaId > 0) {
            $where[] = " EMP.emp_id_emp = '{$empresaId}' ";
        }

        $where = ( count($where) ? ' WHERE ' . implode(' AND ', $where) : '' );

        $query = "SELECT EMP.emp_id_emp, EMP.emp_tipDocUsuario, EMP.emp_numDocUsuario, EMP.emp_rznSocialUsuario
                  FROM tfact_emp EMP {$where} LIMIT 0,100";

        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}

?>