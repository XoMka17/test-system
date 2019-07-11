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

    $posada_list = $obj->getPosada();
    ?>

</head>
<body>
<a href="index.php">Назад</a>
<form action="posadaToDB.php" method="post">
    <table>
        <tr>
            <td>Назва посади:</td>
            <td><input type="text" name="name"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Додати"></td>
        </tr>
    </table>

    <style>
        .main-table {
            text-align: center;
            border-collapse: collapse;
        }
        .main-table td {
            width: 300px;
            padding: 5px;
            border: 1px solid #000;
        }
    </style>
    <table class="main-table">
        <tr><td style="background-color: #d8fcdc"><b>Name</b></td></tr>
        <?php foreach ($posada_list as $posada): ?>
            <tr><td><?= $posada['name'] ?></td></tr>
        <?php endforeach; ?>
    </table>
</form>
</body>