<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 28.08.2017
 * Time: 22:29
 */

class Controller
{
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

}