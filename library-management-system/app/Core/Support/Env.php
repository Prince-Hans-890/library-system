<?php
namespace Core\Support;

class Env
{
    public static function load(string $path): void
    {
        if (!is_file($path)) {
            return;
        }
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) continue;
            [$k, $v] = array_pad(explode('=', $line, 2), 2, '');
            $k = trim($k);
            $v = trim($v);
            if ($k === '') continue;
            $_ENV[$k] = $v;
            putenv("$k=$v");
        }
    }

    public static function get(string $key, $default = null)
    {
        $val = $_ENV[$key] ?? getenv($key);
        return $val !== false && $val !== null ? $val : $default;
    }
}
