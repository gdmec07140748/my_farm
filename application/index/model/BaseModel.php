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
    /**
     * @var SingletonInjector
     */
    public static $instance;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if (null == static::$instance) {
            static::$instance = SingletonInjector::getInstance();
            // 有参数传法
            static::$instance->execute('co\src\coki\db\Connect::getConn',[]);
        }
    }

}