<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/30
 * Time: 22:41
 */

namespace co\src\coki\route;


use Auryn\Injector;

/**
 *  获取注入类单例
 * Class SingletonInjector
 * @package co\src\coki\route
 */
class SingletonInjector
{
    /**
     * @var Injector
     */
    private static $instance;

    /**
     * 通过懒加载获得实例（在第一次使用的时候创建）
     */
    public static function getInstance(): Injector
    {
        if (null === static::$instance) {
            static::$instance = new Injector();
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