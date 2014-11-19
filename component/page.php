<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');
/* КОМПОНЕНТ СТРАНИЦЫ */
$alias = $_GET[alias];

$data = $db->query("SELECT * FROM mysite WHERE page_alias='".$alias."' LIMIT 1");

// ПЕРЕМЕННЫЕ КОМПОНЕНТА
$id = $db->data[page_id];
$alias = $db->data[page_alias];
$title = $db->data[page_title];
$h1 = $db->data[page_h1];
$meta_d = $db->data[page_meta_d];
$meta_k = $db->data[page_meta_k];
$s_desc = $db->data[page_s_desc];
$component = $db->data[page_content];
// ЕСЛИ СТРАНИЦЫ НЕ СУЩЕСТВУЕТ
if (!$id) {
header("HTTP/1.1 404 Not Found");
$component = "ОШИБКА 404! Данной страницы не существует";
}
$db->stop();

?>
