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
class EmpresasViewCpes extends JView {

    public $results = null;

    /**
     * Categories view display method
     * @return void
     * */
    function display($tpl = null) {
        $user = JFactory::getUser();
//$groups = $user->groups;
        if ($user->id) {
        //for pagination
        global $mainframe, $option;
        
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/style.css');
        $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/funciones.js');
        $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/jquery.js');
       
        $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/bootstrap.min_.css');
        $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/bootstrap.min.js');
        $model = $this->getModel();

        $filter_tipCpe = 0;

        $emp_id_emp = $mainframe->getUserStateFromRequest($option . '.cpes.emp_id_emp', 'emp_id_emp', '', 'int');
        $cpe_tipCpe = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_tipCpe', 'cpe_tipCpe', '', 'string');
        $cpe_numero = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_numero', 'cpe_numero', '', 'int');
        $cpe_rznSocialUsuario = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_rznSocialUsuario', 'cpe_rznSocialUsuario', '', 'string');
        $cpe_numDocUsuario = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_numDocUsuario', 'cpe_numDocUsuario', '', 'string');
        $cpe_codIngenieria = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_codIngenieria', 'cpe_codIngenieria', '', 'string');
        $cpe_inCancelado = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_inCancelado', 'cpe_inCancelado', '', 'string');
        $cpe_inBaja = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_inBaja', 'cpe_inBaja', '', 'int');
        $cpe_fecEmision = $mainframe->getUserStateFromRequest($option . '.cpes.cpe_fecEmision', 'cpe_fecEmision', '', 'string');


        $tipCPES = $model->getDetalleCatalogo('1', '1');

//        $tipCPEArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
        foreach ($tipCPES as $tipCPE) {
            $tipCPEArray[] = JHTML::_('select.option', $tipCPE->value, JText::_($tipCPE->text));
        }
        $lists['cpe_tipCpe'] = JHTML::_('select.genericlist', $tipCPEArray, 'cpe_tipCpe', 'class="inputbox" size="1" style="width:180px"', 'value', 'text', $filter_tipCpe);

        $this->assignRef('lists', $lists);
        $this->assignRef('emp_id_emp', $emp_id_emp);
        $this->assignRef('cpe_tipCpe', $cpe_tipCpe);
        $this->assignRef('cpe_numero', $cpe_numero);
        $this->assignRef('cpe_rznSocialUsuario', $cpe_rznSocialUsuario);
        $this->assignRef('cpe_numDocUsuario', $cpe_numDocUsuario);
        $this->assignRef('cpe_codIngenieria', $cpe_codIngenieria);
        $this->assignRef('cpe_inCancelado', $cpe_inCancelado);
        $this->assignRef('cpe_inBaja', $cpe_inBaja);
        $this->assignRef('cpe_fecEmision', $cpe_fecEmision);

        parent::display($tpl);
        
        } else{
        echo 'Not logged in<Br/>';
        }
    }
    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

//        $years = floor($diff / (365*60*60*24));
//        return $years;
        $days = floor($diff / (60*60*24));
        return $days;
    }
}
