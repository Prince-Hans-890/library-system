<?php
// Front Controller
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));

autoload(BASE_PATH . '/app');

use Core\Http\Request;
use Core\Http\Response;
use Core\Routing\Router;

session_start();

require BASE_PATH . '/app/bootstrap.php';

$request = Request::capture();

$router = require BASE_PATH . '/routes/web.php';

$response = $router->dispatch($request);

if ($response instanceof Response) {
    $response->send();
} else {
    header('Content-Type: text/html; charset=utf-8');
    echo (string)$response;
}

function autoload($root)
{
    spl_autoload_register(function ($class) use ($root) {
        $prefixes = [
            'Core' => $root . '/Core',
            'Controllers' => $root . '/Controllers',
            'Models' => $root . '/Models',
            'Middleware' => $root . '/Middleware',
            'Services' => $root . '/Services',
        ];
        foreach ($prefixes as $prefix => $dir) {
            $len = strlen($prefix . '\\');
            if (strncmp($class, $prefix . '\\', $len) !== 0) {
                continue;
            }
            $relative = substr($class, $len);
            $file = $dir . '/' . str_replace('\\', '/', $relative) . '.php';
            if (file_exists($file)) {
                require $file;
                return;
            }
        }
    });
}
