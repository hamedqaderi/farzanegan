<?php

namespace Farzanegan;

class Request
{
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function uri()
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

         return trim($url, '/');
    }
}