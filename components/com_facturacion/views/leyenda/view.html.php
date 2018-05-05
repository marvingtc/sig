<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class EmpresasViewLeyenda extends JView {
    
    
    function display($tpl = null) {
        global $mainframe, $option;        
        //jimport('joomla.html.pane');              
        
        $model = $this->getModel();
        $document = JFactory::getDocument();
        $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/jquery.js');
        $document->addStyleSheet(JURI::base().'components/com_facturacion/assets/css/style.css'); 
        $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/funciones.js');
       
        $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/bootstrap.min_.css');
        $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/bootstrap.min.js');
        
        
        $ley =  $this->get('Data');
        
        $leyends = $model->getDetalleCatalogo('15', '1');           

        $leyendArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
        foreach ($leyends as $leyend) {
            $leyendArray[] = JHTML::_('select.option', $leyend->value, JText::_($leyend->text));
        }
        $lists['ley_codLeyenda'] = JHTML::_('select.genericlist', $leyendArray, 'ley_codLeyenda', 'class="inputbox" onChange="obtenerDescLeyC()" size="1" style="width:90%"', 'value', 'text', $ley->ley_codLeyenda);
                
        $this->assignRef('lists', $lists);
        $this->assignRef('ley', $ley);
        
        parent::display($tpl);
    }
    
    

}
