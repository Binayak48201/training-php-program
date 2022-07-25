<?php 
require 'dumper.php';

require 'database/Connection.php';

$pdo = Connection::make();


$query = $pdo->prepare("select * from todos");
$query->execute();
$collection = $query->fetchAll();
dd($collection);

$colletion = [
    'age' => 27,
    'haircolor' => 'black',
    'career' => 'web developer',
    'task' => true
];

$colletion['name'] = 'Binayak';

dd($colletion);

require 'index.view.php';

// print_r
// var_dump()