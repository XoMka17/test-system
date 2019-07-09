<?php
/**
 * Created by PhpStorm.
 * User: Назар
 * Date: 18.04.2019
 * Time: 13:22
 */

require_once ("DatabaseModel.php");

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$a = new DatabaseModel();


$test_array = array('name' => 'Simple');

$a->insertPosada($test_array);

$quests = $a->getPosada();

var_dump($quests);