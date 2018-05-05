<?php
defined('_JEXEC') or die('Restricted access');
$ordering = 1;
?>

<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">

    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction'; document.getElementById('adminForm').submit();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Buscar" onclick="javascript:document.getElementById('task').value = 'searchAction'; document.getElementById('adminForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('adminForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Datos de la Empresa</legend>
        <table>
            <tr>              
                <td>RUC:</td>
                <td>
                    <input class="text_area" type="text" name="emp_numDocUsuario" id="emp_numDocUsuario" size="32" maxlength="250" value="<?php echo ($this->emp_numDocUsuario) ? $this->emp_numDocUsuario : ''; ?>" />
                </td>
                <td>Razón Social:</td>
                <td>
                    <input class="text_area" type="text" name="emp_rznSocialUsuario" id="emp_rznSocialUsuario" size="32" maxlength="250" value="<?php echo ($this->emp_rznSocialUsuario) ? $this->emp_rznSocialUsuario : ''; ?>" />
                </td>
            </tr>
        </table>
    </fieldset>

    <input type="hidden" name="option" value="com_facturacion" />
    <input type="hidden" name="task" id="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="empresas" />
    <input type="hidden" name="view" value="empresas" />
</form>

<?php
if(count($this->results) > 0 ){
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
                    Codigo
                </th>
                <th>
                    Razón social
                </th>
                <th>
                    Ver
                </th>
            </tr>		
        </thead>
        <?php
        $k = 0;
        for ($i = 0, $n = count($this->results); $i < $n; $i++) {
            $row = &$this->results[$i];
            $link = JRoute::_('index.php?option=com_facturacion&controller=empresa&view=empresa&task=edit&Itemid=3&cid[]=' . $row->emp_id_emp);
            ?>
            <tr class="<?php echo "row$k"; ?>">
                <td style="text-align:center;">
                    <?php echo $i+1; ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $row->emp_id_emp; ?>
                </td>
                <td>
                    <?php echo $row->emp_rznSocialUsuario; ?>
                </td>
                <td>
                    <a href="<?php echo $link; ?>">Ver</a>
                </td>
            </tr>
            <?php
            $k = 1 - $k;
        }
        ?>
    </table>
</fieldset>
<?php
}
?>

