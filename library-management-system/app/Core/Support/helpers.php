<?php
use Core\Security\Csrf;

function view(string $template, array $data = [])
{
    extract($data, EXTR_SKIP);
    $csrf_token = Csrf::token();
    $path = BASE_PATH . '/resources/views/' . $template . '.php';
    if (!file_exists($path)) {
        http_response_code(500);
        return "View not found: {$template}";
    }
    ob_start();
    include $path;
    return ob_get_clean();
}

function asset(string $path): string
{
    return '/'.$path;
}

function redirect(string $to)
{
    header('Location: ' . $to);
    exit;
}
