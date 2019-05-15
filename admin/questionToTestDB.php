<?php
include_once('../DatabaseModel.php');

if (!isset($_POST['test_id'])) exit('No test ID');

$a = new DatabaseModel();

$questions_array = array(
    'title'   => $_POST['question'],
    'test_id' => $_POST['test_id'],
    'value'   => serialize(array($_POST['answer_1'], $_POST['answer_2'], $_POST['answer_3'], $_POST['answer_4'], $_POST['answer_5'], $_POST['answer_6'])),
    'answer'  => $_POST['answer']
);

var_dump($_POST);

$a->insertQuestion($questions_array);
?>

<h1>Question added</h1>
