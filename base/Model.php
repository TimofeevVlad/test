<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 28.08.2017
 * Time: 21:50
 */
class Model
{

    static $dbConnection;

    public static function setDbConnection()
    {
        self::$dbConnection = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    function __construct( $args = [])
    {
        foreach ($args as $key=>$value)
            if(property_exists(get_called_class(), $key))
                $this->$key = $value;
    }

    function __get($name)
    {
        if(property_exists(self::class, $name))
            return $this->$name;
        if(method_exists($this, $method = 'get'.ucfirst($name)))
            return $this->$method();

        return null;
    }

}