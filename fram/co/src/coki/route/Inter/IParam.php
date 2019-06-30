<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:23
 */

namespace co\src\coki\route\inter;


use co\src\coki\tool\ClassPath;

interface IParam
{
    public function run();

    public function next();

}