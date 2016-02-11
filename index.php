<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE', 'http://localhost/php/simple_blog/');

require 'Controller.php';
require 'View.php';
require 'Model.php';

$controller = new Controller();

$page = isset($_GET['page']) ? $_GET['page'] : 'list_articles';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller->$page($id);
