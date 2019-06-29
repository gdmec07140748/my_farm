<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/5/31
 * Time: 21:53
 */

// 根目录
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__FILE__).'/..');
}

//框架目录
if (!defined('FR_PATH')) {
    define('FR_PATH', ROOT_PATH.'/fram');
}


require_once FR_PATH.'/vendor/autoload.php';
require_once ROOT_PATH.'/vendor/autoload.php';

require_once ROOT_PATH.'/config/routes.php';






