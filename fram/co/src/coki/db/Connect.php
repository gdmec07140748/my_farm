<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/29
 * Time: 22:08
 */

namespace co\src\coki\db;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

/**
 * 数据库连接类
 * Class Connect
 * @package co\src\coki\db
 */
class Connect
{
    public function getConn(Capsule $capsule, DbFiled $dbFiled)
    {
        $capsule->addConnection([
            'driver'    => $dbFiled->driver,
            'host'      => $dbFiled->host,
            'database'  => $dbFiled->database,
            'username'  => $dbFiled->username,
            'password'  => $dbFiled->password,
            'charset'   => $dbFiled->charset,
            'collation' => $dbFiled->collation,
            'prefix'    => $dbFiled->prefix,
        ]);
        $capsule->setEventDispatcher(new Dispatcher(new Container));

        $capsule->setAsGlobal();

        $capsule->bootEloquent();

    }



}