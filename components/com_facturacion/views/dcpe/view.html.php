<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class EmpresasViewDcpe extends JView {
//    public $dcpe_mtoIgvItem = null;
//    public $dcpe_mtoValorVentaItem = null;
//    public $dcpe_mtoPrecioVentaItem = null;
    
    function display($tpl = null) {
        global $mainframe, $option;        
        //jimport('joomla.html.pane');              
        $user = JFactory::getUser();
//$groups = $user->groups;
        if($user->id) {
            $model = $this->getModel();
            $document = JFactory::getDocument();
            $document->addStyleSheet(JURI::base().'components/com_facturacion/assets/css/style.css');
            $document->addScript(JURI::base().'components/com_facturacion/assets/js/funciones.js');   
            $document->addScript(JURI::base().'components/com_facturacion/assets/js/jquery.js');
            
            $dcpe =  $this->get('Data');

    //        $productos = $this->get('Productos');
            $codUnidadMedidas = $model->getDetalleCatalogo('3', '1');
            $tipAfeIGVs = $model->getDetalleCatalogo('7', '1');
            $tipSisISCs = $model->getDetalleCatalogo('8', '1');   

            $tipAfeIGVArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipAfeIGVs as $tipAfeIGV) {
                $tipAfeIGVArray[] = JHTML::_('select.option', $tipAfeIGV->value, JText::_($tipAfeIGV->text));
            }
            $lists['dcpe_tipAfeIGV'] = JHTML::_('select.genericlist', $tipAfeIGVArray, 'dcpe_tipAfeIGV', 'class="inputbox" size="1"
                    onChange="Calc_dcpe(document.dcpeForm.dcpe_ctdUnidadItem.value, document.dcpeForm.dcpe_mtoValorUnitario.value, document.dcpeForm.dcpe_tipAfeIGV.value)"', 'value', 'text', $dcpe->dcpe_tipAfeIGV);

            $tipSisISCArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipSisISCs as $tipSisISC) {
                $tipSisISCArray[] = JHTML::_('select.option', $tipSisISC->value, JText::_($tipSisISC->text));
            }
            $lists['dcpe_tipSisISC'] = JHTML::_('select.genericlist', $tipSisISCArray, 'dcpe_tipSisISC', 'class="inputbox" size="1"', 'value', 'text', $dcpe->dcpe_tipSisISC);

//            $codUnidadMedidaArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($codUnidadMedidas as $codUnidadMedida) {
                $codUnidadMedidaArray[] = JHTML::_('select.option', $codUnidadMedida->value, JText::_($codUnidadMedida->text));
            }
            $lists['dcpe_codUnidadMedida'] = JHTML::_('select.genericlist', $codUnidadMedidaArray, 'dcpe_codUnidadMedida', 'class="inputbox" size="1"', 'value', 'text', $dcpe->dcpe_codUnidadMedida);


            $this->assignRef('lists', $lists);
            $this->assignRef('dcpe', $dcpe);


            parent::display($tpl);
        
        }else{
            echo 'Not logged in<Br/>';
        }
    }
    
    
    
    
}
