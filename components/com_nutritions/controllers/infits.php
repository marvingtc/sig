<?php
defined('_JEXEC') or die();

class NutritionsControllerInfits extends NutritionsController
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
        JRequest::setVar( 'view', 'infits' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infits&view=infits&task=edit&cid[]=');
                           
    }
    
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('infits');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Informe General grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar informe general' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=infits&view=infits&task=edit&&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
     }
     
    public function removeInfits() {
        $infitsId = JRequest::getInt('infitsId', NULL);
        $model = $this->getModel('infits');
        $model->removeInfits($infitsId);
        $msg = 'Informe Removido!!!';
        $link = 'index.php?option=com_nutritions&view=infitss';
        $this->setRedirect($link, $msg);
    }
    
     public function indicadorduplicado() {
       
        $eess = JRequest::getInt('cod_2000', NULL);
        $anho = JRequest::getInt('nu_ano', NULL);
        $mes = JRequest::getInt('nu_mes', NULL);
        $model = $this->getModel('infits');
        $model->indicadorInforme($eess, $anho, $mes);
//        $msg = 'Informe Removido!!!';
//        $link = 'index.php?option=com_nutritions&view=infitss';
//        $this->setRedirect($link, $msg);
    }
    
}
?>
