<?php
use Core\Security\Csrf;
use Core\Support\Config;
use Core\Support\Env;

require_once BASE_PATH . '/app/Core/Support/helpers.php';

Env::load(BASE_PATH . '/.env');

Config::set('app', [
    'name' => 'College Library System',
    'env' => Env::get('APP_ENV', 'local'),
    'debug' => Env::get('APP_DEBUG', true),
    'url' => Env::get('APP_URL', 'http://localhost:8000'),
    'key' => Env::get('APP_KEY', 'dev-key-change-me'),
]);

Csrf::init();
