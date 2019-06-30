<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/30
 * Time: 22:33
 */

namespace app\index\model;


use co\src\coki\route\SingletonInjector;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $injector = SingletonInjector::getInstance();
        $injector->execute('co\src\coki\db\Connect::getConn',[]);
    }

}