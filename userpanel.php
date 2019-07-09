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
    <title>User Panel</title>

</head>
<body>
<h2>Система тестування вас вітає!</h2>
<form>
   <p> ПІБ: <?php echo $_POST['user']; ?>.</p>
    <p> Підрозділ: <?php echo $_POST['division']; ?>.</p>
   <p> Звання: <?php echo $_POST['rank']; ?> </p>
</form>
</body>
</html>


