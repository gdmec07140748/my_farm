<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/28
 * Time: 21:45
 */
namespace Co\src\Coki\tool;

/**
 * 路径处理
 * Class ClassPath
 * @package Co\src\Coki\route
 */
class ClassPath
{
    public function controller($class)
    {
        return '\app\index\controller'.$class;
    }

}
}