<?php
defined('_JEXEC') or die();

class EmpresasControllerLeyenda extends EmpresasController
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
        JRequest::setVar( 'view', 'leyenda' );
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
        $model = $this->getModel('leyenda');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Leyenda grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar leyenda.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_facturacion&controller=leyenda&view=leyenda&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_facturacion&view=leyenda&Itemid=3', $msg );
    }
    public function obtenerDescLey() {
        $ley_codLeyenda = JRequest::getInt('ley_codLeyenda');
        $model = $this->getModel('leyenda');
        $model->obtenerDescLey($ley_codLeyenda);
    }
   public function addLey() {
        $cpeId = JRequest::getVar('cpeId', NULL);
        $link = "index.php?option=com_facturacion&controller=leyenda&view=leyenda&task=edit&cpeId={$cpeId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }
    
  public function numero_mtoLetras() {
        $cpe_id_cpe = JRequest::getString('cpe_id_cpe');
        $model = $this->getModel('leyenda');
        $model->numero_mtoLetras($cpe_id_cpe);
    }
    
  public function genMontLetras() {
        $cpe_mtoImpVenta = JRequest::getString('cpe_mtoImpVenta');
        $model = $this->getModel('leyenda');
        $model->numeroLetras($cpe_mtoImpVenta,'PE','i');
    }
     
    
}
?>
