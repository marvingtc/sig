<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class EmpresasViewEmpresa extends JView {

    function display($tpl = null) {
        global $mainframe, $option;
        jimport('joomla.html.pane');

        $user = JFactory::getUser();
//$groups = $user->groups;
        if ($user->id) {
            $document = JFactory::getDocument();
            $document->addScript(JURI::base() . 'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
            $document->addStyleSheet(JURI::base() . 'components/com_nutritions/assets/css/style.css');
            $document->addStyleSheet(JURI::base() . 'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
            $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/funciones.js');

            $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/bootstrap.min_.css');
            $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/table.css');
            $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/bootstrap.min.js');

            $model = $this->getModel();

            $empresa = & $this->get('Data');


            $results = array();
            if ($empresa->emp_id_emp) {
                $results = $model->getCpes($empresa->emp_id_emp);
                $empresa->numero_cpes = count($results);
            }

            $rangos = array();
            if ($empresa->emp_id_emp) {
                $inicio = 0;
                $cantidadRegistros = $model->totalRegistros($empresa->emp_id_emp);
                //$empresa->numero_paginas = $cantidadRegistros / 10;
                $rangos = $model->getCpesRangos($empresa->emp_id_emp, $inicio);
            }

            $events = & $this->get('Data');
            $pagination = & $this->get('Pagination');
            // push data into the template
            $this->assignRef('pagination', $pagination);
            $this->assignRef('events', $events);

            $tipDocumentosFijo = $model->getDetalleCatalogoFijo('6', '6');

//        $tipDocumentoArray[] = JHTML::_('select.option', '1', JText::_('- Seleccione -'));
            foreach ($tipDocumentosFijo as $tipDocumento) {
                $tipDocumentoArray[] = JHTML::_('select.option', $tipDocumento->value, JText::_($tipDocumento->text));
            }
            $lists['emp_tipDocUsuario'] = JHTML::_('select.genericlist', $tipDocumentoArray, 'emp_tipDocUsuario', 'class="inputbox" size="1"', 'value', 'text', $empresa->emp_tipDocUsuario);

            $rutasDest = $model->getDetalleRuta('102', '1');

            foreach ($rutasDest as $rutaDest) {
                $rutaDestArray[] = JHTML::_('select.option', $rutaDest->value, JText::_($rutaDest->text));
            }
            $lists['emp_rutaDest'] = JHTML::_('select.genericlist', $rutaDestArray, 'emp_rutaDest', 'class="inputbox" size="1"', 'value', 'text', $empresa->emp_rutaDest);


            $this->assignRef('lists', $lists);
            $this->assignRef('empresa', $empresa);
            $this->assignRef('results', $results);
            parent::display($tpl);
        } else {
            echo 'Not logged in<Br/>';
        }
    }

    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

//        $years = floor($diff / (365*60*60*24));
//        return $years;
        $days = floor($diff / (60 * 60 * 24));
        return $days;
    }

}
