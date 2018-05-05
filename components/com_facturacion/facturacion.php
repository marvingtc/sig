<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

//require_once( JPATH_COMPONENT.DS.'helpers'.DS.'perms.php' );

// Require the base controller
require_once (JPATH_COMPONENT.DS.'controller.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'empresa.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'cpe.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'dcpe.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'rel.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'ley.php');


// Require specific controller if requested
if($controller = JRequest::getVar('controller')) {
    require_once (JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php');
}

// Create the controller
$classname = 'EmpresasController'.$controller;
$controller = new $classname( );

// Perform the Request task
$controller->execute( JRequest::getVar('task'));

// Redirect if set by the controller
$controller->redirect();

?>

