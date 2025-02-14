<?php 
    require_once "vendor/autoload.php";
    use Bramus\Router\Router;
    use App\Controllers\UserController;
    $router = new Router();

    $router->get('/', UserController::class . "@index");

    $router->run();

?>