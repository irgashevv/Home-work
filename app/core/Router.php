<?php

namespace App\core;

use PDOException;

class Router
{
    /**
     * Here will be stored our list of routes
     * They will be in 2 arrays, GET and POST
     *
     * @var array|array[]
     */
    public array $routes = [
        'GET'  => [],
        'POST' => []
    ];

    /**
     * This method create an instance of this(self) class
     * require file(routes list)
     * and returns its instance
     *
     * @param $file
     * @return Router
     */
    public static function load($file): Router
    {
        $router = new static();

        require $file;

        return $router;
    }

    /**
     * This method define(store) the url in routes array on GET key
     * and set his controller
     *
     * @param $url
     * @param $controller
     * @return void
     */
    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }

    /**
     * This method define(store) the url in routes array on POST key
     * and set his controller
     *
     * @param $url
     * @param $controller
     * @return void
     */
    public function post($url, $controller)
    {
        $this->routes['POST'][$url] = $controller;
    }

    /**
     * This method check, if url exists on our array
     * and if it exists, this method will return its value(controller)
     */
    public function direct($url, $requestType)
    {
        if (array_key_exists($url, $this->routes[$requestType])) {
            return $this->routes[$requestType][$url];
        }

        throw new PDOException('Route not defined');
    }
}