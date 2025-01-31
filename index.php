<?php

use App\Controller\IndexController;
use App\Routes\Router;

require './vendor/autoload.php';
session_start();

$router = new Router($_SERVER['REQUEST_URI']);



// routes 
$router->get('/', [IndexController::class, 'index']);
$router->get('/login',[IndexController::class, 'login']);
$router->get('/aboutus',[IndexController::class, 'aboutus']);
$router->get('/contactus',[IndexController::class, 'contactus']);
$router->get('/catalogue',[IndexController::class, 'catalogue']);
$router->get('/reservation',[IndexController::class, 'reservation']);
$router->get('/signup',[IndexController::class, 'signup']);



$router->run();
