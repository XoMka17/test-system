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

$tests = $a->getTests();

$division_list = $a->getDivision();
$posada_list = $a->getPosada();
?>

<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Система тестування</title>

    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<h2 class="head-title">Система тестування вас вітає!</h2>
<form action="userpanel.php" method="post" class="form">
    <div class="form-item">
        <span class="form-item-title">Прізвище Ім'я Побатькові</span>
        <input class="form-item-field" type="text" name="user" placeholder="" required>
    </div>

    <div class="form-item">
        <span class="form-item-title">Група</span>
        <select class="form-item-field" name="division">
            <?php foreach ($division_list as $division_item): ?>
                <option value="<?= $division_item['id']; ?>"><?= $division_item['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-item">
        <span class="form-item-title">Звання</span>
        <select class="form-item-field" name="posada">
            <?php foreach ($posada_list as $posada_item): ?>
                <option value="<?= $posada_item['id']; ?>"><?= $posada_item['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-item">
        <input type="submit" value="Почати">
    </div>
</form>
</body>
</html>


