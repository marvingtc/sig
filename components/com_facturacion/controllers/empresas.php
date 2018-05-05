<?php
defined('_JEXEC') or die();

class EmpresasControllerEmpresas extends EmpresasController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }
    
    public function searchAction() {
        $model = $this->getModel('empresas');
        $view = $this->getView('empresas', 'html');
        $view->setModel($model, true);
        $empresas = $model->getSearchResults();
        $view->assignRef('results', $empresas);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_facturacion&controller=empresa&view=empresa&task=edit&Itemid=3&cid[]=');
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
