<?php
use Core\Routing\Router;
use Controllers\HomeController;
use Controllers\BookController;

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [HomeController::class, 'login']);
$router->get('/register', [HomeController::class, 'register']);
$router->get('/catalog', [BookController::class, 'catalog']);

return $router;
