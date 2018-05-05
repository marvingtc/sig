<?php

class rel extends JTable
{
    /** @var integer */
    var $rel_id_rel = null;
    /** @var integer */
    var $cpe_id_cpe = null;
    var $rel_indDocRelacionado = null;
    var $rel_tipDocRelacionado = null;
    var $rel_numDocRelacionado = null;
    var $rel_tipDocEmisor = null;
    var $rel_numDocEmisor = null;    
    var $rel_mtoDocRelacionado = null;    
        
    var $rel_fecCreacion = null; 
    var $rel_usuCreacion = null; 
    var $rel_fecModificacion = null;
    var $rel_usuModificacion = null; 
    /** @var integer */
    function rel(& $db) {
        parent::__construct('tfact_rel', 'rel_id_rel', $db);
    }

}

?>
