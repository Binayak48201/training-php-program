<?php


// $routes->define([
//     '' => 'controller/HomeController.php',
//     'about' => 'controller/AboutController.php',
//     'contact' => 'controller/ContactController.php'
// ]);

$routes->get('','controller/HomeController.php');
$routes->get('about','controller/AboutController.php');
$routes->get('task','controller/ContactController.php');
$routes->post('names','controller/SubmitController.php');
