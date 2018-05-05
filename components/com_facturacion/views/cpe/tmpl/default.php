<?php defined('_JEXEC') or die('Restricted access'); ?>

<style type="text/css">
    .input-wrapper {
        padding: .2em;
        border: 1px #333 solid;
    }
    .input-wrapper input, .input-wrapper textarea {
        width: 100%;
        margin: 0;
        padding: 0;
        font: inherit;
        color: inherit;
        border: 0;
        background-color: transparent;
    }
</style>
<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">
    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Grabar" onclick="grabarCPE();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript: history.go(-1);"/>
                </td>
                <?php
                if ($this->cpe->cpe_tipCpe === '01' || $this->cpe->cpe_tipCpe === '03') {
                    ?>
                    <td style="width: 25%;">
                        <input type="button" value="Generar Json" onclick="javascript:document.getElementById('task').value = 'generarJSON';
                                document.getElementById('adminForm').submit();"/>
                    </td>
                    <?php
                } else {
                    ?><td style="width: 25%;">
                        <input type="button" value="Generar Json Nota" onclick="javascript:document.getElementById('task').value = 'generarJSONNot';
                                document.getElementById('adminForm').submit();"/>
                    </td>
                    <?php
                }
                ?>
                <?php
                if ($this->cpe->cpe_inBaja === '1') {
                    ?>
                    <td style="width: 25%;">
                        <input type="button" value="Generar Json Baja" onclick="javascript:document.getElementById('task').value = 'generarJSONBaja';
                                document.getElementById('adminForm').submit();"/>
                    </td>
                <?php } ?>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Datos Generales</legend>
        <table widh="100%" class="bordered">
            <tr>
                <td colspan="2"style="width: 20%;"><b>RUC: &nbsp;&nbsp;&nbsp;</b><?php echo $this->cpe->emp_numDocUsuario; ?> - <?php echo $this->cpe->emp_rznSocialUsuario; ?></td>
                <td>Cód Local Emisor:</td>
                <td >
                    <input class="text_area" type="text" name="cpe_codLocalEmisor" id="cpe_codLocalEmisor" size="2" maxlength="4" value="<?php echo $this->cpe->cpe_codLocalEmisor; ?>" onkeypress="javascript:return soloNumeros(event)" />
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <input class="text_area" type="hidden" name="emp_id_emp" id="emp_id_emp" readonly="true" size="25" value="<?php echo $this->cpe->emp_id_emp; ?>" />
                    <?php
                    $showLink = JRoute::_('index.php?option=com_facturacion&controller=empresa&view=empresa&task=edit&Itemid=3&cid[]=' . $this->cpe->emp_id_emp);
                    ?>
                    <a href="<?php echo $showLink; ?>"><b>Regresar a Lista de Comprobantes</b></a>               
                </td>
            </tr>           

        </table>
        <table  widh="100%">
            <tr>
                <td>
                    <?php
                    if ($this->cpe->cpe_tipCpe > 6) {
                        ?>
                        <fieldset>
                            <legend>Doc que modifica la Nota</legend>
                            <table class="bordered">
                                <tr>
                                    <td>Motivo</td>
                                    <td>
                                        <?php echo $this->lists['cpe_codMotivo']; ?>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>Descripción del motivo:</td>
                                    <td>
                                        <textarea rows="2" cols="50%" class="text_area" type="text" name="cpe_desMotivo" id="cpe_desMotivo" value="<?php echo $this->cpe->cpe_desMotivo; ?>" /><?php echo $this->cpe->cpe_desMotivo; ?></textarea> 
                                    </td>

                                </tr>  
                                <tr>               
                                    <td><b>Tipo de CPE Afectado:</b></td>
                                    <td>
                                        <?php echo $this->lists['cpe_tipDocAfectado']; ?>
                                    </td>
                                    <td></td>
                                    <td>Doc. (Serie-número)</td>
                                    <td>
                                        <input class="text_area" type="text" placeholder="SERIE(4)-NUMERO(8)" name="cpe_numDocAfectado" id="cpe_numDocAfectado" size="20" value="<?php echo $this->cpe->cpe_numDocAfectado; ?>" />
                                    </td>

                                </tr>
                            </table>
                        </fieldset>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <table widh="100%" class="bordered">
            <tr>
                <td style="width: 20%;"><b>Tipo de CPE:</b></td>
                <td style="width: 30%;">
                    <?php echo $this->lists['cpe_tipCpe']; ?>
                </td>
                <td style="width: 25%;"><b>Serie - Número:</b></td>
                <td style="width: 25%;">
                    <input class="text_area" tabindex="1" type="text" name="cpe_serie" id="cpe_serie" style=" border:0px " readonly="true" size="2" maxlength="4" value="<?php echo $this->cpe->cpe_serie; ?>" />
                    -
                    <input class="text_area" type="text" name="cpe_numero" id="cpe_numero" style=" border:0px " readonly="true" size="8" maxlength="8" value="<?php echo $this->cpe->cpe_numero; ?>" />
                    <input class="text_area" tabindex="1" type="hidden" name="cpe_inEstado" id="cpe_inEstado" readonly="true" size="2" maxlength="4" value="<?php echo $this->cpe->cpe_inEstado; ?>" />
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">Tipo de Operación:</td>
                <td style="width: 30%;">
                    <?php echo $this->lists['cpe_tipOperacion']; ?>
                </td>
                <td>Fecha de Emisión:</td>
                <td>
                    <!--<input class="text_area" tabindex="1" type="text" name="cpe_fecEmision" placeholder="DD/MM/AAAA" id="cpe_fecEmision" size="12" maxlength="12" value="<?php // echo $this->cpe->cpe_fecEmision;      ?>" />-->
                    <?php echo JHTML::_('calendar', $this->cpe->cpe_fecEmision, "cpe_fecEmision", "cpe_fecEmision", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                </td>
            </tr>
            <tr>
                <td>Tipo de Documento:</td>
                <td>
                    <?php echo $this->lists['cpe_tipDocUsuario']; ?>
                </td>
                <td>Número de Doc.:</td>
                <td>
                    <input class="text_area" type="text" name="cpe_numDocUsuario" id="cpe_numDocUsuario" size="15" value="<?php echo $this->cpe->cpe_numDocUsuario; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Código de Ingeniería:</td>
                <td>
                    <input class="text_area" type="text" name="cpe_codIngenieria" id="cpe_codIngenieria" size="25" value="<?php echo $this->cpe->cpe_codIngenieria; ?>"/>
                </td>

            </tr>
            <tr>
                <td colspan="1">Razón Social Cliente:</td>
                <td colspan="3"> 
                    <textarea rows="2" cols="75%" class="text_area" type="text" name="cpe_rznSocialUsuario" id="cpe_rznSocialUsuario" value="<?php echo $this->cpe->cpe_rznSocialUsuario; ?>" /><?php echo $this->cpe->cpe_rznSocialUsuario; ?></textarea> 
                </td>
            </tr>
        </table>

        <fieldset>
            <legend>Datos del pago</legend>
            <table widh="100%" class="bordered">
                <tr>
                    <td style="width: 25%;">Tipo de Moneda:</td>
                    <td style="width: 25%;">
                        <?php echo $this->lists['cpe_tipMoneda']; ?>
                    </td>
                    <td>Fecha Vencimiento:</td>
                    <td>
                        <?php echo JHTML::_('calendar', $this->cpe->cpe_fecVencimiento, "cpe_fecVencimiento", "cpe_fecVencimiento", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 25%;">¿Pago Cancelado? (Si / No)&nbsp;&nbsp;&nbsp;</td>
                    <td style="width: 25%;">
                        <?php echo JHTML::_('select.booleanlist', 'cpe_inCancelado', '', $this->cpe->cpe_inCancelado, 'Si', 'No'); ?>
                    </td>
                    <td style="width: 20%;">Medio de Pago:</td>
                    <td style="width: 30%;">
                        <?php echo $this->lists['cpe_medPago']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de Pago:</td>
                    <td>
                        <?php echo JHTML::_('calendar', $this->cpe->cpe_fecPago, "cpe_fecPago", "cpe_fecPago", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                    </td>
                    <td>Fecha Otorgamiento:</td>
                    <td>
                        <?php echo JHTML::_('calendar', $this->cpe->cpe_fecOtorgado, "cpe_fecOtorgado", "cpe_fecOtorgado", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">Observaciones:</td>
                    <td colspan="3"> 
                        <textarea rows="2" cols="75%" class="text_area" type="text" name="cpe_txtObservacion" id="cpe_txtObservacion" value="<?php echo $this->cpe->cpe_txtObservacion; ?>" /><?php echo $this->cpe->cpe_txtObservacion; ?></textarea> 
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Desea dar de BAJA al Comprobante ? <?php echo JHTML::_('select.booleanlist', 'cpe_inBaja', '', $this->cpe->cpe_inBaja, 'Si', 'No'); ?></legend>
            <table>
                <tr>
                    <td style="width: 10%;">Motivo : </td>
                    <td style="width: 90%;">
                        <input class="text_area" type="text" name="cpe_desBaja" id="cpe_desBaja" size="100" maxlength="100" value="<?php echo $this->cpe->cpe_desBaja; ?>"/>
                    </td>                
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Adicionales de cabecera</legend>
            <table widh="100%" class="bordered">
                <tr>                    
                    <td>
                        <input class="text_area" type="hidden" name="cpe_codRegPercepcion" id="cpe_codRegPercepcion" size="13" value="<?php echo $this->cpe->cpe_codRegPercepcion; ?>"/>
                    </td>                    
                    <td>
                        <input class="text_area" type="hidden" name="cpe_mtoBaseImponiblePercepcion" id="cpe_mtoBaseImponiblePercepcion" size="13" value="<?php echo $this->cpe->cpe_mtoBaseImponiblePercepcion; ?>"/>
                    </td>                    
                    <td>
                        <input class="text_area" type="hidden" name="cpe_mtoPercepcion" id="cpe_mtoPercepcion" size="13" value="<?php echo $this->cpe->cpe_mtoPercepcion; ?>"/>
                    </td>                    
                    <td>
                        <input class="text_area" type="hidden" name="cpe_mtoTotalIncPercepcion" id="cpe_mtoTotalIncPercepcion" size="13" value="<?php echo $this->cpe->cpe_mtoTotalIncPercepcion; ?>"/>
                    </td>
                </tr> 
                <tr>
                    <td>Monto Operaciones Gratuitas:</td>
                    <td>
                        <input class="text_area" type="text" name="cpe_mtoOperGratuitas" id="cpe_mtoOperGratuitas" size="13" value="<?php echo $this->cpe->cpe_mtoOperGratuitas; ?>"/>
                    </td>
                    <td>Monto Total Anticipo:</td>
                    <td>
                        <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoTotalAnticipo" id="cpe_mtoTotalAnticipo" size="13" value="<?php echo $this->cpe->cpe_mtoTotalAnticipo; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>cod Pais Cliente:</td>
                    <td>
                        <input class="text_area" type="text" name="cpe_codPaisCliente" id="cpe_codPaisCliente" size="13" value="<?php echo $this->cpe->cpe_codPaisCliente; ?>"/>
                    </td>
                    <td>cod Ubigeo Cliente:</td>
                    <td>
                        <input class="text_area" type="text" name="cpe_codUbigeoCliente" id="cpe_codUbigeoCliente" size="13" value="<?php echo $this->cpe->cpe_codUbigeoCliente; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">Dirección Cliente:</td>
                    <td colspan="3"> 
                        <textarea rows="2" cols="80%" class="text_area" type="text" name="cpe_desDireccionCliente" id="cpe_desDireccionCliente" value="<?php echo $this->cpe->cpe_desDireccionCliente; ?>" /><?php echo $this->cpe->cpe_desDireccionCliente; ?></textarea> 
                    </td>
                </tr>
                <tr>
                    <td>cod Pais Entrega:</td>
                    <td>
                        <input class="text_area" type="text" name="cpe_codPaisEntrega" id="cpe_codPaisEntrega" size="13" value="<?php echo $this->cpe->cpe_codPaisEntrega; ?>"/>
                    </td>
                    <td>cod Ubigeo Entrega:</td>
                    <td>
                        <input class="text_area" type="text" name="cpe_codUbigeoEntrega" id="cpe_codUbigeoEntrega" size="13" value="<?php echo $this->cpe->cpe_codUbigeoEntrega; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">Dirección Entrega:</td>
                    <td colspan="3"> 
                        <textarea rows="2" cols="80%" class="text_area" type="text" name="cpe_desDireccionEntrega" id="cpe_desDireccionEntrega" value="<?php echo $this->cpe->cpe_desDireccionEntrega; ?>" /><?php echo $this->cpe->cpe_desDireccionEntrega; ?></textarea> 
                    </td>
                </tr>
            </table>
        </fieldset>
    </fieldset>
    <table>
        <tr>
            <td colspan="2">
                <fieldset>
                    <legend>Montos globales</legend>
                    <table width="100%" class="bordered">
                        <tr>
                            <td>Suma Dscto Global:</td>
                            <td>
                                <input class="text_area" type="text" name="cpe_sumDsctoGlobal" id="cpe_sumDsctoGlobal" size="25" value="<?php echo $this->cpe->cpe_sumDsctoGlobal; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                            </td>                             
                            <td>Monto Oper. Gravadas:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoOperGravadas" id="cpe_mtoOperGravadas" size="25" value="<?php echo $this->cpe->cpe_mtoOperGravadas; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Suma Otros Cargos:</td>
                            <td>
                                <input class="text_area" type="text" name="cpe_sumOtrosCargos" id="cpe_sumOtrosCargos" size="25" value="<?php echo $this->cpe->cpe_sumOtrosCargos; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                            </td>                            
                            <td>Monto Oper. Inafectas:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoOperInafectas" id="cpe_mtoOperInafectas" size="25" value="<?php echo $this->cpe->cpe_mtoOperInafectas; ?>"/>
                            </td>                   
                        </tr>
                        <tr>
                            <td>Monto Descuentos:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoDescuentos" id="cpe_mtoDescuentos" size="25" value="<?php echo $this->cpe->cpe_mtoDescuentos; ?>"/>
                            </td>
                            <td>Monto Oper. Exoneradas:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoOperExoneradas" id="cpe_mtoOperExoneradas" size="25" value="<?php echo $this->cpe->cpe_mtoOperExoneradas; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Monto ISC:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoISC" id="cpe_mtoISC" size="25" value="<?php echo $this->cpe->cpe_mtoISC; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                            </td>                            
                            <td>Monto IGV:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoIGV" id="cpe_mtoIGV" size="25" value="<?php echo $this->cpe->cpe_mtoIGV; ?>" />
                            </td>                            
                        </tr>
                        <tr>
                            <td>Monto Otros Tributos:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoOtrosTributos" id="cpe_mtoOtrosTributos" size="25" value="<?php echo $this->cpe->cpe_mtoOtrosTributos; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                            </td>
                            <td>Importe Total Venta:</td>
                            <td>
                                <input readonly style="background-color: #31b0d5" class="text_area" type="text" name="cpe_mtoImpVenta" id="cpe_mtoImpVenta" size="25" value="<?php echo $this->cpe->cpe_mtoImpVenta; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
    </table>

    <input type="hidden" name="option" value="com_facturacion" />
    <input type="hidden" name="cid[]" value="<?php echo $this->cpe->cpe_id_cpe; ?>" />
    <input type="hidden" name="cpe_mtoLetras" value="<?php echo $this->cpe->cpe_mtoLetras; ?>" />
    <input type="hidden" name="cpe_id_cpe" value="<?php echo $this->cpe->cpe_id_cpe; ?>" />
    <input type="hidden" name="rel_id_rel" value="<?php echo $this->cpe->rel_id_rel; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="cpe" />
</form>
<table  width="100%" class="bordered">
    <tr>
        <?php
        if ($this->cpe->cpe_id_cpe > 0) {
            ?>
            <td width="100%">
                <fieldset>
                    <legend>Items de comprobatente&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_item();"></a></legend>
                    <form id="itemForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="itemForm">
                        <input type="hidden" name="option" value="com_facturacion" />
                        <input type="hidden" name="task" id="dcpeTask" value="" />
                        <input type="hidden" name="controller" value="cpe" />
                        <input type="hidden" name="cpeId" value="<?php echo $this->cpe->cpe_id_cpe; ?>" />
                    </form>
                    <?php
                    if (count($this->itemResults) > 0) {
                        ?>
                        <table width="100%" border="1">
                            <thead>
                                <tr>
                                    <th width="20">
                                        #
                                    </th>
                                    <th>UnidadMedida                     
                                    </th>
                                    <th>Cantidad
                                    </th>    
                                    <th>Descripción                   
                                    </th>
                                    <th>Valor Unitario                   
                                    </th>
                                    <th>Dscto
                                    </th>    
                                    <th>Monto Igv                   
                                    </th>
                                    <th>Afectación IGV                    
                                    </th>
                                    <th>Precio Venta                   
                                    </th>
                                    <th>Valor Venta                   
                                    </th>
                                    <th>
                                        Ver
                                    </th>
                                    <th>
                                        Borrar
                                    </th>
                                </tr>		
                            </thead>
                            <?php
                            $k = 0;
                            for ($i = 0, $n = count($this->itemResults); $i < $n; $i++) {
                                $row = &$this->itemResults[$i];
                                $showLink = JRoute::_('index.php?option=com_facturacion&controller=dcpe&view=dcpe&task=edit&Itemid=3&cid[]=' . $row->dcpe_id_detalle_cpe);
                                $deleteLink = JRoute::_("index.php?option=com_facturacion&controller=cpe&task=deletedcpe&cpeId={$this->cpe->cpe_id_cpe}&Itemid=3&id=" . $row->dcpe_id_detalle_cpe);
                                ?>
                                <tr class="<?php echo "row$k"; ?>">
                                    <td style="text-align:center;">
                                        <?php echo $i + 1; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_codUnidadMedida_desc; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_ctdUnidadItem; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_desItem; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_mtoValorUnitario; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_mtoDsctoItem; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_mtoIgvItem; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_tipAfeIGV_desc; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_mtoPrecioVentaItem; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->dcpe_mtoValorVentaItem; ?>
                                    </td>
                                    <td>
                                        <a class="glyphicon glyphicon-pencil" href="<?php echo $showLink; ?>" />
                                    </td>
                                    <td>

                                        <a class="glyphicon glyphicon-minus"  href="#" onclick="verifyDelete_dcpe(<?php echo $row->dcpe_id_detalle_cpe ?>,<?php echo $this->cpe->cpe_id_cpe ?>);
                                                return false;" />
                                    </td>


                                </tr>
                                <?php
                                $k = 1 - $k;
                            }
                            ?>
                            <?php
                        }
                        ?>
                    </table>

                </fieldset>
            </td>
        <?php } ?>
</table>
<table  width="100%"  class="bordered">
    <tr>
        <?php
        if ($this->cpe->cpe_id_cpe > 0) {
            ?>
            <td width="50%">
                <fieldset>
                    <legend>Documento Relacionado&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_relacionado();"></a></legend>
                    <form id="relacionadoForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="relacionadoForm">
                        <input type="hidden" name="option" value="com_facturacion" />
                        <input type="hidden" name="task" id="relTask" value="" />
                        <input type="hidden" name="controller" value="cpe" />
                        <input type="hidden" name="cpeId" value="<?php echo $this->cpe->cpe_id_cpe; ?>" />
                    </form>
                    <?php
                    if (count($this->drels) > 0) {
                        ?>
                        <table width="100%" border="1">
                            <thead>
                                <tr>
                                    <th width="20">
                                    </th>
                                    <th>Ind. Doc. Relacionado                    
                                    </th>
                                    <th>Tipo Doc. Relacionado
                                    </th>    
                                    <th>N° Doc. Relacionado                   
                                    </th>
                                    <th>Tipo Doc. Emisor                   
                                    </th>
                                    <th>N° Doc Emisor
                                    </th>    
                                    <th>Monto Doc Relacionado                  
                                    </th>
                                    <th>
                                        Ver
                                    </th>
                                    <th>
                                        Borrar
                                    </th>
                                </tr>		
                            </thead>
                            <?php
                            $k = 0;
                            for ($i = 0, $n = count($this->drels); $i < $n; $i++) {
                                $row = &$this->drels[$i];
                                $showLink = JRoute::_('index.php?option=com_facturacion&controller=relacionado&view=relacionado&task=edit&Itemid=3&cid[]=' . $row->rel_id_rel);
                                $deleteLink = JRoute::_("index.php?option=com_facturacion&controller=relacionado&task=deleterel&cpeId={$this->cpe->cpe_id_cpe}&Itemid=3&id=" . $row->rel_id_rel);
                                ?>
                                <tr class="<?php echo "row$k"; ?>">
                                    <td style="text-align:center;">
                                        <?php echo $i + 1; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->rel_indDocRelacionado_desc; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->rel_tipDocRelacionado_desc; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->rel_numDocRelacionado; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->rel_tipDocEmisor_desc; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->rel_numDocEmisor; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->rel_mtoDocRelacionado; ?>
                                    </td>
                                    <td>
                                        <a class="glyphicon glyphicon-pencil" href="<?php echo $showLink; ?>" />
                                    </td>
                                    <td>

                                        <a class="glyphicon glyphicon-minus"  href="#" onclick="verifyDelete_rel(<?php echo $row->rel_id_rel ?>,<?php echo $this->cpe->cpe_id_cpe ?>);
                                                return false;" />
                                    </td>


                                </tr>
                                <?php
                                $k = 1 - $k;
                            }
                            ?>
                            <?php
                        }
                        ?>
                    </table>

                </fieldset>
            </td>
        <?php } ?>
</table>
<table  width="100%"  class="bordered">
    <tr>
        <?php
        if ($this->cpe->cpe_id_cpe > 0) {
            ?>
            <td width="50%">
                <fieldset>
                    <legend>Leyendas&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_leyenda();"></a></legend>
                    <form id="leyendaForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="leyendaForm">
                        <input type="hidden" name="option" value="com_facturacion" />
                        <input type="hidden" name="task" id="leyTask" value="" />
                        <input type="hidden" name="controller" value="cpe" />
                        <input type="hidden" name="cpe_mtoImpVenta" value="<?php echo $this->cpe->cpe_mtoImpVenta; ?>" />
                        <input type="hidden" name="cpeId" value="<?php echo $this->cpe->cpe_id_cpe; ?>" />
                    </form>
                    <?php
                    if (count($this->leyends) > 0) {
                        ?>
                        <table width="100%" border="1">
                            <thead>
                                <tr>
                                    <th width="20">
                                    </th>
                                    <th>Código                    
                                    </th>
                                    <th>Descripción
                                    </th>
                                    <th>Descripción Detallada
                                    </th>
                                    <th>
                                        Ver
                                    </th>
                                    <th>
                                        Borrar
                                    </th>
                                </tr>		
                            </thead>
                            <?php
                            $k = 0;
                            for ($i = 0, $n = count($this->leyends); $i < $n; $i++) {
                                $row = &$this->leyends[$i];
                                $showLink = JRoute::_('index.php?option=com_facturacion&controller=leyenda&view=leyenda&task=edit&Itemid=3&cid[]=' . $row->ley_id_ley);
                                $deleteLink = JRoute::_("index.php?option=com_facturacion&controller=cpe&task=deleteLey&cpeId={$this->cpe->cpe_id_cpe}&Itemid=3&id=" . $row->ley_id_ley);
                                ?>
                                <tr class="<?php echo "row$k"; ?>">
                                    <td style="text-align:center;">
                                        <?php echo $i + 1; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->ley_codLeyenda; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->ley_desLeyenda; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->ley_desLeyendaPers; ?>
                                    </td>
                                    <td>
                                        <a class="glyphicon glyphicon-pencil" href="<?php echo $showLink; ?>" />
                                    </td>
                                    <td>
                                        <a class="glyphicon glyphicon-minus"  href="#" onclick="verifyDelete_ley(<?php echo $row->ley_id_ley ?>,<?php echo $this->cpe->cpe_id_cpe ?>);
                                                return false;" />
                                    </td>
                                </tr>
                                <?php
                                $k = 1 - $k;
                            }
                            ?>
                            <?php
                        }
                        ?>
                    </table>
                </fieldset>
            </td>
        <?php } ?>
</table>



