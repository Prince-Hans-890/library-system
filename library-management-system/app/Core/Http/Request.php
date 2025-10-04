<?php
namespace Core\Http;

class Request
{
    public array $get;
    public array $post;
    public array $files;
    public array $server;
    public array $cookies;
    public array $headers;
    public string $method;
    public string $uri;

    public static function capture(): self
    {
        $r = new self();
        $r->get = $_GET;
        $r->post = $_POST;
        $r->files = $_FILES;
        $r->server = $_SERVER;
        $r->cookies = $_COOKIE;
        $r->headers = function_exists('getallheaders') ? (getallheaders() ?: []) : [];
        $r->method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
        $r->uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        return $r;
    }

    public function input(string $key, $default = null)
    {
        return $this->post[$key] ?? $this->get[$key] ?? $default;
    }
}
