<?php

namespace App\Core;

class App {

    protected $controller = 'Home';

    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        $controller = ucfirst($url[0]);
        
        if(file_exists('../app/controllers/' . $controller . '.php'))
        {
            $this->controller = $controller;
            unset($url[0]);
        }

        $controllerClassName = '\\App\\Controllers\\' . $this->controller;

        if(is_subclass_of($controllerClassName, '\App\Core\Controller'))
        {
            $this->controller = new $controllerClassName;
        }

        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseUrl()
    {
        if(isset($_GET['url'])) {
            return $url = explode('/', filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}