<?php

namespace App\core;

class Request
{
    /**
     * This method return only URL_PATH of request, and clear / characters
     *
     * @return string
     */
    public static function url(): string
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    /**
     * This method return only method of request (POST or GET etc.)
     *
     * @return mixed
     */
    public static function method(): mixed
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}