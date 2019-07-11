<?php
include_once('../DatabaseModel.php');

if (!isset($_POST['name'])) exit('No division name');

$a = new DatabaseModel();

$division_array = array(
    'name' => $_POST['name']
);

$a->insertDivision($division_array);
?>

<h1>Група додана!</h1>

<a href="index.php">На головну</a>
<a href="adddivision.php">Додати ще групу</a>