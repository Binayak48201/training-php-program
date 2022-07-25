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
    <?php foreach($colletion as $key => $myself): ?>
        <!-- <li><?= ucfirst($key) . ' : ' . $myself; ?></li> -->
        <li><?=  "$key : $myself" ?></li>
    <?php endforeach; ?>
   </ul>
        <br>

   <ul>
    <li>
        <?php echo $colletion['task'] ? 'Completed' : 'Incomplete'; ?>

        <?php if($colletion['task']): ?>
            <span>Complete</span>
        <?php else: ?>
            <span>Incompleted</span>
        <?php endif; ?>
    </li>
   </ul>
</body>
</html>