<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 11.05.19
 * Time: 11:16
 */

session_start();

var_dump($_SESSION['hello']);
$_SESSION['hello'] = 321;

var_dump($_SESSION['hello']);

?>
<a href="test3.php">test3</a>
