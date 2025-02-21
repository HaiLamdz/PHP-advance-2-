<?php
session_start();
require_once "vendor/autoload.php";

use Bramus\Router\Router;
use App\Controllers\UserController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

const ROOT_PATH = __DIR__;

$router = new Router();

// CRUD user
$router->mount('/user', function () use ($router) {
    $router->get('/', UserController::class . '@index');
    $router->get('/add-user', UserController::class . '@insert');
    $router->post('/add-user', UserController::class . '@insertPost');
    $router->get('/update-user/{id}', UserController::class . '@update');
    $router->post('/update-user/{id}', UserController::class . '@updatePost');
    $router->get('/delete/{id}', UserController::class . '@delete');
});





$router->run();
