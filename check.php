<?php
/**
 * Created by PhpStorm.
 * User: Назар
 * Date: 18.04.2019
 * Time: 13:54
 */

require_once ("DatabaseModel.php");

$a = new DatabaseModel();

$testsID = array_keys($_POST);
array_splice($testsID, 0,2);

$testID = array_shift($_POST);
array_slice($_POST,0,1);

$userName = array_shift($_POST);
array_slice($_POST,0,1);

$userAnswers = [];
foreach ($testsID as $key => $item) {
    array_push($userAnswers, ['idQuestion' => $item, 'userAnswer' => $_POST[$key]]);
}

$quests = $a->getQuestions($testID,-1);
$score = 0;

foreach ($quests as $quest) {
    foreach ($userAnswers as $user) {
        if(($quest['id'] == $user['idQuestion']) && ($quest['answer'] == $user['userAnswer'])) {
            $score += 1;
        }
    }
}

$score = ($score/count($userAnswers))*100;

$outScore[$testID] = $score;
$scoreArray = $outScore;

$userID = 0;
$users = $a->getUsers();
foreach ($users as $user) {
    if($user['user'] == $userName) {
        $userID = $user['id'];
        if(is_array(unserialize($user['score']))) {
            $scoreArray = unserialize($user['score']);
            array_push($scoreArray,$outScore);
        }
        break;
    }
}

$data = ['score' => serialize($scoreArray)];

$a->updateUser($userID,$data);

?>

<h1>Дякую, результати були збережені!</h1>
