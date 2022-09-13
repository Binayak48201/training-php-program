<?php




class Router
{
    protected $url = [
        'GET' => [],
        'POST' => []
    ];

    public function get($url,$controller)
    {
        $this->url['GET'][$url] = $controller;
    }

    public function post($url,$controller)
    {
        $this->url['POST'][$url] = $controller;
    }

    public function define($route)
    {
        $this->url = $route;
    }

    public function load($request,$requestType)
    {
        if(array_key_exists($request,$this->url[$requestType])){
            return $this->url[$requestType][$request];
        }
         throw new Exception('No Route Found');

    }
}