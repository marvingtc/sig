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
<form id="relacionadoForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="relacionadoForm">
    <fieldset>
        <legend>Documento Relacionado&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_relacionado1();"></a></legend>
        <table>
            <tr>
                <td style="width: 50%;" valign="top">
                    <table>
                        <tr>
                            <td>Ind Doc. Relacionado:</td>
                            <td>
                                <?php echo $this->lists['rel_indDocRelacionado']; ?>
                            </td>
                            <td>Monto Doc. Relacionado:</td>
                            <td>
                                <input class="text_area" type="text" name="rel_mtoDocRelacionado" id="rel_mtoDocRelacionado" size="25" value="<?php echo $this->rel->rel_mtoDocRelacionado; ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo Doc. Relacionado:</td>
                            <td>
                                <?php echo $this->lists['rel_tipDocRelacionado']; ?>
                            </td>
                            <td>N° Doc. Relacionado:</td>
                            <td>
                                <input class="text_area" type="text" name="rel_numDocRelacionado" id="rel_numDocRelacionado" size="25" value="<?php echo $this->rel->rel_numDocRelacionado; ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo Doc. Emisor:</td>
                            <td>
                                <?php echo $this->lists['rel_tipDocEmisor']; ?>
                            </td>
                            <td>N° Doc. Emisor</td>
                            <td>
                                <input class="text_area" type="text" name="rel_numDocEmisor" id="rel_numDocEmisor" size="25" value="<?php echo $this->rel->rel_numDocEmisor; ?>"/>
                            </td>
                        </tr>
                       
                        <input class="text_area" type="hidden" name="cpe_id_cpe" id="cpe_id_cpe" readonly="true" size="25" value="<?php echo $this->rel->cpe_id_cpe; ?>" />
                        <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction';
                                document.getElementById('relacionadoForm').submit();"/>
                </td>
            </tr>

        </table>

        </td>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <?php
        $link = JRoute::_('index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $this->rel->cpe_id_cpe);
        ?>
        <tr>
            <td>
                <a href="<?php echo $link; ?>">Volver</a>
            </td>
        </tr>


        </table>

    </fieldset>    


    <input type="hidden" name="option" value="com_facturacion" />
    <input type="hidden" name="cid[]" value="<?php echo $this->rel->rel_id_rel; ?>" />
    <input type="hidden" name="rel_id_rel" value="<?php echo $this->rel->rel_id_rel; ?>" />
    <input type="hidden" name="cpeId" value="<?php echo $this->rel->cpe_id_cpe; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="relacionado" />
</form>



