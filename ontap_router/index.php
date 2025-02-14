<?php
include "vendor/autoload.php";

use Bramus\Router\Router;
use App\Controllers\TodoListController;
session_start();

if(isset($_SESSION['task'])){
    $tasks = [
        ['id' => 1, 'task' => 'Học PHP cơ bản'],
        ['id' => 2, 'task' => 'Tìm hiểu về Bramus Router'],
        ['id' => 3, 'task' => 'Ôn lại cách tạo Controller'],
        ['id' => 4, 'task' => 'playgame']
    ];
    $_SESSION['tasks'] = $tasks;   
}
$router = new Router();
$router->mount('/todo', function () use ($router) {
    // $router->get('/add-todo', function() {
    //     echo "Dơn Hàng";
    // });
    $router->get('/list-todo', TodoListController::class . '@listTodo');
    $router->get('/add-todo', TodoListController::class . '@addTodo');
    $router->post('/add-todo', TodoListController::class . '@addPostTodo'); 
    $router->get('/update-todo/{id}', TodoListController::class . '@updateTodo');
    $router->post('/update-todo/{id}', TodoListController::class . '@updatePostTodo');
});



// Lưu biến $tasks vào session


// var_dump($router);
// exit();
$router->run();