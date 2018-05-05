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
        <table style="width: 100%;" >
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Grabar" onclick="validateEmpresa();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Buscar" onclick="javascript:document.getElementById('task').value = 'searchAction';
                            document.getElementById('adminForm').submit();"/>
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
        <legend>Datos de la Empresa</legend>
        <table style="width: 100%;" >
            <tr>
                <td style="width: 25%;">Tipo de Doc:</td>
                <td style="width: 25%;">
                    <?php echo $this->lists['emp_tipDocUsuario']; ?>
                </td>
                <td style="width: 25%;">N° Doc:</td>
                <td style="width: 25%;">
                    <input class="text_area" type="text" name="emp_numDocUsuario" id="emp_numDocUsuario" size="11" maxlength="11" value="<?php echo $this->empresa->emp_numDocUsuario; ?>" onkeypress="javascript:return soloNumeros(event)" />
                </td>
            </tr>
            <tr>              
                <td colspan="1">Razón social:</td>
                <td colspan="3">
                    <input class="text_area" type="text" name="emp_rznSocialUsuario" id="emp_rznSocialUsuario"  size="80" maxlength="80"  value="<?php echo $this->empresa->emp_rznSocialUsuario; ?>" />
                </td>
            </tr>
            <tr>              
                <td style="width: 25%;" colspan="1">IP Repositorio:</td>
                <td style="width: 25%;" colspan="1">
                    <input class="text_area" type="text" name="emp_ipRepositorio" id="emp_ipRepositorio" size="20" maxlength="20" value="<?php echo $this->empresa->emp_ipRepositorio; ?>" />
                </td>
                <td style="width: 25%;" colspan="1">Ruta destino:</td>
                <td style="width: 25%;" colspan="1">
                    <?php echo $this->lists['emp_rutaDest']; ?>
                </td>
            </tr>
            <tr>              
                <td colspan="2" ><a href="backup.php">Crear copia de seguridad</a></td>

            </tr>
        </table>   
    </fieldset>
    <input type="hidden" name="option" value="com_facturacion" />
    <input type="hidden" name="cid[]" value="<?php echo $this->empresa->emp_id_emp; ?>" />
    <input type="hidden" name="emp_id_emp" value="<?php echo $this->empresa->emp_id_emp; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="empresa" />
</form>

<fieldset>
    <legend>Comprobantes</legend>
    <form id="cpeForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="cpeForm">
        <div style="text-align: left;">
            <input type="button" name="btnNew" value="Nuevo" onclick="javascript:document.getElementById('newTask').value = 'addCpe';
                    document.getElementById('cpeForm').submit();" />
        </div>
        <input type="hidden" name="option" value="com_facturacion" />
        <input type="hidden" name="task" id="newTask" value="" />
        <input type="hidden" name="controller" value="empresa" />
        <input type="hidden" name="empresaId" value="<?php echo $this->empresa->emp_id_emp; ?>" />

        <table style="width: 100%;" class="bordered">
            <thead>
                <tr>
                    <th width="20">
                        #
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
                    $deleteLink = JRoute::_("index.php?option=com_facturacion&controller=empresa&task=deleteCpe&empresaId={$this->empresa->emp_id_emp}&Itemid=3&id=" . $row->cpe_id_cpe);
                    ?>
                    <tr class="<?php echo "row$k"; ?>">
                        <td style="text-align:center;">
                            <?php echo $i + 1; ?>
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
                        <td style="text-align:center;">
                            <?php echo $row->cpe_tipOperacion; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php echo $row->cpe_fecEmision; ?>
                        </td>
                        <td>
                            <?php echo $row->cpe_codIngenieria; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php
                            if(!$row->cpe_fecPago){
                            $now = $row->cpe_fecPago;
                            }else{
                            $now = date('Y-m-d');}
                            $tiempo = $this->diff($row->cpe_fecEmision, $now);
                            echo $tiempo;
                            ?>
                        </td>
                        <td style="text-align:center;">
                            <?php if($row->cpe_inCancelado == 'Pendiente')
                                    {   
                                     echo '<strong style="color:#FF0000"> '.$row->cpe_inCancelado.'</strong>';
                                     }else{
                                         echo $row->cpe_inCancelado;
                                     }  ?>
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
        
        <hr><!----------------------------------------------->
        | <?php
//Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
//Nota: X = $total_paginas
        $total_paginas = 10;
        for ($i = 1; $i <= $total_paginas; $i++) {
            //En el bucle, muestra la paginación
            echo "<a href='?pagina=" . $i . "'>" . $i . "</a> | ";
        };
        ?>

    </form>

</fieldset>

