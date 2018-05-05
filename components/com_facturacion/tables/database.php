<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class database extends JTable
{
    /** @var integer */
    var $NUM_RUC = null;
    /** @var integer */
    var $TIP_DOCU = null;
    /** @var integer */
    var $NUM_DOCU = null;
    /** @var String */
    var $FEC_CARG = null;
    var $FEC_GENE = null;
    var $FEC_ENVI = null;
    var $DES_OBSE = null; 
    var $NOM_ARCH = null; 
    var $IND_SITU = null;
    var $TIP_ARCH = null; 
    var $FIRM_DIGITAL = null; 
    
    /** @var integer */
    
    function database(& $db) {
        parent::__construct('TXXXX_BANDFACT', 'NUM_RUC','TIP_DOCU','NUM_DOCU', $db);
    }

}

?>
