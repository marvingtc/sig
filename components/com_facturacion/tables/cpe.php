<?php

class cpe extends JTable {

    /** @var integer */
    var $cpe_id_cpe = null;

    /** @var integer */
    var $emp_id_emp = null;
    var $cpe_serie = null;
    var $cpe_numero = null;
    var $cpe_numDocEmisor = null;
    var $cpe_tipCpe = null;
    var $cpe_tipOperacion = null;
    var $cpe_fecEmision = null;
    var $cpe_codLocalEmisor = null;
    var $cpe_tipDocUsuario = null;
    var $cpe_numDocUsuario = null;
    var $cpe_rznSocialUsuario = null;
    var $cpe_codIngenieria = null;
    var $cpe_tipMoneda = null;
    //notas
    var $cpe_codMotivo = null;
    var $cpe_desMotivo = null;
    var $cpe_tipDocAfectado = null;
    var $cpe_numDocAfectado = null;
    //
    var $cpe_sumDsctoGlobal = null;
    var $cpe_sumOtrosCargos = null;
    var $cpe_mtoDescuentos = null;
    var $cpe_mtoOperGravadas = null;
    var $cpe_mtoOperInafectas = null;
    var $cpe_mtoOperExoneradas = null;
    var $cpe_mtoIGV = null;
    var $cpe_mtoISC = null;
    var $cpe_mtoOtrosTributos = null;
    var $cpe_mtoImpVenta = null;
    var $cpe_inCancelado = null;
    var $cpe_inBaja = null;
    var $cpe_desBaja = null;
    var $cpe_inEstado = null;
    //ACA
    var $cpe_codRegPercepcion = null;
    var $cpe_mtoBaseImponiblePercepcion = null;
    var $cpe_mtoPercepcion = null;
    var $cpe_mtoTotalIncPercepcion = null;
    var $cpe_mtoOperGratuitas = null;
    var $cpe_mtoTotalAnticipo = null;
    var $cpe_codPaisCliente = null;
    var $cpe_codUbigeoCliente = null;
    var $cpe_desDireccionCliente = null;
    var $cpe_codPaisEntrega = null;
    var $cpe_codUbigeoEntrega = null;
    var $cpe_desDireccionEntrega = null;
    var $cpe_fecVencimiento = null;
    var $cpe_fecPago = null;
    var $cpe_medPago = null;
    var $cpe_fecOtorgado = null;
    var $cpe_txtObservacion = null;
    
    var $cpe_fecCreacion = null;
    var $cpe_usuCreacion = null;
    var $cpe_fecModificacion = null;
    var $cpe_usuModificacion = null;

    /** @var integer */
    function cpe(& $db) {
        parent::__construct('tfact_cpe', 'cpe_id_cpe', $db);
    }

}

?>
