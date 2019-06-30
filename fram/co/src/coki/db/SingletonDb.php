<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/30
 * Time: 22:35
 */

namespace co\src\coki\db;


class SingletonDb
{
    /**
     * @var Connect
     */
    private static $instance;

    /**
     * 通过懒加载获得实例（在第一次使用的时候创建）
     */
    public static function getInstance(): Connect
    {
        if (null === static::$instance) {
//            static::$instance = new Connect();
        }

        return static::$instance;
    }

    /**
     * 不允许从外部调用以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
     */
    private function __construct()
    {
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化（这将创建它的副本）
     */
    private function __wakeup()
    {
    }

}