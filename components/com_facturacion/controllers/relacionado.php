<?php
defined('_JEXEC') or die();

class EmpresasControllerRelacionado extends EmpresasController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }

    /**
     * display the edit form
     * @return void
     */
    function edit()
    {
        JRequest::setVar( 'view', 'relacionado' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }

    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('relacionado');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Doc relacionado grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar documento relacionado.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_facturacion&controller=relacionado&view=relacionado&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
    }

    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_facturacion&view=relacionado&Itemid=3', $msg );
    }
    public function addRel() {
        $cpeId = JRequest::getVar('cpeId', NULL);
        $link = "index.php?option=com_facturacion&controller=relacionado&view=relacionado&task=edit&cpeId={$cpeId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }
    
     
    
}
?>
