<?php
defined('_JEXEC') or die();

class NutritionsControllerInfmetas extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks 
        
        $this->registerTask( 'add' , 'edit' );  
    }



    public function searchAction() {
        $model = $this->getModel('infmetas');
        $view = $this->getView('infmetas', 'html');
        $view->setModel($model, true);
        $infmetas = $model->getSearchResults();
        $view->assignRef('results', $infmetas);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infmeta&view=infmeta&task=edit&Itemid=3&cid[]=');
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
