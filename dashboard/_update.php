<?php
require ("../oop/validation.php");
$val=new validation;
$id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];

$stock=$_POST["stock"];
$description=$_POST["description"];
$categroy=$_POST["categroy"];

$categroy_id=$val->getData("`categories`","id"," name='$categroy'",false);

$categroy_id_=$categroy_id['id'];


$condetion="id=$id";
$data=array("name"=>$name,"price"=>$price,"description"=>$description,"stock"=>$stock,"categroy_id"=>$categroy_id_);

$val->updateData("products",$data,$condetion);

 header("location:dashboard.php");  