<?php
/**
 * Created by PhpStorm.
 * User: Назар
 * Date: 18.04.2019
 * Time: 13:22
 */

require_once ("DatabaseModel.php");

$a = new DatabaseModel();

$users = $a->getUsers();

$userAnswer = '';
$testID = $_POST['test-id'];
if(isset($_POST['user']) && isset($_POST['division'])) {

    $exists = false;
    foreach ($users as $user) {
        if($user['user'] == $_POST['user']) {
            $exists = true;

            $completed = false;
            $testsScores = array_keys(unserialize($user['score']));
            foreach ($testsScores as $testScore) {
                if($testScore == $testID) {
                    $completed = true;
                    break;
                }
            }

            if($completed === true) {
                header('Location: /exam/?e=2');
            }

            break;
        }
    }

    $userScore = [];
    if($exists === false) {
        $user_array = array(
            'user'        => $_POST['user'],
            'division'    => $_POST['division'],
            'rang'        => $_POST['rank'],
            'posada'      => $_POST['position'],
            'score'       => serialize($userScore)
        );
        $a->insertUser($user_array);
    }

    $userAnswer = $_POST['user'];
}
else {
    header('Location: /exam/?e=1');
}

$tests = $a->getTests();

$testName = '';
foreach ($tests as $test) {
    if($test['id'] == $testID) {
        $testName = $test['title'];
    }
}

echo '<h2>' . $testName . '</h2><form action="check.php" method="post"><input type="hidden" name="test-id" value="' . $testID . '"><input type="hidden" name="user-name" value="' . $userAnswer . '">';

$quests = $a->getQuestions($testID);

foreach ($quests as $quest) {
    echo $quest['title'] . '<br>';

    foreach (unserialize($quest['value']) as $keyValue => $value ) {
        echo '<input type="radio" name="' . $quest['id'] . '" value="' . ($keyValue+1) . '" checked> ' . $value . '<br>';
    }
    echo '<br>';
}
echo '<input type="submit" value="Надіслати"></form>';

?>
