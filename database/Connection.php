<?php

class Connection
{
  public static function make()
  {
    $host     = "localhost";//Ip of database, in this case my host machine    
    $user     = "root";	//Username to use
    $pass     = "";//Password for that user
    $dbname   = "task";//Name of the database
    try {
      return new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    }catch(PDOException $e){
      echo $e->getMessage();                         
    }
  }
}
