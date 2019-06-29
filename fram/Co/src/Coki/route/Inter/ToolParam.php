<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:53
 */

namespace Co\src\Coki\route\inter;


use Co\src\Coki\tool\ClassPath;

interface ToolParam
{
    public function class_path(ClassPath $classPath);

}