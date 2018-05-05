<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

/**
 * Categories View
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class EmpresasViewEmpresas extends JView {

    public $results = null;

    /**
     * Categories view display method
     * @return void
     * */
    
    function display($tpl = null) {
        //for pagination
        global $mainframe, $option;
        $document = JFactory::getDocument();
        $model = $this->getModel();
        
        $emp_id_emp = $mainframe->getUserStateFromRequest( $option.'.empresas.emp_id_emp', 'emp_id_emp', '', 'int' );
        $emp_rznSocialUsuario = $mainframe->getUserStateFromRequest( $option.'.empresas.emp_rznSocialUsuario', 'emp_rznSocialUsuario', '', 'string' );
        $emp_numDocUsuario = $mainframe->getUserStateFromRequest( $option.'.empresas.emp_numDocUsuario', 'emp_numDocUsuario', '', 'string' );
        
        $this->assignRef('lists', $lists);
        $this->assignRef('emp_id_emp', $emp_id_emp);
        $this->assignRef('emp_rznSocialUsuario', $emp_rznSocialUsuario);
        $this->assignRef('emp_numDocUsuario', $emp_numDocUsuario);
        

        parent::display($tpl);
    }

}
