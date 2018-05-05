<?php
defined('_JEXEC') or die();

class NutritionsControllerCaso extends NutritionsController
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
        JRequest::setVar( 'view', 'caso' );
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
        $model = $this->getModel('caso');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Caso Grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar caso.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=caso&view=caso&task=edit&Itemid=2&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_nutritions', $msg );
    }
    
    /**
     * Add new member to the family
     * @familyId Integer, family code
     */
    public function addDetalleCaso() {
        $casoId = JRequest::getVar('casoId', NULL);
        $link = "index.php?option=com_nutritions&controller=detallecaso&view=detallecaso&task=edit&casoId={$casoId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }  
   
    
    public function deleteDetalleCaso() {
        $casoId = JRequest::getInt('casoId', NULL);
        $detallecasoId = JRequest::getInt('id', NULL);
        $model = $this->getModel('detallecaso');
        $model->removeDetalleCaso($detallecasoId);
        $msg = 'Detalle Removido!!!';
        $link = 'index.php?option=com_nutritions&controller=caso&view=caso&task=edit&Itemid=3&cid[]='.$casoId;
        $this->setRedirect($link, $msg);
    }
        
}
?>
