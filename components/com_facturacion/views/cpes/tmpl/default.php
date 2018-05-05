<?php
defined('_JEXEC') or die('Restricted access');
?>

<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">

    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Buscar" onclick="javascript:document.getElementById('task').value = 'searchAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Criterios de Búsqueda</legend>
        <table>
            <tr>
                <td>Tipo de CPE:</td>
                <td>
                    <?php echo $this->lists['cpe_tipCpe']; ?>
                </td>
                <td>Nro. CPE:</td>
                <td>
                    <input class="text_area" type="text" name="cpe_numero" id="cpe_numero" size="32" maxlength="250" value="<?php echo ($this->cpe_numero) ? $this->cpe_numero : ''; ?>" />
                </td>
            </tr>
            <tr>
                <td>Nro Doc:</td>
                <td>
                    <input class="text_area" type="text" name="cpe_numDocUsuario" id="cpe_numDocUsuario" size="32" maxlength="250" value="<?php echo ($this->cpe_numDocUsuario) ? $this->cpe_numDocUsuario : ''; ?>" />
                </td>
                <td>Razón Social:</td>
                <td>
                    <input class="text_area" type="text" name="cpe_rznSocialUsuario" id="cpe_rznSocialUsuario" size="32" maxlength="250" value="<?php echo ($this->cpe_rznSocialUsuario) ? $this->cpe_rznSocialUsuario : ''; ?>" />
                </td>
            </tr>
            <tr>
                <td>Código de Ingeniería:</td>
                <td>
                    <input class="text_area" type="text" name="cpe_codIngenieria" id="cpe_codIngenieria" size="32" maxlength="250" value="<?php echo ($this->cpe_codIngenieria) ? $this->cpe_codIngenieria : ''; ?>" />
                </td>                
                <td>¿Pago Cancelado? (Si / No)&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <?php echo JHTML::_('select.booleanlist', 'cpe_inCancelado', '', $this->cpe_inCancelado, 'Si', 'No'); ?>
                </td>
            </tr>
            <tr>
                <td>Fecha de Emisión:</td>
                <td>
                    <?php echo JHTML::_('calendar', ($this->cpe_fecEmision) ? $this->cpe_fecEmision: '', "cpe_fecEmision", "cpe_fecEmision", "%Y-%M-%d", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                    <!--<input class="text_area" tabindex="1" type="text" name="cpe_fecEmision" placeholder="AAAA-MM-DD" id="cpe_fecEmision" size="12" maxlength="12" value="<?php // echo ($this->cpe_fecEmision) ? $this->cpe_fecEmision: ''; ?>" />-->
                </td>
                <td>Estado (Anulado / Emitido)&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <?php echo JHTML::_('select.booleanlist', 'cpe_inBaja', '', $this->cpe_inBaja, 'Anulado', 'Emitido'); ?>
                </td>
            </tr>

        </table>   
    </fieldset>
    <input type="hidden" name="option" value="com_facturacion" />
    <input type="hidden" name="task" id="task" value="" />
    <input type="hidden" name="controller" value="cpes" />
    <input type="hidden" name="view" value="cpes" />    
</form>

<?php
if (count($this->results) > 0) {
    ?>
    <fieldset>
        <legend>Resultados</legend>
        <table style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th width="20">
                        #
                    </th>
                    <th>
                        Doc. Cliente 
                    </th>
                    <th>
                        Nombre o Razón social 
                    </th>
                    <th>
                        Tipo de CPE 
                    </th>
                    <th>
                        Serie 
                    </th>
                    <th>
                        Número 
                    </th>
                    <th>
                        Tipo Operación
                    </th>
                    <th>
                        Emisión 
                    </th>
                    <th>
                        Cod Ingenieria
                    </th>
                    <th>
                        Días Trans
                    </th>
                    <th>
                        Cancelado
                    </th>
                    <th>
                        Estado
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
            if (count($this->results) > 0) {
                ?>
                <?php
                $k = 0;
                for ($i = 0, $n = count($this->results); $i < $n; $i++) {
                    $row = &$this->results[$i];
                    $showLink = JRoute::_('index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $row->cpe_id_cpe);
                    $deleteLink = JRoute::_("index.php?option=com_facturacion&controller=empresa&task=deleteCpe&empresaId={$row->emp_id_emp}&Itemid=3&id=" . $row->cpe_id_cpe);
                    ?>
                    <tr class="<?php echo "row$k"; ?>">
                        <td style="text-align:center;">
                            <?php echo $i + 1; ?>
                        </td>
                        <td>
                            <?php echo $row->cpe_numDocUsuario; ?>
                        </td>
                        <td>
                            <?php echo $row->cpe_rznSocialUsuario; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php echo $row->cpe_tipCpe; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php echo $row->cpe_serie; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php echo $row->cpe_numero; ?>
                        </td>
                        <td>
                            <?php echo $row->cpe_tipOperacion; ?>
                        </td>
                        <td>
                            <?php echo $row->cpe_fecEmision; ?>
                        </td>
                        <td>
                            <?php echo $row->cpe_codIngenieria; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php
                            $now = date('Y-m-d');
                            $tiempo = $this->diff($row->cpe_fecEmision, $now);
                            echo $tiempo;
                            ?>
                        </td>
                        <td style="text-align:center;">
                            <?php echo $row->cpe_inCancelado; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php echo $row->cpe_inBaja; ?>
                        </td>
                        <td>
                            <a href="<?php echo $showLink; ?>">Ver</a>
                        </td>
                        <td>
                            <a href="<?php echo $deleteLink; ?>">Delete</a>
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
    <?php
}
?>

