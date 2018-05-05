<?php
defined('_JEXEC') or die();

class NutritionsControllerInfzoos extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks 
        
        $this->registerTask( 'add' , 'edit' );  
    }



    public function searchAction() {
        $model = $this->getModel('infzoos');
        $view = $this->getView('infzoos', 'html');
        $view->setModel($model, true);
        $infzoos = $model->getSearchResults();
        $view->assignRef('results', $infzoos);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infzoo&view=infzoo&task=edit&Itemid=3&cid[]=');
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
