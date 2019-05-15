<?php
include_once('../DatabaseModel.php');

if (!isset($_POST['title'])) exit('No test title');

$a = new DatabaseModel();

$test_array = array('title' => $_POST['title']);

$a->insertTest($test_array);