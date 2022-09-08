<?php

namespace App;

class Router
{
    private const METHOD_GET = 'GET';
    private const METHOD_POST = 'POST';
    private static $handlers = [];

    /**
     * Method to define a get route
     */
    public static function get($path, $handler)
    {
        self::addHandler(self::METHOD_GET, $path, $handler);
        self::run();
    }

    /**
     * Method to define a post route
     */
    public static function post($path, $handler) 
    {
        self::addHandler(self::METHOD_POST, $path, $handler);
        self::run();
    }

    /**
     * Method to define a delete route
     */
    public static function delete($path, $handler)
    {
        self::post($path, $handler);
    }

    /**
     * Method to add a new route
     */
    private static function addHandler($method, $path, $handler)
    {
        self::$handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ]; 
    }

    /**
     * Method to compare the requested route with the defined routes
     * and to execute the corresponding function to a rotue if it does exist
     */
    private static function run()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method = $_SERVER['REQUEST_METHOD'];
        foreach (self::$handlers as $handler) {
            if (
                $handler['path'] === $requestPath &&
                $handler['method'] === $method
            ) {
                call_user_func($handler['handler']);
            }
        }
    }
} 
