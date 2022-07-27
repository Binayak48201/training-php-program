<?php 

$builder = require 'bootstrap.php';

$colletion = $builder->selectAll('todos');

require 'index.view.php';






// print_r
// var_dump()