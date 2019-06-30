<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/30
 * Time: 22:32
 */

namespace app\index\model;
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class UserModel
 * @package app\index\model
 */
class UserModel extends BaseModel
{

    /**
     * @return mixed
     */
    public function index()
    {
       return $results = Capsule::select('select * from joy_card where id = ?', [1]);
    }

}