<?php

namespace Farzanegan;

class Route
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($path) 
    {
        $routes = new static();

        require $path;

        return $routes;
    }

    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url, $controller) 
    {
        $this->routes['POST'][$url] = $controller;
    }

    public function direct($uri, $method)
    {
        if (!$this->routes[$method][$uri]) {
            throw new \Exception("{$uri} doesn't exists in our routes");
        }

        $this->callAction(
      ...explode("@", $this->routes[$method][$uri])
    );
    }

    public function callAction($controller, $method)
    {
      $c = "Blog\\Controllers\\" . $controller;

      $controller = new $c;

      $controller->$method();
    }
}