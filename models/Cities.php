<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.08.2017
 * Time: 8:42
 */
class Cities extends Model
{
    public $id;
    public $name;

    public static function getListCities()
    {
        $citiesList = array();

        self::setDbConnection();

        $result = Model::$dbConnection->query('SELECT * FROM cities');

        while ($row = $result->fetch()) {
            $cities = new Cities();
            $cities->id = $row['id'];
            $cities->name = $row['name'];

            $citiesList[] = $cities;
        }
        return $citiesList;
    }
}