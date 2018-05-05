<?php
defined('_JEXEC') or die();

class NutritionsControllerCasos extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }
    
    public function searchAction() {
        $model = $this->getModel('casos');
        $view = $this->getView('casos', 'html');
        $view->setModel($model, true);
        $casos = $model->getSearchResults();
        $view->assignRef('results', $casos);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=caso&view=caso&task=edit&Itemid=2&cid[]=');
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
