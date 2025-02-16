<?php

namespace Routes\Method;

use Routes\Method\Routes;

class Get extends Routes
{
    private static array $routes = [];
    public static function route(string $url, array $action)
    {
        self::$routes['GET'][$url] = $action;
    }

    public static function dispatch()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $HttpMethod = $_SERVER['REQUEST_METHOD'];

        // pattern for url with parameters
        $pattern = '/\{([^}]*)\}/';
        foreach (self::$routes[$HttpMethod] as $route => $handler) {
            self::rule($pattern, $route, $handler, $requestUri);
        }
    }
}
