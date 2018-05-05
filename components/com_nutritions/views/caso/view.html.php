<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewCaso extends JView {

    function display($tpl = null) {
        global $mainframe, $option;
        jimport('joomla.html.pane');
        
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
        
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/bootstrap.min_.css');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/funciones.js');        
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bootstrap.min.js');   
        $model = $this->getModel();
        $caso = & $this->get('Data');
        $results = array();
        if( $caso->id_caso ){
            $results = $model->getDetallesCaso($caso->id_caso);
            $caso->numero_detalles = count($results);
        }
        
        if($caso->fe_caso){
            $tempArray = explode('-', $caso->fe_caso);
            $caso->fe_caso = $tempArray[2].'/'.$tempArray[1].'/'.$tempArray[0];
        }
        
        $filter_n1 = $mainframe->getUserStateFromRequest( $option.'.caso.filter_n1','filter_n1', $caso->id_n1, 'int' );
        $filter_n2 = $mainframe->getUserStateFromRequest( $option.'.caso.filter_n2','filter_n2', $caso->id_n2, 'int' );
//       $filter_departamento = $mainframe->getUserStateFromRequest( $option.'.nutrition.filter_departamento','filter_departamento', $familia->id_departamento, 'int' );
        
        $n1s = $this->get('N1s');
        $n2s = $this->get('N2s');
        $tipos = $this->get('Tipos');

        
        
        $n1Array[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($n1s as $n1) {
            $n1Array[] = JHTML::_('select.option', $n1->value, JText::_($n1->text));
        }
        $lists['N1s'] = JHTML::_('select.genericlist', $n1Array, 'filter_n1', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "5");

        $n2Array[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($n2s as $n2) {
            $n2Array[] = JHTML::_('select.option', $n2->value, JText::_($n2->text));
        }
        //$lists['N2s'] = JHTML::_('select.genericlist', $n2Array, 'filter_n2', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_n2");
        $lists['N2s'] = JHTML::_('select.genericlist', $n2Array, 'filter_n2', 'class="inputbox" size="1" onchange="document.getElementById(\'id_tema\').value = this.options[this.selectedIndex].value;"', 'value', 'text', "$filter_n2");
        
        $tipocasoArray[] = JHTML::_('select.option', '258', JText::_('- Seleccione -'));
        foreach ($tipos as $tipo) {
            $tipocasoArray[] = JHTML::_('select.option', $tipo->value, JText::_($tipo->text));
        }
        $lists['tipo_caso'] = JHTML::_('select.genericlist', $tipocasoArray, 'id_dg_tipo_caso', 'class="inputbox" size="1"', 'value', 'text', $caso->id_dg_tipo_caso);
        
        
        $this->assignRef('lists', $lists);
        $this->assignRef('caso', $caso);
        $this->assignRef('results', $results);
        parent::display($tpl);
    }
    
    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        return $years;
    }

}
