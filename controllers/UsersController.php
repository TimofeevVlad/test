<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 28.08.2017
 * Time: 22:32
 */
class UsersController extends Controller
{
    public function actionIndex()
    {
        $data = Users::getListUsers();

        $this->view->generate($data);
    }
}