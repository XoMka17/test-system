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
    <form action="questionToTestDB.php" method="post">
        <table>
            <select name='test_id'>
                <?php foreach ($a as $key) echo "<option value=" . $key['id'] . ">" . $key['title'] . "</option>"; ?>
            </select>
            <tr>
                <td>Питання 1:</td>
                <td><input type="text" name="question"></td>
            </tr>
            <tr>
                <td>Відповідь 1:</td>
                <td><input type="text" name="answer_1"></td>
            </tr>
            <tr>
                <td>Відповідь 2:</td>
                <td><input type="text" name="answer_2"></td>
            </tr>
            <tr>
                <td>Відповідь 3:</td>
                <td><input type="text" name="answer_3"></td>
            </tr>
            <tr>
                <td>Відповідь 4:</td>
                <td><input type="text" name="answer_4"></td>
            </tr>
            <tr>
                <td>Відповідь 5:</td>
                <td><input type="text" name="answer_5"></td>
            </tr>
            <tr>
                <td>Відповідь 6:</td>
                <td><input type="text" name="answer_6"></td>
            </tr>
            <tr>
            <tr>
                <td>Відповідь:</td>
                <td><input type="number" name="answer"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Додати"></td>
            </tr>
        </table>
    </form>
</body>