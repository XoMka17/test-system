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
    ?>

</head>
<body>
    <form action="testToDB.php" method="post">
        <table>
            <tr>
                <td>Назва тесту:</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Додати"></td>
            </tr>
        </table>
    </form>
</body>
