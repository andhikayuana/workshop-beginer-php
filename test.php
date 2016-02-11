<?php
error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

require 'lib/Model.php';

$model = new Model();

//test get all
//var_dump($model->get_articles());

//test get one
//var_dump($model->get_article(1));

//test add

//$data = array();
//$data['title'] = "Test posting artikel";
//$data['content'] = "Amet id ipsum culpa architecto voluptatum quos soluta dolor aliquam doloribus minus repellat ipsa dolor. Praesentium cumque deleniti sequi asperiores ut fugit nesciunt. Consequatur veritatis sit illum molestiae temporibus dicta.";
//var_dump($model->add_article($data));

//test update

$data = array();
$data['title'] = "EDITED TITLE";
$data['content'] = "EDITED CONTENT";
$id = 6;
var_dump($model->update_article($id, $data));

//test delete

//$id = "";
//var_dump($model->delete_article($id));
