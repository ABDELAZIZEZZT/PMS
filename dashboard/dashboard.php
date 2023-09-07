
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    session_start();
    require "../oop/validation.php";
    $id=$_SESSION["id"]; 
    $val = new validation;
    $user = $val->getData(table:"users",condition:" id = $id");
    if($user[0]["role"]=="admin"):

    ?>
        <form action="add.php" method="POST" >
        as Admin you can add products ,update products and delet 
        <input type="submit" value="Add" name="Add">
        </form>
   <?php endif ?>
   <?php
   $products=$val->getData("products");
   foreach ($products as $product ) {
    foreach ($product as $Key=>$value ) {
   if($Key=="id")continue;
   else
  echo "$Key :"."$value"."<br>";}
    ?>
    <?php  if($user[0]["role"]=="admin"): ?>

     <form action="update.php" method="POST" >
     <input type="submit" value="Update" name="Update">
     <input type="hidden" name="id" value = "<?php echo $product["id"]?>" >
     </form>

     <form action="delet.php" method="POST" >
     <input type="submit" value="Delet" name="delet">
     <input type="hidden" name="id" value = "<?php echo $product["id"]?>" >
     </form>

    <?php endif ?>
<?php

echo"////////////<br>";
   } 
   ?>


     
</body>
</html>

   
    


   
