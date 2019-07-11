<?php
include_once('../DatabaseModel.php');

if (!isset($_POST['name'])) exit('No posada name');

$a = new DatabaseModel();

$posada_array = array(
    'name' => $_POST['name']
);

$a->insertPosada($posada_array);
?>

<h1>Посада додана!</h1>

<a href="index.php">На головну</a>
<a href="addposada.php">Додати ще посаду</a>