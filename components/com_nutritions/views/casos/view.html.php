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
class NutritionsViewCasos extends JView {

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
        $filter_n1 = $mainframe->getUserStateFromRequest( $option.'.casos.filter_n1','filter_n1', '0', 'int' );
        $filter_n2 = $mainframe->getUserStateFromRequest( $option.'.casos.filter_n2','filter_n2', '0', 'int' );
        
        
        $id_caso = $mainframe->getUserStateFromRequest( $option.'.casos.id_caso', 'id_caso', '', 'int' );
        $tx_agente = $mainframe->getUserStateFromRequest( $option.'.casos.tx_agente', 'tx_agente', '', 'string' );
        $nu_ruc = $mainframe->getUserStateFromRequest( $option.'.casos.nu_ruc', 'nu_ruc', '', 'string' );
        
        $n1s = $model->getN1s();
        $n2s = $model->getN2s();

        $n1Array[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($n1s as $n1) {
            $n1Array[] = JHTML::_('select.option', $n1->value, JText::_($n1->text));
        }
        $lists['N1s'] = JHTML::_('select.genericlist', $n1Array, 'filter_n1', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_n1");

         $n2Array[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($n2s as $n2) {
            $n2Array[] = JHTML::_('select.option', $n2->value, JText::_($n2->text));
        } 
        $lists['N2s'] = JHTML::_('select.genericlist', $n2Array, 'filter_n2', 'class="inputbox" size="1"', 'value', 'text', "$filter_n2");
 
        
        $this->assignRef('lists', $lists);
        $this->assignRef('id_caso', $id_caso);
        $this->assignRef('tx_agente', $tx_agente);
        $this->assignRef('nu_ruc', $nu_ruc);
        

        parent::display($tpl);
    }

}
