<?php 

$builder = require 'core/bootstrap.php';

$colletion = $builder->selectAll('todos');

$routes = new Router;

require 'route.php';

$url = trim($_SERVER['REQUEST_URI'],'/');


require $routes->load($url);