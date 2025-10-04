<?php
namespace Core\Support;

class Config
{
    private static array $items = [];

    public static function set(string $key, array $value): void
    {
        self::$items[$key] = $value;
    }

    public static function get(string $key, $default = null)
    {
        return self::$items[$key] ?? $default;
    }
}
