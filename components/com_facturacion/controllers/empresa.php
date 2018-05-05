<?php
defined('_JEXEC') or die();

class EmpresasControllerEmpresa extends EmpresasController
{
    function __construct()
    {
        parent::__construct();
        $this->registerTask( 'add' , 'edit' );
    }

    function edit()
    {
        JRequest::setVar( 'view', 'empresa' );
        parent::display();
    }    

    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('empresa');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Empresa grabada!' );
        } else {
            $msg = JText::_( 'Error al grabar Empresa.' );
            $msg .= " " . $model->getError();
        }
        $link = 'index.php?option=com_facturacion&controller=empresa&view=empresa&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
    }

    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_facturacion', $msg );
    }
    
    public function addCpe() {
        $empresaId = JRequest::getVar('empresaId', NULL);
        $link = "index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&empresaId={$empresaId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }   
    
    public function deleteCpe() {
        $empresaId = JRequest::getVar('empresaId', NULL);
        $cpeId = JRequest::getInt('id', NULL);
        $model = $this->getModel('cpe');
        $model->removeCpe($cpeId);
        $msg = 'CPE Removidoo!!!';
        $link = 'index.php?option=com_facturacion&controller=empresa&view=empresa&task=edit&Itemid=3&cid[]='.$empresaId;
//        print_r($link);
//        die();
        $this->setRedirect($link, $msg);
    }        
}
?>
