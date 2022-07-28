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
        <nav>
            <ul class="navigation" id="">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="/about">About Us</a>
                </li>
                <li>
                    <a href="/contact">Contact Us</a>
                </li>
            </ul>
        </nav>

   <ul>
    
    <?php foreach($colletion as $data): ?>
        <li><?= $data['title'] ?></li>
    <?php endforeach; ?>
   </ul>
</body>
</html>