<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class EmpresasViewCpe extends JView {

    public $edad = null;

    function display($tpl = null) {
        global $mainframe, $option;
        //jimport('joomla.html.pane');

        $user = JFactory::getUser();
//$groups = $user->groups;
        if ($user->id) {
            $model = $this->getModel();
            JHTML::_('behavior.mootools');
            $document = JFactory::getDocument();
            $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/style.css');
            $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/funciones.js');
            $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/jquery.js');
//        $document->addScriptDeclaration('jQuery.noConflict();');
//        $document->addScript(JURI::base().'components/com_facturacion/assets/js/bsn.AutoSuggest_2.1.3.js');
//        $document->addStyleSheet(JURI::base().'components/com_facturacion/assets/css/autosuggest_inquisitor.css');        
            $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/bootstrap.min_.css');
            $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/table.css');
            $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/bootstrap.min.js');

            $cpe = & $this->get('Data');

            $itemResults = array();
            $drels = array();
            $leyends = array();

            if ($cpe->cpe_id_cpe) {
                $itemResults = $model->getDcpes($cpe->cpe_id_cpe);
                $drels = $model->getRel($cpe->cpe_id_cpe);
                $leyends = $model->getLey($cpe->cpe_id_cpe);
            }

            if ($cpe->cpe_fecEmision) {
                $now = date('Y-m-d');
                $this->diff($cpe->cpe_fecEmision, $now);
                $temporalArray = explode('-', $cpe->cpe_fecEmision);
                $cpe->cpe_fecEmision = $temporalArray[2] . '/' . $temporalArray[1] . '/' . $temporalArray[0];
            }
            if ($cpe->cpe_fecVencimiento) {
                $now = date('Y-m-d');
                $this->diff($cpe->cpe_fecVencimiento, $now);
                $temporalArray = explode('-', $cpe->cpe_fecVencimiento);
                $cpe->cpe_fecVencimiento = $temporalArray[2] . '/' . $temporalArray[1] . '/' . $temporalArray[0];
            }
            if ($cpe->cpe_fecPago) {
                $now = date('Y-m-d');
                $this->diff($cpe->cpe_fecPago, $now);
                $temporalArray = explode('-', $cpe->cpe_fecPago);
                $cpe->cpe_fecPago = $temporalArray[2] . '/' . $temporalArray[1] . '/' . $temporalArray[0];
            }
            if ($cpe->cpe_fecOtorgado) {
                $now = date('Y-m-d');
                $this->diff($cpe->cpe_fecOtorgado, $now);
                $temporalArray = explode('-', $cpe->cpe_fecOtorgado);
                $cpe->cpe_fecOtorgado = $temporalArray[2] . '/' . $temporalArray[1] . '/' . $temporalArray[0];
            }

            $tipCPES = $model->getDetalleCatalogo('1', '1');
            $tipCPESAfectado = $model->getDocumentoAfectado('101', '1');
            $tipOperaciones = $model->getDetalleCatalogo('17', '1');
            $tipDocumentos = $model->getDetalleCatalogo('6', '1');
            $tipMonedas = $model->getDetalleCatalogo('2', '1');
            $codMotivos = $model->getDetalleMotivos('7');
            $medPagos = $model->getDetalleMedPago('14');


            $tipCPEArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipCPES as $tipCPE) {
                $tipCPEArray[] = JHTML::_('select.option', $tipCPE->value, JText::_($tipCPE->text));
            }
            $lists['cpe_tipCpe'] = JHTML::_('select.genericlist', $tipCPEArray, 'cpe_tipCpe', 'class="inputbox" onChange="addSerie()" size="1" style="width:180px"', 'value', 'text', $cpe->cpe_tipCpe);
            
            $tipCPEAfectadoArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipCPESAfectado as $tipCPEAfectado) {
                $tipCPEAfectadoArray[] = JHTML::_('select.option', $tipCPEAfectado->value, JText::_($tipCPEAfectado->text));
            }
            $lists['cpe_tipDocAfectado'] = JHTML::_('select.genericlist', $tipCPEAfectadoArray, 'cpe_tipDocAfectado', 'class="inputbox" size="1" style="width:180px"', 'value', 'text', $cpe->cpe_tipDocAfectado);

//            $tipOperacionArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipOperaciones as $tipOperacion) {
                $tipOperacionArray[] = JHTML::_('select.option', $tipOperacion->value, JText::_($tipOperacion->text));
            }
            $lists['cpe_tipOperacion'] = JHTML::_('select.genericlist', $tipOperacionArray, 'cpe_tipOperacion', 'class="inputbox" size="1"  style="width:180px"', 'value', 'text', $cpe->cpe_tipOperacion);

//            $tipDocumentoArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipDocumentos as $tipDocumento) {
                $tipDocumentoArray[] = JHTML::_('select.option', $tipDocumento->value, JText::_($tipDocumento->text));
            }
            $lists['cpe_tipDocUsuario'] = JHTML::_('select.genericlist', $tipDocumentoArray, 'cpe_tipDocUsuario', 'class="inputbox" size="1" style="width:180px"', 'value', 'text', $cpe->cpe_tipDocUsuario);

//            $tipMonedaArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipMonedas as $tipMoneda) {
                $tipMonedaArray[] = JHTML::_('select.option', $tipMoneda->value, JText::_($tipMoneda->text));
            }
            $lists['cpe_tipMoneda'] = JHTML::_('select.genericlist', $tipMonedaArray, 'cpe_tipMoneda', 'class="inputbox" size="1" style="width:107px"', 'value', 'text', $cpe->cpe_tipMoneda);


            $codMotivoArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($codMotivos as $codMotivo) {
                $codMotivoArray[] = JHTML::_('select.option', $codMotivo->value, JText::_($codMotivo->text));
            }
            $lists['cpe_codMotivo'] = JHTML::_('select.genericlist', $codMotivoArray, 'cpe_codMotivo', 'class="inputbox" size="1" style="width:180px"', 'value', 'text', $cpe->cpe_codMotivo);
            
//         $medPagoArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($medPagos as $medPago) {
                $medPagoArray[] = JHTML::_('select.option', $medPago->value, JText::_($medPago->text));
            }
            $lists['cpe_medPago'] = JHTML::_('select.genericlist', $medPagoArray, 'cpe_medPago', 'class="inputbox" size="1" style="width:180px"', 'value', 'text', $cpe->cpe_medPago);

//        foreach ($productos as $producto) {
//            $productosArray[] = JHTML::_('select.option', $producto->value, JText::_($producto->text));
//        }
//        $lists['productos'] = JHTML::_('select.genericlist', $productosArray, 'dfac_codProducto', 'class="inputbox" size="1"', 'value', 'text', $cpe->dfac_codProducto);
//        
            $this->assignRef('lists', $lists);
            $this->assignRef('cpe', $cpe);
            $this->assignRef('itemResults', $itemResults);
            $this->assignRef('drels', $drels);
            $this->assignRef('leyends', $leyends);

            parent::display($tpl);
        
        } else{
        echo 'Not logged in<Br/>';
        }
}
    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $this->edad = $years;
    }

    function getYearDiff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365 * 60 * 60 * 24));
        return $years;
    }

//            $this->_data->cpe_mtoOperGravadas = null;
//            $this->_data->cpe_mtoOperInafectas = null;
//            $this->_data->cpe_mtoOperExoneradas = null;

    function Calc_mtoOperGravadas($dcpe_valor, $dcpe_ctdUnidadItem, $dcpe_mtoValorUnitario) {
        $this->dcpe_mtoIgvItem = number_format($dcpe_valor * $dcpe_ctdUnidadItem * $dcpe_mtoValorUnitario, 2);
    }

}
