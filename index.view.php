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
</style>
</head>
<body>
   <ul>
    
    <?php foreach($colletion as $data): ?>
        <li><?= $data['title'] ?></li>
    <?php endforeach; ?>
   </ul>
</body>
</html>