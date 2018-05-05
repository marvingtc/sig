<?php
defined('_JEXEC') or die();

class EmpresasControllerCpes extends EmpresasController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }
    
    public function searchAction() {
        $model = $this->getModel('cpes');
        $view = $this->getView('cpes', 'html');
        $view->setModel($model, true);
        $cpes = $model->getSearchResults();
        $view->assignRef('results', $cpes);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_facturacion&view=cpes');
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancel()
    {
        $msg = JText::_( 'Operation Cancelled' );
        $this->setRedirect( 'index.php?option=com_projects&controller=project&view=projects', $msg );
    }
    
        
}
?>
