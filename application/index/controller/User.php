<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/21
 * Time: 23:47
 */
namespace  app\index\controller;

use app\index\model\UserModel;

class User extends Base
{
    public $userModel;
    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function index()
    {
        return $this->userModel->index();
//        return 'index';
    }

}