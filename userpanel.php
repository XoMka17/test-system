<?php
/**
 * Created by PhpStorm.
 * User: Назар
 * Date: 18.04.2019
 * Time: 11:22
 */

require_once("DatabaseModel.php");

$a = new DatabaseModel();

if (isset($_GET['e'])) {
    $error = $_GET['e'];

    if ($error == 1) {
        echo '<script>alert("Заповніть форму!")</script>';
    } else if ($error == 2) {
        echo '<script>alert("Тест пройдено!")</script>';
    }
}

session_start();

if ($_POST['user']) {
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['division'] = $_POST['division'];
    $_SESSION['posada'] = $_POST['posada'];
};

$tests = $a->getTests();

$user = $a->getUsers(['name' => $_SESSION['user']])[0];

// get test's id, that user passed
$userPassedTestsId = [];
foreach (unserialize($user['score']) as $item) {
    array_push($userPassedTestsId, key($item));
}

?>

<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Panel</title>

    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>
<body>
<h2 class="head-title">Конрольна панель тестування</h2>
<form>
    Доброго дня, <b><?php echo $_SESSION['user']; ?></b>,
    Ви увійшли у контрольну панель тестування, будь ласка, пройдіть усі тест.
</form>


<h4 class="head-subtitle">Оберість тест:</h4>
<form action="test.php" method="post">

    <?php foreach ($tests as $test) {
        if (($test['division_id'] == '*'
                || $test['division_id'] == $_SESSION['division'])
            &&
            ($test['posada_id'] == '*'
                || $test['posada_id'] == $_SESSION['posada'])
            && !in_array($test['id'],$userPassedTestsId)) {
            echo '<input type="radio" name="test_id" value="' . $test['id'] . '" checked> ' . $test['title'] . '<br>';
        }
    }
    ?>
    <input type="submit" value="Почати проходження">
</form>
</body>
</html>


