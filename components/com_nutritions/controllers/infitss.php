<?php
defined('_JEXEC') or die();

class NutritionsControllerInfitss extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks 
        
        $this->registerTask( 'add' , 'edit' );  
    }



    public function searchAction() {
        $model = $this->getModel('infitss');
        $view = $this->getView('infitss', 'html');
        $view->setModel($model, true);
        $infitss = $model->getSearchResults();
        $view->assignRef('results', $infitss);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infits&view=infits&task=edit&Itemid=3&cid[]=');
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
