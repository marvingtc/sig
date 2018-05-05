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
<form id="dcpeForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="dcpeForm">
    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Grabar" onclick="validateDcpe();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction';
                            document.getElementById('dcpeForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript: history.go(-1);"/>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Agregar Items</legend>
        <table>
            <tr>
                <td>
                    <input class="text_area" type="hidden" name="cpe_id_cpe" id="cpe_id_cpe" readonly="true" size="25" value="<?php echo $this->dcpe->cpe_id_cpe; ?>" />
                </td>
            </tr>
            <tr>
                <?php
                $showLink = JRoute::_('index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $this->dcpe->cpe_id_cpe);
                ?>
                <td><a href="<?php echo $showLink; ?>">Ir a CPE</a></td>
                <td>
                    <?php echo $this->dcpe->cpe_serie; ?> - 
                    <?php echo $this->dcpe->cpe_numero; ?>
                </td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td colspan='3'>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_desItem" id="dcpe_desItem" size="100" value="<?php echo $this->dcpe->dcpe_desItem; ?>" />
                </td>
            </tr>
            <tr>
                <td>Unidad de Medida:</td>
                <td>
                    <?php echo $this->lists['dcpe_codUnidadMedida']; ?>
                </td>
                <td>Cantidad:</td>
                <td>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_ctdUnidadItem" onChange="Calc_dcpe(document.dcpeForm.dcpe_ctdUnidadItem.value, document.dcpeForm.dcpe_mtoValorUnitario.value, document.dcpeForm.dcpe_tipAfeIGV.value)" id="dcpe_ctdUnidadItem" size="25" value="<?php echo $this->dcpe->dcpe_ctdUnidadItem; ?>"/>
                </td>
            </tr>            
            <tr>
                <td>Monto Valor Unitario:</td>
                <td>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_mtoValorUnitario" onChange="Calc_dcpe(document.dcpeForm.dcpe_ctdUnidadItem.value, document.dcpeForm.dcpe_mtoValorUnitario.value, document.dcpeForm.dcpe_tipAfeIGV.value)" id="dcpe_mtoValorUnitario" size="25" value="<?php echo $this->dcpe->dcpe_mtoValorUnitario; ?>"  onkeypress="javascript:return soloNumeros(event)"/>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Tipo de ISC:</td>
                <td colspan='3'>
                    <?php echo $this->lists['dcpe_tipSisISC']; ?>
                </td>
            </tr>
            <tr>
                <td>Monto ISC Item:</td>
                <td>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_mtoIscItem" id="dcpe_mtoIscItem" size="25" value="<?php echo $this->dcpe->dcpe_mtoIscItem; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                </td>
                <td>Monto Dscto Item:</td>
                <td>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_mtoDsctoItem" id="dcpe_mtoDsctoItem" size="25" value="<?php echo $this->dcpe->dcpe_mtoDsctoItem; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Tipo de Afectación:</td>
                <td colspan='1'>
                    <?php echo $this->lists['dcpe_tipAfeIGV']; ?>
                </td>
                <td>Monto Igv Item:</td>
                <td>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_mtoIgvItem" id="dcpe_mtoIgvItem" readonly="true" size="25" value="<?php echo $this->dcpe->dcpe_mtoIgvItem; ?>" />
                </td>
            </tr>
            <tr>                
                <td>Monto de Precio de Venta Unitario por Item:</td>
                <td>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_mtoPrecioVentaItem" id="dcpe_mtoPrecioVentaItem" readonly="true" size="25" value="<?php echo $this->dcpe->dcpe_mtoPrecioVentaItem; ?>" />
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>                
                <td>Monto de Valor de Venta por Item:</td>
                <td>
                    <input class="text_area" tabindex="1" type="text" name="dcpe_mtoValorVentaItem" id="dcpe_mtoValorVentaItem" readonly="true" size="25" value="<?php echo $this->dcpe->dcpe_mtoValorVentaItem; ?>" />
                </td>
                <td colspan="2"></td>
            </tr>            
        </table>

    </fieldset>
    <input type="hidden" name="option" value="com_facturacion" />
    <input type="hidden" name="cid[]" value="<?php echo $this->dcpe->cpe_id_cpe; ?>" />
    <input type="hidden" name="dcpe_id_detalle_cpe" value="<?php echo $this->dcpe->dcpe_id_detalle_cpe; ?>" />
    <input type="hidden" name="cpe_id_cpe" value="<?php echo $this->dcpe->cpe_id_cpe; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="dcpe" />
</form>



