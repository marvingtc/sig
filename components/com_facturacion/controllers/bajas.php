<?php
defined('_JEXEC') or die();

class EmpresasControllerBajas extends EmpresasController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }
    
    public function searchAction() {
        $model = $this->getModel('bajas');
        $view = $this->getView('bajas', 'html');
        $view->setModel($model, true);
        $cpes = $model->getSearchResults();
        $view->assignRef('results', $cpes);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_facturacion&view=bajas');
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
    
    public function crearJson() {
        $id = JRequest::getInt('id', NULL);
        $model = $this->getModel('bajas');
        $bajaCpe = $model->crearJson($id);
//        print_r($bajaCpe);
//        die();
        $bajalineaTemplate []= array(
            "fecGeneracion" => $bajaCpe->cpe_fecEmision,
            "fecComunicacion" => $bajaCpe->cpe_fecModificacion,
            "tipDocBaja" => $bajaCpe->cpe_tipCpe,
            "numDocBaja" => $bajaCpe->cpe_serie.'-'.$bajaCpe->cpe_numero,
            "desMotivoBaja" => $bajaCpe->cpe_desBaja
        );
        $bajaTemplate = array(
            "resumenBajas" => $bajalineaTemplate,
        );
        if ($bajaCpe->cpe_fecModificacion) {
            $now = date('Y-m-d');
            $this->diff($bajaCpe->cpe_fecModificacion, $now);
            $temporalArray = explode('-', $bajaCpe->cpe_fecModificacion);
            $bajaCpe->cpe_fecModificacion = $temporalArray[0] . $temporalArray[1] . $temporalArray[2];
        }

        $fileName = $bajaCpe->emp_numDocUsuario . '-RA-' . $bajaCpe->cpe_fecModificacion . '-' . substr($bajaCpe->cpe_numero,-5) . '.JSON';
        $ruta = "\\\\" . $bajaCpe->emp_ipRepositorio . "\\data0\\facturador\\DATA\\";
        $f = file_put_contents($ruta . $fileName, json_encode($bajaTemplate, 5));
        file_put_contents($ruta . $fileName, str_replace(array("&gt;", "&lt;", "&quot;", "&amp;"), array(">", "<", "\"", "&"), json_encode($bajaTemplate, 5)));

        $resultStore = $model->store($bajaCpe);
        if ($f) {
            $msg = JText::_('Json de Baja Generado! '.$fileName);
        } else {
            $msg = JText::_('Error al generar JSON.');
            $msg .= " " . $model->getError();
        }

        $link = 'index.php?option=com_facturacion&controller=cpe&view=cpe&task=edit&Itemid=3&cid[]=' . $resultStore;
        $this->setRedirect($link, $msg);

        
        $this->setRedirect($link, $msg);        
    } 
    
        
}
?>
