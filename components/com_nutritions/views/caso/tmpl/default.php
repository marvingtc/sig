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
                    <input type="button" value="Grabar" onclick="document.getElementById('task').value = 'saveAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>


    <fieldset>
        <legend>Información general del caso</legend>
        <table  width="100%">
            <tr>              
                <td>Tema:</td>
                <td>
                    <?php echo $this->lists['N1s']; ?>
                </td>
                <td>Subtema:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <?php echo $this->lists['N2s']; ?>
                </td>
                <td>Tipo:</td>
                <td><?php echo $this->lists['tipo_caso']; ?></td>
            </tr>
            <tr>
                <td colspan="6">
                    <input class="text_area" type="text" name="id_tema" id="id_tema" readonly="true" rows='5' cols='30'  size="20" maxlength="250" value="<?php echo $this->caso->id_tema; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Específico:</td>
                <td colspan="5">
                    <input class="text_area" type="text" name="tx_especifico" id="tx_especifico"  size="100%" maxlength="128" value="<?php echo $this->caso->tx_especifico; ?>" />
                </td>
            </tr>
             <tr>
                <td>Fecha:</td>
                <td>
                    <?php echo JHTML::_('calendar', $this->caso->fe_caso, "fe_caso", "fe_caso", '%d/%m/%Y', array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                </td>
                <td>Agente:</td>
                <td>
                    <input class="text_area" type="text" name="tx_agente" id="tx_agente" size="18" maxlength="18" value="<?php echo $this->caso->tx_agente; ?>" onkeypress="javascript:return soloLetras(event)"/>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    &nbsp;
                </td>
            </tr>            
            <tr>              
                <td>RUC o DNI:</td>
                <td>
                    <input class="text_area" type="text" name="nu_ruc" id="nu_ruc" size="11" maxlength="18" value="<?php echo $this->caso->nu_ruc; ?>" onkeypress="javascript:return soloNumeros(event)"/>
                </td>
                <td>Razón Social o Nombre:</td>
                <td colspan="3">
                    <input class="text_area" type="text" name="tx_razon_social" id="tx_razon_social" size="80%" maxlength="128" value="<?php echo $this->caso->tx_razon_social; ?>" />
                </td>                
            </tr>
            <tr>              
                <td>Telefono:</td>
                <td>
                    <input class="text_area" type="text" name="tx_telefono" id="tx_telefono" size="18" maxlength="24" value="<?php echo $this->caso->tx_telefono; ?>" />
                </td>
                 <td>Contacto:</td>
                <td colspan="3">
                    <input class="text_area" type="text" name="tx_contacto" id="tx_contacto" size="64" maxlength="64" value="<?php echo $this->caso->tx_contacto; ?>" onkeypress="javascript:return soloLetras(event)"/>
                </td>
            </tr>
        </table>
    </fieldset>
    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->caso->id_caso; ?>" />
    <input type="hidden" name="id_caso" value="<?php echo $this->caso->id_caso; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="caso" />
</form>

<table  width="100%">

    <tr>
        <?php
        if ($this->caso->id_caso > 0) {
            ?>
            <td width="49%">
                <fieldset>
                    <legend>Detalle&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_detalle_caso();"></a></legend>
                    <form id="detallecasoForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="detallecasoForm">
                        <div style="text-align: left;">

                        </div>
                        <input type="hidden" name="option" value="com_nutritions" />
                        <input type="hidden" name="task" id="detallecasoTask" value="" />
                        <input type="hidden" name="controller" value="caso" />
                        <input type="hidden" name="casoId" value="<?php echo $this->caso->id_caso; ?>" />
                    </form>
                    <table  border="1" width="100%" class="tableg">
                        <thead>
                            <tr>
                                <th width="10%">Estado                     
                                </th>
                                <th width="10%">Respuesta
                                </th>    
                                <th width="10%">SAU                    
                                </th>
                                <th width="10%">Fecha                    
                                </th>
                                <th colspan="2" width="10%" style="text-align:center;">Acciones                    
                                </th>
                            </tr>		
                        </thead>
                        <?php
                        if (count($this->results) > 0) {
                            ?>
                            <?php
                            $k = 0;
                            for ($i = 0, $n = count($this->results); $i < $n; $i++) {
                                $row = &$this->results[$i];
                                $showLink = JRoute::_('index.php?option=com_nutritions&controller=discapacidad&view=discapacidad&task=edit&Itemid=3&cid[]=' . $row->id_detalle_caso);
                                $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=person&task=deletediscapacidad&personId={$this->caso->id_caso}&Itemid=3&id=" . $row->id_detalle_caso);
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row->estado_detalle; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tx_respuesta; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tx_sau; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->fe_evento; ?>
                                    </td>
                                    <td style="text-align:center;">
                                        <a class="glyphicon glyphicon-pencil" href="<?php echo $showLink; ?>" />
                                    </td>
                                    <td style="text-align:center;">

                                        <a class="glyphicon glyphicon-minus"  href="#" onclick="verifyDelete_discapacidad(<?php echo $row->id_detalle_caso ?>,<?php echo $this->caso->id_caso ?>);
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


