<?php

    include 'vendor/autoload.php';
    use App\Controllers\UserController;

    $user = new UserController();
    $user->log();