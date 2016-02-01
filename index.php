<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'Controller.php';
require 'Model.php';
require 'View.php';

$page = !empty($_GET['page']) ? $_GET['page'] : null;

$controller = new Controller();

switch ($page) {

    case 'articles' :
    default:
        $controller->articles();
	    break;

    case 'detail' :
        $id = $_GET['id'];
        $controller->detail($id);
	    break;

    case 'edit' :
    	$id = $_GET['id'];
    	$controller->edit($id);
	    break;

    case 'delete':
    	$id = $_GET['id'];
    	$controller->delete($id);
		break;

}
