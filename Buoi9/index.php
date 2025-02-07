<?php
include "vendor/autoload.php";

use App\Controllers\CategoryController;
use Bramus\Router\Router;

$router = new Router();

// Định nghĩa router
$router->get("/", function(){
    echo "Home";
});


$router->get('/product/{id}', function($id) {
    echo "Sản phẩm có id:  $id";
});

// status code:
// 2xx: load trang thành công
// 3xx: lỗi chuyển trang
// 4xx: lỗi client
// 5xx: lỗi server
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');// đổi status code 
    echo '404 - Không tìm thấy trang!';
});

// $router->get("/admin", function(){
//     echo "Xin chào admin";
// });
// // middleware
// $router->before('GET|POST', '/admin', function() {
//     $isAdmin = false;
//     if(!$isAdmin){
//         header('HTTP/1.1 403 Forbidden');
//         echo 'Bạn không có quyền truy cập!';
//         exit();
//     }
// });

// Gom nhóm router
$router->mount('/admin', function() use ($router) {
    $router->get('/cart', function() {
        echo "Giỏ Hàng";
    });

    $router->get('/order', function() {
        echo "Dơn Hàng";
    });

    $router->mount('/category', function() use ($router) {
        $router->get('/', CategoryController::class . '@index');
        $router->get('/add-category', CategoryController::class . '@add');
        $router->get('/update-category', CategoryController::class . '@update');
        $router->get('/detele-category', CategoryController::class . '@delete');
    });
});





$router->run();


?>