<?php

class dcpe extends JTable
{
    /** @var integer */
    var $dcpe_id_detalle_cpe = null;
    /** @var integer */
    var $cpe_id_cpe = null;
    var $dcpe_id_producto = null;
    var $dcpe_codUnidadMedida = null;
    var $dcpe_ctdUnidadItem = null;    
    var $dcpe_codProducto = null;    
    var $dcpe_codProductoSUNAT = null;    
    var $dcpe_desItem = null;
    /** @var integer */
    var $dcpe_mtoValorUnitario = null;
    /** @var integer */
    var $dcpe_mtoDsctoItem = null;
    /** @var String */
    var $dcpe_mtoIgvItem = null;    
    var $dcpe_tipAfeIGV = null;    
    var $dcpe_mtoIscItem = null;
    var $dcpe_tipSisISC = null;
    var $dcpe_mtoPrecioVentaItem = null;
    var $dcpe_mtoValorVentaItem = null;
    
    var $dcpe_fecCreacion = null; 
    var $dcpe_usuCreacion = null; 
    var $dcpe_fecModificacion = null;
    var $dcpe_usuModificacion = null; 
        /** @var integer */
    function dcpe(& $db) {
        parent::__construct('tfact_detalle_cpe', 'dcpe_id_detalle_cpe', $db);
    }

}

?>
