<?php

class Connection
{
  public static function make($config)
  {
    $host     = $config['host'];//Ip of database, in this case my host    
    $user     = $config['username'];	//Username to use
    $pass     = $config['password'];//Password for that user
    $dbname   = $config['dbname'];//Name of the database
    try {
      return new PDO("$host;dbname=$dbname", $user, $pass);
    }catch(PDOException $e){
      echo $e->getMessage();                         
    }
  }
}
