<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:53
 */

namespace co\src\coki\route\inter;


use co\src\coki\tool\ClassPath;

interface ToolParam
{
    public function class_path(ClassPath $classPath);

}