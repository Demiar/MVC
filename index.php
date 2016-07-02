<?php

	//1.Общие настройки
ini_set('displayerrors', 1);
error_reporting(E_ALL);
	//2.Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT. '/components/router.php');
	//3.Установка соединения с БД
	//4.Вызов router

$new = new router();
$new->run();
?>