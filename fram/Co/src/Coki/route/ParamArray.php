<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:18
 */
namespace Co\src\Coki\route;

use Co\src\Coki\route\inter\IParam;
use Co\src\Coki\route\inter\ToolParam;
use Co\src\Coki\tool\ClassPath;

/**
 * 接收路由参数
 * Class ParamArray
 * @package Co\src\Coki\route
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