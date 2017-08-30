<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.08.2017
 * Time: 9:01
*/
//isset($_POST["name"]) && isset($_POST['age']) && isset($_POST['city'])
if(!empty($_POST['submit']))
    {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    Users::createNewUser($name, $age, $city);

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri");
    exit;
}


