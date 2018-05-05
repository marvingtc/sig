<?php
defined('_JEXEC') or die();

class NutritionsControllerInfzoo extends NutritionsController
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
        JRequest::setVar( 'view', 'infzoo' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infzoo&view=infzoo&task=edit&Itemid=3&cid[]=');
                           
    }
    
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('infzoo');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Informe General grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar informe general' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=infzoo&view=infzoo&task=edit&Itemid=3&&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
     }
     
    public function removeInfzoo() {
        $infzooId = JRequest::getInt('infzooId', NULL);
        $model = $this->getModel('infzoo');
        $model->removeInfzoo($infzooId);
        $msg = 'Informe Removido!!!';
        $link = 'index.php?option=com_nutritions&view=infzoos';
        $this->setRedirect($link, $msg);
    }
    
     public function indicadorduplicado() {
       
        $eess = JRequest::getInt('cod_2000', NULL);
        $anho = JRequest::getInt('nu_ano', NULL);
        $mes = JRequest::getInt('nu_mes', NULL);
        $model = $this->getModel('infzoo');
        $model->indicadorInforme($eess, $anho, $mes);
//        $msg = 'Informe Removido!!!';
//        $link = 'index.php?option=com_nutritions&view=infitss';
//        $this->setRedirect($link, $msg);
    }
    
}
?>
