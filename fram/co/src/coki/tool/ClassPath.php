<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:45
 */
namespace co\src\coki\tool;

/**
 * 路径处理
 * Class ClassPath
 * @package co\src\coki\route
 */
class ClassPath
{
    public function controller($class)
    {
        return '\app\index\controller'.$class;
    }

}