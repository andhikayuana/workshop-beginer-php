<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';

require app.'AdminController.php';
require app.'View.php';
require app.'Model.php';

$controller = new AdminController();

$page = isset($_GET['page']) ? $_GET['page'] : 'list_articles';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller->$page($id);	
