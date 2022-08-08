<?php 

$builder = require 'core/bootstrap.php';
 
$routes = new Router;

require 'route.php';

$url = (new Request())->parse();



require $routes->load($url);