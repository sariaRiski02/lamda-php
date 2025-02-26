<?php

namespace Route\Method;

class Put
{
    private static array $routes = [];
    public static function route(string $url, array $action)
    {
        self::$routes['PUT'][$url] = $action;
    }

    public static function dispatch()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $HttpMethod = $_SERVER['REQUEST_METHOD'];

        // pattern for url with parameters
        $pattern = '/\{([^}]*)\}/';
        foreach (self::$routes[$HttpMethod] as $route => $handler) {

            // Replace route parameters with regex patterns
            $routePattern = preg_replace($pattern, '([^/]+)', $route);
            if (preg_match('#^' . $routePattern . '$#', $requestUri, $matches)) {
                array_shift($matches); // Remove the full match
                [$controller, $method] = $handler;
                $controllerInstance = new $controller();

                echo $controllerInstance->$method(...$matches);
                exit;
            }

            if ($requestUri == $route) {
                [$controller, $method] = $handler;
                $controllerInstance = new $controller();
                echo $controllerInstance->$method();
                exit;
            }
        }
    }
}
