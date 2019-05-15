<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 11.05.19
 * Time: 11:15
 */

session_start();
var_dump($_SESSION['hello']);
$_SESSION['hello'] = 123;

var_dump($_SESSION['hello']);

?>
<a href="test4.php">test4</a>