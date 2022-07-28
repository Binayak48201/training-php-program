<?php

class Router
{
    protected $url;

    public function define($route)
    {
        $this->url = $route;
    }

    public function load($request)
    {

        if(array_key_exists($request,$this->url)){
            return $this->url[$request];
        }
         throw new Exception('No Route Found');

    }
}