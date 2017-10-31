<?php
/**
 * Created by PhpStorm.
 * User: ScARYlink
 * Date: 23.10.2017
 * Time: 21:33
 */

// FRONT controller

// Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение файлов истемы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
//var_dump(ROOT);

// Соединение с БД
require_once(ROOT.'/components/Db.php');

// Вызов Router
$router = new Router();
$router->run();