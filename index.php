<?php
require_once "vendor/autoload.php";
//use App\Models\User;
//use App\Models\Category;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

//$User=new User();
//$User->greet();
//echo "<hr>";
//$Category=new Category();
//$Category->greet();
//echo "<hr>";

$parser =new  RouteParser();
$router = new RouteCollector($parser);
//$router->get('/', function (){
//    echo "home";
//});
//$router->get('/', function (){
//    echo "about";
//});

$router->controller('/',\App\controller\HomeController::class);
$router->post('/login', \App\controller\HomeController::class);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
} catch (Exception $e) {
    echo $e->getMessage();
}
echo $response;




