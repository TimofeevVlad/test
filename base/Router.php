<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 28.08.2017
 * Time: 22:30
 */
class Router
{
    // Анализ запроса и передача управления необходимому контроллеру
    public function start()
    {
        $controllerName = 'UsersController';
        $actionName = 'actionIndex';

        //Подключаем файл класса контроллера
        $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
        if (file_exists($controllerFile)) {
            include_once($controllerFile);

            // Создаем объект класса контроллера, вызываем метод
            $controllerObject = new $controllerName;
            if (method_exists($controllerObject, $actionName)) {
                $controllerObject->$actionName();
            }
             else {
                $this->ErrorPage404();
            }
        }
        else{
            $this->ErrorPage404();
        }
    }
    private function ErrorPage404()
    {
        echo 404;
    }
}