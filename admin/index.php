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

    <!--    <link rel="stylesheet" href="../style.css">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

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


    $division_list = $a->getDivision();
    $posada_list = $a->getPosada();
    ?>

    <h2 class="head-title print">ЗАЛІКОВА ВІДОМІСТЬ</h2>
    <h4 class="head-title-sub print">з предметів професійного навчання <?php echo date('d.m.Y'); ?> року</h4>

    <h2 class="head-title">Система тестування вас вітає!</h2>
    <a href="addtest.php">Додати тест</a>
    <a href="addquestions.php">Додати запитання</a>
    <a href="adddivision.php">Додати групу</a>
    <a href="addposada.php">Додати посаду</a>

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

        <select class="form-item-field" name="division">
            <?php foreach ($division_list as $division_item):
                if ($division_item['name'] == '*') {
                    $division_item['id'] = $division_item['name'];
                }
                ?>
                <option value="<?= $division_item['id']; ?>"><?= $division_item['name']; ?></option>
            <?php endforeach; ?>
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
            if ($user['division'] == $division || $division == '*') {

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
                    array_push($table, [
                            'name'     => $user['user'],
                            'posada'   => $a->getPosada($user['posada'])['name'],
                            'division' => $a->getDivision($user['division'])['name'],
                            'score'    => $score]
                    );
                }
            }
        }
    }

    echo '<table id="mainTable"><thead><tr><td>№ <br>з/п</td><td>В/зв</td><td>Прізвище та <br>ініціали</td><td>№ группи</td><td>Загальна оцінка</td></tr></thead>';

    echo '<tbody>';
    foreach ($table as $key => $tr) {
        echo '<tr><td>' . ($key + 1) . '</td><td>' . $tr['posada'] . '</td><td>' . $tr['name'] . '</td>
            <td>' . $tr['division'] . '</td><td>' . $tr['score'] . '</td></tr>';
    }
    echo '</tbody></table>';

    echo '<button  onclick="javascript:window.print()" class="btn-print">Друкувати</button>';

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

<!---->
<!--<div id="print-content">-->
<!--    <form>-->
<!---->
<!--        <input type="button" onclick="printTable('mainTable')" value="print a div!"/>-->
<!--    </form>-->
<!--</div>-->

<style>
    .print {
        display: none;
    }

    table {
        text-align: center;
        border-collapse: collapse;
    }

    table td {
        padding: 5px;
        border: 1px solid #000;
    }

    @media print {
        .print, .print.head-title {
            display: block;
            text-align: center;
        }

        form, button, a, .head-title {
            display: none;
        }
    }
</style>
<script type="text/javascript">

    function printTable(divName) {

        var printContents = document.getElementById(divName).innerHTML;
        w = window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
</script>
</body>
</html>
