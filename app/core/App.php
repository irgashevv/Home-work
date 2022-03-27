<?php

namespace App\core;

use Exception;

class App
{
    protected static array $registries = [];

    /**
     * This method store new dependency of our Project
     * in our container
     *
     * @param $key
     * @param $value
     * @return void
     */
    public static function bind($key, $value)
    {
        self::$registries[$key] = $value;
    }

    /**
     * This method returns our dependency from container
     *
     * @throws Exception
     */
    public static function get($key)
    {
        if (!array_key_exists($key, self::$registries)) {
            throw new Exception("Sorry, we don't have such dependency");
        }
        return self::$registries[$key];
    }
}