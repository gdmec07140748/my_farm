<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/1
 * Time: 9:27
 */

//$dispatcher = new \FastRoute\simpleDispatcher();
include_once 'common.php';

$dispatcher = FastRoute\simpleDispatcher(
    function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/users', 'handle');
        // {id} must be a number (\d+)
        $r->addRoute(['GET', 'POST'], '/index/{id:\d+}',['Index', 'index']);

        $r->addRoute(['GET', 'POST'], '/user/{id:\d+}',['User', 'index']);
        // The /{title} suffix is optional
        $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
    }
);

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// 去除查询字符串(?foo=bar)和解码URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// http://demo.myfram.com/user/1
// array(3) { [0]=> int(1) [1]=> array(2) { [0]=> string(20) "app\index\controller" [1]=> string(5) "index" } [2]=> array(1) { ["id"]=> string(1) "1" } }
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
//var_dump($routeInfo);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '... 404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '... 405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        run(add_controller_prefix($handler[0]), $handler[1]);
        break;
}

