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
        <legend>Datos de la Familia</legend>
        <table>
            <tr>              
                <td>Tema:</td>
                <td>
                    <?php echo $this->lists['N1s'];?>
                </td>
                <td>Codigo:</td>
                <td>
                    <input class="text_area" type="text" name="id_caso" id="codigo" size="32" maxlength="250" value="<?php echo ($this->id_caso) ? $this->id_caso : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Subtema:</td>
                <td>
                    <?php echo $this->lists['N2s'];?>
                </td>
                <td>Agente:</td>
                <td>
                    <input class="text_area" type="text" name="tx_agente" id="agente" size="32" maxlength="250" value="<?php echo ($this->tx_agente) ? $this->tx_agente : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td>RUC:</td>
                <td>
                    <input class="text_area" type="text" name="nu_ruc" id="ruc" size="32" maxlength="250" value="<?php echo ($this->nu_ruc) ? $this->nu_ruc : ''; ?>" />
                </td>
                <td></td>
                <td>
                </td>
            </tr>
        </table>
    </fieldset>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="task" id="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="casos" />
    <input type="hidden" name="view" value="casos" />
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
                    ID
                </th>
                <th>
                    Tema
                </th>
                <th>
                    Subtema
                </th>
                <th>
                    RUC
                </th>
                <th>
                    Agente
                </th>
                <th>
                    Estado
                </th>
                <th style="text-align:center;">
                    Ver
                </th>
            </tr>		
        </thead>
        <?php
        $k = 0;
        for ($i = 0, $n = count($this->results); $i < $n; $i++) {
            $row = &$this->results[$i];
            $link = JRoute::_('index.php?option=com_nutritions&controller=caso&view=caso&task=edit&Itemid=2&cid[]=' . $row->id_caso);
            ?>
            <tr class="<?php echo "row$k"; ?>">
                <td style="text-align:center;">
                    <?php echo $i+1; ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $row->id_caso; ?>
                </td>
                <td>
                    <?php echo $row->n1_name; ?>
                </td>
                <td>
                    <?php echo $row->n2_name; ?>
                </td>
                <td>
                    <?php echo $row->nu_ruc; ?>
                </td>
                <td>
                    <?php echo $row->tx_agente; ?>
                </td>
                <td>
                    <?php echo $row->total; ?>
                </td>
                <td style="text-align:center;">
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

