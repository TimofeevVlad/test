<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 28.08.2017
 * Time: 21:46
 */
// Отображение ошибок
ini_set('display_errors', 1);

define('ROOT',dirname(__FILE__));
require_once (ROOT.'/bootstrap.php');


// Создание соединения с БД
Model::setDbConnection();

// Вызов 'router'
$router = new Router();
$router->start();