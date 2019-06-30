<?php

use co\src\coki\route\SingletonInjector;


/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/29
 * Time: 22:02
 */

function run(string $index, string $fun)
{
    $injector = SingletonInjector::getInstance();
    $index = $injector->make($index);
    dump($index->$fun());
}

function add_controller_prefix(string $class)
{
    return '\app\index\controller\\'.$class;
}

function dump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
