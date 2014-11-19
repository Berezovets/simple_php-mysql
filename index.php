<?php session_start();
define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА

require_once($_SERVER[DOCUMENT_ROOT]."/core/class_db.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

// ПОДКЛЮЧЕНИЕ К БД
$db = new MyDB("localhost", "root", "123456", "my_test");

// ГЛАВНЫЙ КОНТРОЛЛЕР
switch ($_GET[option]) {
case "first":
include($_SERVER[DOCUMENT_ROOT]."/component/page.php");
break;
default:
include($_SERVER[DOCUMENT_ROOT]."/component/home.php");
break;
}

include ($_SERVER[DOCUMENT_ROOT]."/template.php");
$db->close();

?>
