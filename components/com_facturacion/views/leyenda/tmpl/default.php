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
<form id="leyendaForm" action="<?php JHTML::_('behavior.modal'); ?>" method="post" name="leyendaForm">
    <fieldset>
        <legend>Leyendas&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_leyenda1();"></a></legend>
        <table>
            <tr>
                <td>Leyenda:</td>
                <td><?php echo $this->ley->ley_codLeyenda; ?> :
                    <?php echo $this->lists['ley_codLeyenda']; ?>
                </td>
            </tr>
            <tr>
                <td colspan="1">Descripción de Leyenda:</td>
                <td colspan="3"> 
                    <textarea rows="2" cols="100%" class="text_area" type="text" name="ley_desLeyendaPers" id="ley_desLeyendaPers" value="<?php echo $this->ley->ley_desLeyendaPers; ?>" /><?php echo $this->ley->ley_desLeyendaPers; ?></textarea> 
                </td>
            </tr>
            <input class="text_area" type="hidden" name="cpe_id_cpe" id="cpe_id_cpe" readonly="true" size="25" value="<?php echo $this->ley->cpe_id_cpe; ?>" />
            <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction';
                    document.getElementById('leyendaForm').submit();"/>
                             
            <tr>
                <td>
                    <?php
                   $link = JRoute::_('index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $this->ley->cpe_id_cpe);
                   ?>
                     <a href="<?php echo $link; ?>">Volver</a>
                </td>               
            </tr>
        </table>
    </fieldset>
    <input type="hidden" name="option" value="com_facturacion" />
    <input type="hidden" name="cid[]" value="<?php echo $this->ley->ley_id_ley; ?>" />
    <input type="hidden" name="ley_id_ley" value="<?php echo $this->ley->ley_id_ley; ?>" />
    <input type="hidden" name="cpeId" value="<?php echo $this->ley->cpe_id_cpe; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="leyenda" />
</form>



