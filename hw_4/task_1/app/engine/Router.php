<?php

final class Router
{
    private static array $routes;
    private static array $params;
    private static array $args = [];

    private static function loadRoutes($routes)
    {
        $arr = require_once dirname(__DIR__) . '/config/' . $routes;
        foreach ($arr as $key => $value) {
            self::add($key, $value);
        }
    }

    private static function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        self::$routes[$route] = $params;
    }

    private static function getParams($url)
    {
        $url = explode('/', $url);
        $arr = array_slice($url, 2, count($url) -2);
        foreach ($arr as $key => $value) {
            if ($key % 2 === 0) {
                self::$args[$value] = $arr[$key + 1];
            }
        }
    }

    private static function match() : bool
    {
        $url = $_SERVER['REQUEST_URI'];
        self::getParams($url);
        $url = explode('/', $url);
        $url = array_slice($url, 0, 2);
        $url = implode('/', $url);
        foreach (self::$routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                self::$params = $params;
                return true;
            }
        }
        return false;
    }

    public static function run($routes)
    {
        self::loadRoutes($routes);
        if (self::match()) {
            $modelName = ucfirst(self::$params['controller']);
            $controllerName = ucfirst(self::$params['controller']) . 'Controller';
            $actionName = self::$params['action'];

            $modelFile = dirname(__DIR__) . '/models/' . $modelName . '.php';
            if (file_exists($modelFile)) {
                require_once $modelFile;
            }

            $controllerFile = dirname(__DIR__) . '/controllers/' . $controllerName . '.php';
            if (file_exists($controllerFile)) {
                require_once $controllerFile;
            } else {
                header('location: /');
            }

            $controller = new $controllerName();
            if (method_exists($controller, self::$params['action'])) {
                if (empty(self::$args)) {
                    $controller->$actionName();
                } else {
                    $controller->$actionName(self::$args);
                }

            } else {
                header('location: /');
            }
        } else {
            header('location: /');
        }
    }
}
