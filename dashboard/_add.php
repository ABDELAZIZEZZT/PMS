<?php
require ("../oop/validation.php");
$val=new validation;
$name=$_POST["name"];
$price=$_POST["price"];
$image=$_POST["image"];
$description=$_POST["description"];
$categroy=$_POST["categroy"];

$categroy_id=$val->getData("`categories`","id"," name='$categroy'",false);

$categroy_id_=$categroy_id['id'];





$val->insertData("products","name , price , image ,description,categroy_id","'$name','$price','$image','$description','$categroy_id_'" );

 header("location:dashboard.php");
