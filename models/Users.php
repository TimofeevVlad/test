<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 28.08.2017
 * Time: 21:53
 */
class Users extends Model
{

    public $id;
    public $name;
    public  $age;
    public  $city;

    public static function getListUsers()
    {
        $usersList = array();

        self::setDbConnection();

        $result = Model::$dbConnection->query('SELECT * FROM users');

        while ($row = $result->fetch()) {
            $users = new Users();
            $users->id = $row['id'];
            $users->name = $row['name'];
            $users->age = $row['age'];
            $users->city = self::getCity($row['city_id']);

            $usersList[] = $users;
        }
        return $usersList;
    }
    private function getCity($id) {

        self::setDbConnection();

        $result = Model::$dbConnection->prepare("SELECT * FROM cities WHERE id=:id");
        $result->execute(['id' => $id]);

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $userCity = $row['name'];
        return $userCity;
    }

    public static function createNewUser($_name, $_age, $_city_id)
    {
        self::setDbConnection();
        Model::$dbConnection->query("INSERT INTO users (name, age, city_id) VALUES ('$_name','$_age','$_city_id')");
    }
}