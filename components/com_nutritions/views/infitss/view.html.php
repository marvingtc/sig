<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

/**
 * Categories View
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class NutritionsViewInfitss extends JView {

    public $results = null;

    /**
     * Categories view display method
     * @return void
     * */
    function display($tpl = null) {
        //for pagination
        global $mainframe, $option;
        $model = $this->getModel();
        $infitss = & $this->get('Data');
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/funciones.js');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bootstrap.min.js');
        
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/bootstrap.min.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');

        
        $id_its = $mainframe->getUserStateFromRequest( $option.'.infitss.id_its', 'id_its', '', 'int' );
       // $cod_2000 = $mainframe->getUserStateFromRequest( $option.'.inftbcs.cod_2000', 'cod_2000', '', 'int' );
        
        $this->assignRef('id_its', $id_its);
        $this->assignRef('infitss', $infitss);
        //$this->assignRef('cod_2000', $cod_2000);

        parent::display($tpl);
    }

}
