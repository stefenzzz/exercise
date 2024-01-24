<?php
declare(strict_types = 1);


require_once dirname(__DIR__) . '/vendor/autoload.php';


use App\Router;
use App\Controllers\{BookController,HomeController};


$router = new Router();

$router->get('/skills-training-3/public/home',[HomeController::class,'index'])
        ->get('/skills-training-3/public/book',[BookController::class,'index'])
        ->post('/skills-training-3/public/home',[HomeController::class,'store']);


echo $router->resolve($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);
