<?php
include_once('../DatabaseModel.php');

if (!isset($_POST['title'])) exit('No test title');

$a = new DatabaseModel();

$test_array = array(
    'title'       => $_POST['title'],
    'division_id' => $_POST['division'],
    'posada_id'   => $_POST['posada'],
    'max_score'   => $_POST['max_score']
);

$a->insertTest($test_array);
?>

<h1>Test added</h1>
