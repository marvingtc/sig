<?php

class ley extends JTable
{
    /** @var integer */
    var $ley_id_ley = null;
    /** @var integer */
    var $cpe_id_cpe = null;
    var $ley_codLeyenda = null;
    var $ley_desLeyendaPers = null;
      
    var $ley_fecCreacion = null; 
    var $ley_usuCreacion = null; 
    var $ley_fecModificacion = null;
    var $ley_usuModificacion = null; 
    /** @var integer */
    function ley(& $db) {
        parent::__construct('tfact_ley', 'ley_id_ley', $db);
    }

}

?>
