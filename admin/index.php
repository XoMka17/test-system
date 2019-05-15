<?php
/**
 * Created by PhpStorm.
 * User: Назар
 * Date: 18.04.2019
 * Time: 15:46
 */

?>

<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Система тестування</title>

</head>
<body>

<?php
session_start();
$login = '';
$password = '';
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
} else if (isset($_POST['exit'])) {
    $_SESSION['isAuth'] = 0;
    unset($_SESSION['isAuth']);
    session_write_close();
}

if (($login == 'admin' && $password = '123') || $_SESSION['isAuth'] == 1) {
    $_SESSION['isAuth'] = 1;

    require_once("../DatabaseModel.php");

    $a = new DatabaseModel();
    $tests = $a->getTests();

    ?>

    <h2>Система тестування вас вітає!</h2>
    <a href="addtest.php">Додати тест</a>
    <a href="addquestions.php">Додати запитання</a>

    <form action="index.php" method="post">
        <input type="hidden" name="exit" value="1">
        <input type="submit" value="Вихід">
    </form>

    <br>

    <form action="index.php" method="post">
        <span>Тест</span>
        <select name="test">
            <?php
            foreach ($tests as $test) {
                echo '<option value ="' . $test['id'] . '">' . $test['title'] . '</option>';
            }
            ?>
        </select>
        <select name="division">
            <option value="all">Усі</option>
            <option value="C5 курс">C5 курс</option>
            <option value="C6 курс">C6 курс</option>
            <option value="C7 курс">C7 курс</option>
            <option value="C8 курс">C8 курс</option>
        </select>
        <input type="submit" value="Зайти">
    </form>
    <?php

    $table = [];

    if (isset($_POST['test']) && isset($_POST['division'])) {

        $division = $_POST['division'];
        $testID = $_POST['test'];

        $users = $a->getUsers();

        $userTable = [];
        foreach ($users as $user) {
            if ($user['division'] == $division || $division == 'all') {

                $user['score'] = unserialize($user['score']);

                $score = false;
                foreach ($user['score'] as $userScore) {

                    $key = key($userScore);

                    if ($key == $testID) {
                        $score = $userScore[$key];
                        break;
                    }
                }

                if ($score !== false) {
                    array_push($table, [$user['user'], $user['division'], $user['posada'], $user['rang'], $score]);
                }
            }
        }
    }

    echo '<table><thead><tr><td>#</td><td>ФІО</td><td>Підрозділ</td><td>Посада</td><td>Звання</td><td>Оцінка</td></tr></thead>';

    echo '<tbody>';
    foreach ($table as $key => $tr) {
        echo '<tr><td>' . ($key + 1) . '</td><td>' . $tr[0] . '</td><td>' . $tr[1] . '</td><td>' . $tr[2] . '</td>
            <td>' . $tr[3] . '</td><td>' . $tr[4] . '</td></tr>';
    }
    echo '</tbody></table>';

} else {
    ?>
    <h2>Система тестування вас вітає!</h2>
    <form action="index.php" method="post">
        <span>Логін</span>
        <input type="text" name="login" placeholder="логін">
        <span>Пароль</span>
        <input type="password" name="password" placeholder="пароль">
        <input type="submit" value="Зайти">
    </form>
    <?php
    echo '<script>alert("Логін або пароль не вірні)</script>';
}

?>

</body>
</html>
