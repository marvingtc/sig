<?php
defined('_JEXEC') or die();

class EmpresasControllerDcpe extends EmpresasController
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
        JRequest::setVar( 'view', 'dcpe' );
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
        $model = $this->getModel('dcpe');
        $resultStore = $model->store($data);
//        print_r($resultStore);
//        die();
//        $modelo = $this->getModel('cpe');
//        $resultCPE = $modelo->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Item grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar item.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
//        $link = 'index.php?option=com_facturacion&controller=dcpe&view=dcpe&task=edit&Itemid=3&cid[]='.$resultStore;
//        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]='.$data['cpe_id_cpe'];
        $link = 'index.php?option=com_facturacion&controller=cpe&task=updateMontosTotales&cpeId='.$data['cpe_id_cpe'];
        $this->setRedirect($link, $msg);
    }
    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_facturacion&view=dcpe&Itemid=3', $msg );
    }
    
     public function obtenerValorController() {
         
        $dcpe_tipAfeIGV = JRequest::getString('dcpe_tipAfeIGV');
        $model = $this->getModel('dcpe');
        $model->obtenerValor($dcpe_tipAfeIGV);
    } 
    
}
?>
