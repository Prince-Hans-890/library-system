<?php
namespace Core\Security;

class Csrf
{
    public static function init(): void
    {
        if (!isset($_SESSION['_csrf_token'])) {
            $_SESSION['_csrf_token'] = bin2hex(random_bytes(16));
        }
    }

    public static function token(): string
    {
        return $_SESSION['_csrf_token'] ?? '';
    }

    public static function verify(?string $token): bool
    {
        return hash_equals($_SESSION['_csrf_token'] ?? '', $token ?? '');
    }
}
