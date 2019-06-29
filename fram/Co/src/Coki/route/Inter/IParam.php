<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:23
 */

namespace Co\src\Coki\route\inter;


use Co\src\Coki\tool\ClassPath;

interface IParam
{
    public function run();

    public function next();

}