<?php

defined('_JEXEC') or die();

class EmpresasControllerCpe extends EmpresasController {

    function __construct() {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask('add', 'edit');
    }

    function edit() {
        JRequest::setVar('view', 'cpe');
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }

    function saveAction() {
        $data = JRequest::get('post');
        $cpe_id_cpe = $data['cpe_id_cpe'];
        $model = $this->getModel('cpe');
        $cpeData = $model->getData();
        $resultStore = $model->store($data); 
        $nombre = $cpeData->emp_numDocUsuario . '-' . $cpeData->cpe_tipCpe . '-' . $cpeData->cpe_serie . '-' . $cpeData->cpe_numero;
        $model->calcDescuento($resultStore);
        $model->calcTotalAnticipos($resultStore);
        $model->mtoImpVenta($resultStore);
        $objeto = $model->obtener_mtoImpVenta($resultStore);
        //print_r($objeto[0]->cpe_mtoImpVenta);
        $model->num2letras($objeto[0]->cpe_mtoImpVenta, $cpe_id_cpe, $cpeData->moneda);
        if ($resultStore) {
            if($cpeData->emp_numDocUsuario){
                $msg = JText::_('Cpe '.$nombre.' grabado.');
            }else{
                $msg = JText::_('Cpe grabado.');
            }
        } else {
            $msg = JText::_('Error al grabar cpe.');
            $msg .= " " . $model->getError();
        }
        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $resultStore;
        $this->setRedirect($link, $msg);
    }

    function generarJSON() {
        $data = JRequest::get('post');
        $id = $data['cpe_id_cpe'];
        $model = $this->getModel('cpe');
        $model->setId($id);
        $cpeData = $model->getData();
        $nombre = $cpeData->emp_numDocUsuario . '-' . $cpeData->cpe_tipCpe . '-' . $cpeData->cpe_serie . '-' . $cpeData->cpe_numero;
        $dcpeData = $model->getDcpes($id);
        $leyData = $model->getLey($id);
        $relData = $model->getRel($id);
        $detalle = array();
        $detalleRel= array();

//        print_r(sizeof($leyData));
//        
//        die();
        $cpeAdditionalHeader = array(
            "codRegPercepcion" => $cpeData->cpe_codRegPercepcion,
            "mtoBaseImponiblePercepcion" => $cpeData->cpe_mtoBaseImponiblePercepcion,
            "mtoPercepcion" => $cpeData->cpe_mtoPercepcion,
            "mtoTotalIncPercepcion" => $cpeData->cpe_mtoTotalIncPercepcion,
            "mtoOperGratuitas" => $cpeData->cpe_mtoOperGratuitas,
            "mtoTotalAnticipo" => $cpeData->cpe_mtoTotalAnticipo,
            "codPaisCliente" => $cpeData->cpe_codPaisCliente,
            "codUbigeoCliente" => $cpeData->cpe_codUbigeoCliente,
            "desDireccionCliente" => $cpeData->cpe_desDireccionCliente,
            "codPaisEntrega" => $cpeData->cpe_codPaisEntrega,
            "codUbigeoEntrega" => $cpeData->cpe_codUbigeoEntrega,
            "desDireccionEntrega" => $cpeData->cpe_desDireccionEntrega,
            "fecVencimiento" => $cpeData->cpe_fecVencimiento,
        );

        $cabeceraTemplate = array(
            "tipOperacion" => $cpeData->cpe_tipOperacion,
            "fecEmision" => $cpeData->cpe_fecEmision,
            "codLocalEmisor" => $cpeData->cpe_codLocalEmisor,
            "tipDocUsuario" => $cpeData->cpe_tipDocUsuario,
            "numDocUsuario" => $cpeData->cpe_numDocUsuario,
            "rznSocialUsuario" => $cpeData->cpe_rznSocialUsuario,
            "tipMoneda" => $cpeData->cpe_tipMoneda,
            "sumDsctoGlobal" => $cpeData->cpe_sumDsctoGlobal,
            "sumOtrosCargos" => $cpeData->cpe_sumOtrosCargos,
            "mtoDescuentos" => $cpeData->cpe_mtoDescuentos,
            "mtoOperGravadas" => $cpeData->cpe_mtoOperGravadas,
            "mtoOperInafectas" => $cpeData->cpe_mtoOperInafectas,
            "mtoOperExoneradas" => $cpeData->cpe_mtoOperExoneradas,
            "mtoIGV" => $cpeData->cpe_mtoIGV,
            "mtoISC" => $cpeData->cpe_mtoISC,
            "mtoOtrosTributos" => $cpeData->cpe_mtoOtrosTributos,
            "mtoImpVenta" => $cpeData->cpe_mtoImpVenta,
            "adicionalCabecera" => $cpeAdditionalHeader
        );

        foreach ($dcpeData as $detailItem) {
            $itemArray = array(
                "codUnidadMedida" => $detailItem->dcpe_codUnidadMedida,
                "ctdUnidadItem" => $detailItem->dcpe_ctdUnidadItem,
                "codProducto" => $detailItem->dcpe_codProducto,
                "codProductoSUNAT" => $detailItem->dcpe_codProductoSUNAT,
                "desItem" => $detailItem->dcpe_desItem,
                "mtoValorUnitario" => $detailItem->dcpe_mtoValorUnitario,
                "mtoDsctoItem" => $detailItem->dcpe_mtoDsctoItem,
                "mtoIgvItem" => $detailItem->dcpe_mtoIgvItem,
                "tipAfeIGV" => $detailItem->dcpe_tipAfeIGV,
                "mtoIscItem" => $detailItem->dcpe_mtoIscItem,
                "tipSisISC" => $detailItem->dcpe_tipSisISC,
                "mtoPrecioVentaItem" => $detailItem->dcpe_mtoPrecioVentaItem,
                "mtoValorVentaItem" => $detailItem->dcpe_mtoValorVentaItem,
            );
            $detalle[] = $itemArray;
        }

        foreach ($leyData as $detailLeyend) {
            $leyArray = array(
                "codLeyenda" => $detailLeyend->ley_codLeyenda,
                "desLeyenda" => $detailLeyend->ley_desLeyendaPers,
            );
            $detalleLey[] = $leyArray;
        }

        foreach ($relData as $detailRel) {
            $relArray = array(
                "indDocRelacionado" => $detailRel->rel_indDocRelacionado,
                "tipDocRelacionado" => $detailRel->rel_tipDocRelacionado,
                "numDocRelacionado" => $detailRel->rel_numDocRelacionado,
                "tipDocEmisor" => $detailRel->rel_tipDocEmisor,
                "numDocEmisor" => $detailRel->rel_numDocEmisor,
                "mtoDocRelacionado" => $detailRel->rel_mtoDocRelacionado,
            );
            $detalleRel[] = $relArray;
        }

        if (sizeof($detalleLey) == 0 AND sizeof($detalleRel) == 0) {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
            );
        } elseif (sizeof($detalleLey) == 0 AND sizeof($detalleRel) > 0) {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
                "relacion" => $detalleRel,
            );
        } elseif (sizeof($detalleRel) == 0 AND sizeof($detalleLey) > 0) {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
                "leyendas" => $detalleLey,
            );
        } else {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
                "leyendas" => $detalleLey,
                "relacion" => $detalleRel,
            );
        }
        $rutaEmpresa = '';
        $fileName = $cpeData->emp_numDocUsuario . '-' . $cpeData->cpe_tipCpe . '-' . $cpeData->cpe_serie . '-' . $cpeData->cpe_numero . '.JSON';
        $carpetas = explode('\\', $cpeData->emp_rutaDest);
        foreach ($carpetas as $carpeta) {
            $rutaEmpresa .= $carpeta."\\";
        }
        $ruta = "\\\\" . $cpeData->emp_ipRepositorio . "\\".$rutaEmpresa;
        //print_r($ruta);
        //exit();
        //$f = file_put_contents($ruta . $fileName, json_encode($cpeTemplate, 5));
        $f = file_put_contents($ruta . $fileName, str_replace(array("&gt;", "&lt;", "&quot;", "&amp;", "\/"), array(">", "<", "\"", "&", "/"), json_encode($cpeTemplate, 5)));
        
        //print_r($ruta);
        //exit();
        $resultStore = $model->store($data);
        if ($f) {
            $msg = JText::_('JSON '.$nombre.' generado en: ' .$rutaEmpresa);
        } else {
            $msg = JText::_('Error al generar JSON.');
            $msg .= " " . $model->getError();
        }

        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $resultStore;
        $this->setRedirect($link, $msg);
    }

    function generarJSONNot() {
        $data = JRequest::get('post');
        $id = $data['cpe_id_cpe'];
        $model = $this->getModel('cpe');
        $model->setId($id);
        $cpeData = $model->getNota();
        $nombre = $cpeData->emp_numDocUsuario . '-' . $cpeData->cpe_tipCpe . '-' . $cpeData->cpe_serie . '-' . $cpeData->cpe_numero;
        $dcpeData = $model->getDcpes($id);
        $leyData = $model->getLey($id);
        $relData = $model->getRel($id);
        $detalle = array();
        $detalleRel= array();

//        print_r($leyData);
//        die();
        $cpeAdditionalHeader = array(
            "codRegPercepcion" => $cpeData->cpe_codRegPercepcion,
            "mtoBaseImponiblePercepcion" => $cpeData->cpe_mtoBaseImponiblePercepcion,
            "mtoPercepcion" => $cpeData->cpe_mtoPercepcion,
            "mtoTotalIncPercepcion" => $cpeData->cpe_mtoTotalIncPercepcion,
            "mtoOperGratuitas" => $cpeData->cpe_mtoOperGratuitas,
            "mtoTotalAnticipo" => $cpeData->cpe_mtoTotalAnticipo,
            "codPaisCliente" => $cpeData->cpe_codPaisCliente,
            "codUbigeoCliente" => $cpeData->cpe_codUbigeoCliente,
            "desDireccionCliente" => $cpeData->cpe_desDireccionCliente,
            "codPaisEntrega" => $cpeData->cpe_codPaisEntrega,
            "codUbigeoEntrega" => $cpeData->cpe_codUbigeoEntrega,
            "desDireccionEntrega" => $cpeData->cpe_desDireccionEntrega,
            "fecVencimiento" => $cpeData->cpe_fecVencimiento,
        );

        $cabeceraTemplate = array(
            "fecEmision" => $cpeData->cpe_fecEmision,
            "codMotivo" => $cpeData->cpe_codMotivo,
            "desMotivo" => $cpeData->cpe_desMotivo,
            "tipDocAfectado" => $cpeData->cpe_tipDocAfectado,
            "numDocAfectado" => $cpeData->cpe_numDocAfectado,
            "tipDocUsuario" => $cpeData->cpe_tipDocUsuario,
            "numDocUsuario" => $cpeData->cpe_numDocUsuario,
            "rznSocialUsuario" => $cpeData->cpe_rznSocialUsuario,
            "tipMoneda" => $cpeData->cpe_tipMoneda,
//            "sumDsctoGlobal" => $cpeData->cpe_sumDsctoGlobal,
            "sumOtrosCargos" => $cpeData->cpe_sumOtrosCargos,
//            "mtoDescuentos" => $cpeData->cpe_mtoDescuentos,
            "mtoOperGravadas" => $cpeData->cpe_mtoOperGravadas,
            "mtoOperInafectas" => $cpeData->cpe_mtoOperInafectas,
            "mtoOperExoneradas" => $cpeData->cpe_mtoOperExoneradas,
            "mtoIGV" => $cpeData->cpe_mtoIGV,
            "mtoISC" => $cpeData->cpe_mtoISC,
            "mtoOtrosTributos" => $cpeData->cpe_mtoOtrosTributos,
            "mtoImpVenta" => $cpeData->cpe_mtoImpVenta,
            "adicionalCabecera" => $cpeAdditionalHeader
        );

        foreach ($dcpeData as $detailItem) {
            $itemArray = array(
                "codUnidadMedida" => $detailItem->dcpe_codUnidadMedida,
                "ctdUnidadItem" => $detailItem->dcpe_ctdUnidadItem,
                "codProducto" => $detailItem->dcpe_codProducto,
                "codProductoSUNAT" => $detailItem->dcpe_codProductoSUNAT,
                "desItem" => $detailItem->dcpe_desItem,
                "mtoValorUnitario" => $detailItem->dcpe_mtoValorUnitario,
                "mtoDsctoItem" => $detailItem->dcpe_mtoDsctoItem,
                "mtoIgvItem" => $detailItem->dcpe_mtoIgvItem,
                "tipAfeIGV" => $detailItem->dcpe_tipAfeIGV,
                "mtoIscItem" => $detailItem->dcpe_mtoIscItem,
                "tipSisISC" => $detailItem->dcpe_tipSisISC,
                "mtoPrecioVentaItem" => $detailItem->dcpe_mtoPrecioVentaItem,
                "mtoValorVentaItem" => $detailItem->dcpe_mtoValorVentaItem,
            );
            $detalle[] = $itemArray;
        }

        foreach ($leyData as $detailLeyend) {
            $leyArray = array(
                "codLeyenda" => $detailLeyend->ley_codLeyenda,
                "desLeyenda" => $detailLeyend->ley_desLeyendaPers,
            );
            $detalleLey[] = $leyArray;
        }

        foreach ($relData as $detailRel) {
            $relArray = array(
                "indDocRelacionado" => $detailRel->rel_indDocRelacionado,
                "tipDocRelacionado" => $detailRel->rel_tipDocRelacionado,
                "numDocRelacionado" => $detailRel->rel_numDocRelacionado,
                "tipDocEmisor" => $detailRel->rel_tipDocEmisor,
                "numDocEmisor" => $detailRel->rel_numDocEmisor,
                "mtoDocRelacionado" => $detailRel->rel_mtoDocRelacionado,
            );
            $detalleRel[] = $relArray;
        }

        if (sizeof($detalleLey) == 0 AND sizeof($detalleRel) == 0) {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
            );
        } elseif (sizeof($detalleLey) == 0 AND sizeof($detalleRel) > 0) {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
                "relacion" => $detalleRel,
            );
        } elseif (sizeof($detalleRel) == 0 AND sizeof($detalleLey) > 0) {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
                "leyendas" => $detalleLey,
            );
        } else {
            $cpeTemplate = array(
                "cabecera" => $cabeceraTemplate,
                "detalle" => $detalle,
                "leyendas" => $detalleLey,
                "relacion" => $detalleRel,
            );
        }
        $rutaEmpresa = '';
        $fileName = $cpeData->emp_numDocUsuario . '-' . $cpeData->cpe_tipCpe . '-' . $cpeData->cpe_serie . '-' . $cpeData->cpe_numero . '.JSON';
        $carpetas = explode('\\', $cpeData->emp_rutaDest);
        foreach ($carpetas as $carpeta) {
            $rutaEmpresa .= $carpeta."\\";
        }
        $ruta = "\\\\" . $cpeData->emp_ipRepositorio . "\\".$rutaEmpresa;
        print_r($ruta);
        exit();
        //$f = file_put_contents($ruta . $fileName, json_encode($cpeTemplate, 5));
        $f = file_put_contents($ruta . $fileName, str_replace(array("&gt;", "&lt;", "&quot;", "&amp;"), array(">", "<", "\"", "&"), json_encode($cpeTemplate, 5)));

        $resultStore = $model->store($data);
        if ($f) {
            $msg = JText::_('JSON '.$nombre.' generado en: ' .$rutaEmpresa);
        } else {
            $msg = JText::_('Error al generar JSON.');
            $msg .= " " . $model->getError();
        }

        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $resultStore;
        $this->setRedirect($link, $msg);
    }

    public function generarJSONBaja() {
        $data = JRequest::get('post');
        $id = $data['cpe_id_cpe'];
        $model = $this->getModel('cpe');
        $model->setId($id);
        $bajaCpe = $model->getData();

        $bajalineaTemplate [] = array(
            "fecGeneracion" => $bajaCpe->cpe_fecEmision,
            "fecComunicacion" => $bajaCpe->cpe_fecModificacion,
            "tipDocBaja" => $bajaCpe->cpe_tipCpe,
            "numDocBaja" => $bajaCpe->cpe_serie . '-' . $bajaCpe->cpe_numero,
            "desMotivoBaja" => $bajaCpe->cpe_desBaja
        );

        $bajaTemplate = array(
            "resumenBajas" => $bajalineaTemplate,
        );
        if ($bajaCpe->cpe_fecModificacion) {
            $now = date('Y-m-d');
            $this->diff($bajaCpe->cpe_fecModificacion, $now);
            $temporalArray = explode('-', $bajaCpe->cpe_fecModificacion);
            $bajaCpe->cpe_fecModificacion = $temporalArray[0] . $temporalArray[1] . $temporalArray[2];
        }

        $fileName = $bajaCpe->emp_numDocUsuario . '-RA-' . $bajaCpe->cpe_fecModificacion . '-' . substr($bajaCpe->cpe_numero, -5) . '.JSON';
        $ruta = "\\\\" . $bajaCpe->emp_ipRepositorio . "\\data0\\facturador\\DATA\\";
        $f = file_put_contents($ruta . $fileName, json_encode($bajaTemplate, 5));
        //file_put_contents($ruta . $fileName, str_replace(array("&gt;", "&lt;", "&quot;", "&amp;"), array(">", "<", "\"", "&"), json_encode($bajaTemplate, 5)));

        $resultStore = $model->store($data);
        if ($f) {
            $msg = JText::_('Json de Baja Generado! ' . $fileName);
        } else {
            $msg = JText::_('Error al generar JSON.');
            $msg .= " " . $model->getError();
        }

        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $resultStore;
        $this->setRedirect($link, $msg);


        $this->setRedirect($link, $msg);
    }

    function cancelAction() {
        $msg = JText::_('Operacion cancelada');
        $this->setRedirect('index.php?option=com_facturacion&view=empresas&Itemid=3', $msg);
    }

    public function addDcpe() {
        $cpeId = JRequest::getVar('cpeId', NULL);
        $link = "index.php?option=com_facturacion&controller=dcpe&view=dcpe&task=edit&cpeId={$cpeId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }

    public function deletedDcpe() {
        $cpeId = JRequest::getInt('cpeId', NULL);
        $dcpeId = JRequest::getInt('id', NULL);
        $model = $this->getModel('dcpe');
        $model->removeDcpe($dcpeId);
        $msg = 'Item Removido!!!';
        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $cpeId;
        $this->setRedirect($link, $msg);
    }

    public function addRel() {
        $cpeId = JRequest::getVar('cpeId', NULL);
        $link = "index.php?option=com_facturacion&controller=relacionado&view=relacionado&task=edit&cpeId={$cpeId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }

    public function deleteRel() {
        $cpeId = JRequest::getInt('cpeId', NULL);
        $leyId = JRequest::getInt('id', NULL);
        $model = $this->getModel('relacionado');
        $model->removeRel($leyId);
        $msg = 'Item Removido!!!';
        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $cpeId;
        $this->setRedirect($link, $msg);
    }

    public function addLey() {
        $cpeId = JRequest::getVar('cpeId', NULL);
        $cpe_mtoImpVenta = JRequest::getVar('cpe_mtoImpVenta', NULL);
        $link = "index.php?option=com_facturacion&controller=leyenda&view=leyenda&task=edit&cpeId={$cpeId}&cpe_mtoImpVenta={$cpe_mtoImpVenta}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }

    public function deleteLey() {
        $cpeId = JRequest::getInt('cpeId', NULL);
        $leyId = JRequest::getInt('id', NULL);
        $model = $this->getModel('leyenda');
        $model->removeLey($leyId);
        $msg = 'Item Removido!!!';
        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $cpeId;
        $this->setRedirect($link, $msg);
    }

    public function generarNumeroConsecutivo() {
        $emp_id_emp = JRequest::getInt('emp_id_emp');
        $cpe_tipCpe = JRequest::getString('cpe_tipCpe');
        $cpe_serie = JRequest::getString('cpe_serie');
        $model = $this->getModel('cpe');
        $model->generarNumero($emp_id_emp, $cpe_tipCpe, $cpe_serie);
    }

    public function generarNumeroConsecutivoNot() {
        $emp_id_emp = JRequest::getInt('emp_id_emp');
        $cpe_tipCpe = JRequest::getString('cpe_tipCpe');
        $cpe_serie = JRequest::getString('cpe_serie');
        $cpe_tipDocAfectado = JRequest::getString('cpe_tipDocAfectado');
        $model = $this->getModel('cpe');
        $model->generarNumeroNot($emp_id_emp, $cpe_tipCpe, $cpe_serie, $cpe_tipDocAfectado);
    }

    public function indicadorduplicado() {
        $emp_id_emp = JRequest::getInt('emp_id_emp');
        $cpe_tipCpe = JRequest::getString('cpe_tipCpe');
        $cpe_serie = JRequest::getString('cpe_serie');
        $cpe_numero = JRequest::getString('cpe_numero');
        $cpe_id_cpe = JRequest::getString('cpe_id_cpe');
        $model = $this->getModel('cpe');
        $model->indicadorduplicado($emp_id_emp, $cpe_tipCpe, $cpe_serie, $cpe_numero, $cpe_id_cpe);
    }

    public function calcIGVTotal() {
        $cpe_id_cpe = JRequest::getString('cpe_id_cpe');
        $model = $this->getModel('cpe');
        $model->calcIGVTotal($cpe_id_cpe);
    }

    public function updateMontosTotales() {
        $cpeId = JRequest::getInt('cpeId', NULL);
        $model = $this->getModel('cpe');
        $model->mtoOperGravadas($cpeId, 1);
        $model->mtoOperInafectas($cpeId, 3);
        $model->mtoOperExoneradas($cpeId, 2);
        $model->calcIGVTotal($cpeId);
        $model->calcISCTotal($cpeId);
        $model->calcDescuento($cpeId);
        $model->calcTotalAnticipos($cpeId);
        $model->mtoImpVenta($cpeId);
        $msg = 'Montos Totales Actualizados!!!';
        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $cpeId;
        $this->setRedirect($link, $msg);
    }

    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));
        $years = floor($diff / (365 * 60 * 60 * 24));
        $this->edad = $years;
    }

}

?>
