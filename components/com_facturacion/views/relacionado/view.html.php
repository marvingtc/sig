<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class EmpresasViewRelacionado extends JView {
    
    
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
        
        
        
        $rel =  $this->get('Data');
        
        $indDocRes = $model->getDetalleCatalogo('0', '1');
        $tipDocRes = $model->getDetalleCatalogo('12', '1');
        $tipDocumentos = $model->getDetalleCatalogo('6','1');
            

        $indDocReArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
        foreach ($indDocRes as $indDocRe) {
            $indDocReArray[] = JHTML::_('select.option', $indDocRe->value, JText::_($indDocRe->text));
        }
        $lists['rel_indDocRelacionado'] = JHTML::_('select.genericlist', $indDocReArray, 'rel_indDocRelacionado', 'class="inputbox" size="1" style="width:180px"', 'value', 'text', $rel->rel_indDocRelacionado);
        
        $tipDocReArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
        foreach ($tipDocRes as $tipDocRe) {
            $tipDocReArray[] = JHTML::_('select.option', $tipDocRe->value, JText::_($tipDocRe->text));
        }
        $lists['rel_tipDocRelacionado'] = JHTML::_('select.genericlist', $tipDocReArray, 'rel_tipDocRelacionado', 'class="inputbox" size="1"  style="width:180px"', 'value', 'text', $rel->rel_tipDocRelacionado);

        $tipDocumentoArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
        foreach ($tipDocumentos as $tipDocumento) {
            $tipDocumentoArray[] = JHTML::_('select.option', $tipDocumento->value, JText::_($tipDocumento->text));
        }
        $lists['rel_tipDocEmisor'] = JHTML::_('select.genericlist', $tipDocumentoArray, 'rel_tipDocEmisor', 'class="inputbox" size="1" style="width:180px"', 'value', 'text', $rel->rel_tipDocEmisor);
        
                
        $this->assignRef('lists', $lists);
        $this->assignRef('rel', $rel);
        
        
        parent::display($tpl);
    }
    
    

}
