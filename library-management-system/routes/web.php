<?php
use Core\Routing\Router;
use Controllers\HomeController;

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [HomeController::class, 'login']);
$router->get('/register', [HomeController::class, 'register']);

return $router;
