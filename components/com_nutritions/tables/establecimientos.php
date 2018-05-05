<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class establecimientos extends JTable
{
    /** @var integer */
    var $cod_2000 = null;
    var $tx_institucion = null;
var $cod_estab = null;
var $desc_estab = null;
var $tx_tipo = null;
var $desc_dpto = null;
var $desc_prov = null;
var $desc_dist = null;
var $ubigeo = null;
var $tx_direccion = null;
var $cod_disa = null;
var $cod_red = null;
var $cod_micro = null;
var $desc_disa = null;
var $desc_red = null;
var $desc_micro = null;
var $cod_ue = null;
var $desc_ue = null;
var $tx_categoria = null;
var $tx_telefono = null;
var $tx_tipodoccate = null;
var $tx_nudoccate = null;
var $tx_horario = null;
var $fe_inicio_act = null;
var $tx_responsable = null;
var $tx_estado = null;
var $tx_situacion = null;
var $tx_condicion = null;
var $tx_inspeccion = null;
var $tx_norte = null;
var $tx_este = null;
var $tx_cota = null;
var $tx_usuario_creacion = null;


  

    function establecimientos(& $db) {
        parent::__construct('entidad', 'cod_2000', $db);
    }

}

?>
