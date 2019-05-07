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
$login = '';
$password = '';
if(isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
}

if($login == 'admin' && $password = '123') {

    require_once ("DatabaseModel.php");

    $a = new DatabaseModel();

    $tests = $a->getTests();

?>
    <h2>Система тестування вас вітає!</h2>
    <a href="addtest.php">Додати тест</a>
    <a href="addquestions.php">Додати запитання</a>
    <form action="admin.php" method="post">
        <span>Тест</span>
        <select name="test">
            <?php
            foreach ($tests as $test) {
                echo '<option value ="' . $test['id'] . '">' . $test['title'] . '</option>';
            }
            ?>
        </select>
        <select name="division">
            <option value ="all">Усі</option>
            <option value ="C5 курс">C5 курс</option>
            <option value ="C6 курс">C6 курс</option>
            <option value ="C7 курс">C7 курс</option>
            <option value ="C8 курс">C8 курс</option>
        </select>
        <input type="hidden" name="login" value="<? echo $login ?>">
        <input type="hidden" name="password" value="<? echo $password ?>">
        <input type="submit" value="Зайти">
    </form>
<?php

    $table = [];

    if(isset($_POST['test']) && isset($_POST['division'])) {
        $division = $_POST['division'];

        $users = $a->getUsers();

        $userTable = [];
        if($division != 'all') {
            foreach ($users as $user) {
                if($user['division'] == $division) {
                    $user['score'] = unserialize($user['score']);

                    $testsID = array_keys($user['score']);

                    var_dump($testsID);

//                    foreach ($user['score'] as $userScore) {
//                        if($userScore == ) {
//
//                        }
//                    }
                    if($score = 0) {

                    }
                    $user['score'] = $score;
                    array_push($userTable,$user);
                }
            }
            $table = [['Назар','С55','Курсант','Солдат','5']];
        }

        $users;
    }

    $table = [['Назар','С55','Курсант','Солдат','5']];
    echo '<table><thead><tr><td>#</td><td>ФІО</td><td>Підрозділ</td><td>Посада</td><td>Звання</td><td>Оцінка</td></tr></thead>';

    echo '<tbody>';
    foreach ($table as $key => $tr) {
        echo '<tr><td>' . $key . '</td><td>' . $tr[0] . '</td><td>' . $tr[1] . '</td><td>' . $tr[2] . '</td>
            <td>' . $tr[3] . '</td><td>' . $tr[4] . '</td></tr>';
    }
    echo '</tbody></table>';

}
else {
?>
    <h2>Система тестування вас вітає!</h2>
    <form action="admin.php" method="post">
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
