<?php
namespace Core\Routing;

use Core\Http\Request;
use Core\Http\Response;

class Router
{
    private array $routes = [];

    public function get(string $path, callable|array $action): self
    {
        $this->routes['GET'][$path] = $action;
        return $this;
    }

    public function post(string $path, callable|array $action): self
    {
        $this->routes['POST'][$path] = $action;
        return $this;
    }

    public function any(string $path, callable|array $action): self
    {
        foreach (['GET', 'POST', 'PUT', 'DELETE', 'PATCH'] as $m) {
            $this->routes[$m][$path] = $action;
        }
        return $this;
    }

    public function dispatch(Request $request)
    {
        $method = $request->method;
        $path = rtrim($request->uri, '/') ?: '/';
        $action = $this->routes[$method][$path] ?? null;
        if (!$action) {
            return new Response('<h1>404 Not Found</h1>', 404);
        }
        if (is_array($action)) {
            [$class, $method] = $action;
            $controller = new $class();
            return call_user_func([$controller, $method], $request);
        }
        return call_user_func($action, $request);
    }
}
