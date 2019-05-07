<?php
/**
 * Created by PhpStorm.
 * User: Назар
 * Date: 18.04.2019
 * Time: 11:22
 */

require_once ("DatabaseModel.php");

$a = new DatabaseModel();

if(isset($_GET['e'])) {
    $error = $_GET['e'];

    if($error == 1) {
        echo '<script>alert("Заповніть форму!")</script>';
    }
    else if($error == 2) {
        echo '<script>alert("Тест пройдено!")</script>';
    }
}

$tests = $a->getTests();
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
<h2>Система тестування вас вітає!</h2>
<form action="test.php" method="post">
    <span>Прізвище Ім'я Побатькові</span>
    <input type="text" name="user" placeholder="Кальян Назар Анатолійович" required>
    <span>Структурний підрозділ</span>
    <select name="division">
        <option value ="C5 курс">C5 курс</option>
        <option value ="C6 курс">C6 курс</option>
        <option value ="C7 курс">C7 курс</option>
        <option value ="C8 курс">C8 курс</option>
    </select>
    <span>Посада</span>
    <input type="text" name="position" placeholder="Курсант С-55 групи" required>
    <span>Звання</span>
    <input type="text" name="rank" placeholder="Старший солдат" required>
    <select name="test-id">
        <?php
        foreach ($tests as $test) {
            echo '<option value ="' . $test['id'] . '">' . $test['title'] . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Почати">
</form>
</body>
</html>

