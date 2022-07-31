<!DOCTYPE html>   
<html lang="en">
<head>
    <title>PHP</title>
    <style>
    h1{
          background-color: #efefef;  
          padding: 3rem;
          text-align: center;
    }
    nav{
        background-color: #c4c4c4a6;
    }
    .navigation{
        display: flex;
    }
    .navigation > li{
        margin: 0px 17px;
        list-style: none;
        padding: 14px;
    }
    .navigation > li > a{
       text-decoration: none;
       font-size: 17px;
    color: black;
    }
    .navigation > li > a:hover{
    color: red;
    }
</style>
</head>
<body>
    <?= require 'views/partial/_nav.php' ?>
   <ul>
    
    <?php foreach($colletion as $data): ?>
        <li><?= $data['title'] ?></li>
    <?php endforeach; ?>
   </ul>
</body>
</html>