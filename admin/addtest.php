<head>
    <meta charset="utf-8">

    <?php
    session_start();
    if ($_SESSION['isAuth'] != 1) {
        exit('<meta http-equiv="refresh" content="0; URL=\'http://localhost/test-system/admin\'" />');
    }

    include_once("../DatabaseModel.php");
    $obj = new DatabaseModel();
    $a = $obj->getTests();

    $division_list = $obj->getDivision();
    $posada_list = $obj->getPosada();
    ?>

</head>
<body>
<a href="index.php">Назад</a>
<form action="testToDB.php" method="post">
    <table>
        <tr>
            <td>Назва тесту:</td>
            <td><input type="text" name="title"></td>
        </tr>

        <tr>
            <td>Максимальна оцінка за тест:</td>
            <td><input type="number" name="max_score" value="5"></td>
        </tr>

        <tr>
            <td>Група:</td>
            <td>
                <select name="division">
                    <?php foreach ($division_list as $division_item): ?>
                        <option value="<?= $division_item['id']; ?>"><?= $division_item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Звання:</td>
            <td>
                <select name="posada">
                    <?php foreach ($posada_list as $posada_item): ?>
                        <option value="<?= $posada_item['id']; ?>"><?= $posada_item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Додати"></td>
        </tr>
    </table>
</form>
</body>