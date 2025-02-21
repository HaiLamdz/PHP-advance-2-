<?php

require_once 'vendor/autoload.php';

use Bramus\Router\Router;
use App\Controllers\UserController;
use App\Controllers\CategoryController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

const ROOT_PATH = __DIR__;

$router = new Router();


$router->mount('/user', function() use ($router) {
    $router->get('/', UserController::class . '@index');
    $router->get('/add', UserController::class . '@add');
    $router->post('/add', UserController::class . '@addPost');
    $router->get('/update/{id}', UserController::class . '@show');
    $router->post('/update/{id}', UserController::class . '@updatePost');
    $router->get('/delete/{id}', UserController::class . '@delete');
});

$router->mount('/categories', function() use ($router) {
    $router->get('/', CategoryController::class . '@index');
    $router->get('/add', CategoryController::class . '@add');
    $router->post('/add', CategoryController::class . '@addPost');
    $router->get('/update/{id}', CategoryController::class . '@show');
    $router->post('/update/{id}', CategoryController::class . '@updatePost');
    $router->get('/delete/{id}', CategoryController::class . '@delete');
});


$router->run();



?>