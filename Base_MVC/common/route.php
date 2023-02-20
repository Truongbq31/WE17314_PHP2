<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});

//Start

$router->get('product', [App\Controllers\ProductsController::class, 'index']);
$router->get('del_prd', [App\Controllers\ProductsController::class, 'delete']);
$router->get('add-prd', [App\Controllers\ProductsController::class, 'addProduct']);
$router->post('post-product',[App\Controllers\ProductsController::class, 'postProduct']);
//Tạo route edit prd
$router->get('edit-prd/{id}', [App\Controllers\ProductsController::class, 'editProduct']);
$router->post('edit-post-product/{id}',[App\Controllers\ProductsController::class, 'postEditProduct']);


$router->get('customer', [App\Controllers\CustomersController::class, 'index']);




//Khu vực cần quan tâm
//End

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>