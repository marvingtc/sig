<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class empresa extends JTable
{
    /** @var integer */
    var $emp_id_emp = null;
    /** @var integer */
    var $emp_tipDocUsuario = null;
    /** @var integer */
    var $emp_numDocUsuario = null;
    /** @var String */
    var $emp_rznSocialUsuario = null;
    var $emp_ipRepositorio = null;
    var $emp_rutaDest = null;
    var $emp_fecCreacion = null; 
    var $emp_usuCreacion = null; 
    var $emp_fecModificacion = null;
    var $emp_usuModificacion = null; 
    
    /** @var integer */
    
    function empresa(& $db) {
        parent::__construct('tfact_emp', 'emp_id_emp', $db);
    }

}

?>
