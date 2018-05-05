<?php

class caso extends JTable
{
    /** @var integer */
    var $id_caso = null;
    /** @var integer */
    var $nu_ruc = null;
    /** @var integer */
    var $tx_razon_social = null;
    /** @var String */
    var $id_tema = null;
    /** @var integer */
    var $id_dg_subtema = null;
    var $id_n1 = null;
    var $id_n2 = null;
    /** @var integer */
    var $tx_especifico = null;
    /** @var integer */
    var $tx_caso = null;
    /** @var String */
    var $fe_caso = null;
    /** @var integer */
    var $tx_agente = null;
    /** @var String */
    var $tx_contacto = null;
    /** @var integer */
    var $nu_telefono = null;
    /** @var String */
    var $in_eliminado = null;
 

    function caso(& $db) {
        parent::__construct('caso', 'id_caso', $db);
    }

}

?>
