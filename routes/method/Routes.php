<?php

namespace Routes\Method;

class Routes
{

    public static function rule($pattern, $route, $handler, $requestUri)
    {
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
