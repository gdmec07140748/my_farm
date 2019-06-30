<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:18
 */
namespace co\src\coki\route;

use co\src\coki\route\inter\IParam;
use co\src\coki\route\inter\ToolParam;
use co\src\coki\tool\ClassPath;

/**
 * 接收路由参数
 * Class ParamArray
 * @package co\src\coki\route
 */
class ParamArray implements IParam, ToolParam
{
    public $handler;
    public $vars;

    /**
     * ParamArray constructor.
     * @param $handler
     * @param $vars
     */
    public function __construct($routeInfo)
    {
        $this->handler = $routeInfo[1];
        $this->vars = $routeInfo[2];
    }

    public function run()
    {
        $class = $this->handler[0];
        $method = $this->handler[1];
        $obj = new $class();
        $obj->$method;

    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function class_path(ClassPath $classPath)
    {
        $this->handler[0] = $classPath->controller($this->handler[0]);
    }
}