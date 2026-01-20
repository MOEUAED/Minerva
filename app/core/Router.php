<?php

class Router
{
    public $routes = [
    ];

    public function get($path, $action)
    {
        $this->routes['GET'][$path] = $action;
    }

    public function post($path, $action)
    {
        $this->routes['POST'][$path] = $action;
    }

    public function dispatch()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $methode = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$methode][$path])) {
            $action = $this->routes[$methode][$path];

            if (is_array($action)) {
                $controller = $action[0];
                $methodName = $action[1];

                require_once __DIR__ . '/../controllers/' . $controller . '.php';
                $controllerInstance = new $controller();
                $controllerInstance->$methodName();
            } else {
                require_once __DIR__.'/views/'.$action.'.php';
            }
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }

    }

}
