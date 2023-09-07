<?php
require "../oop/validation.php";
$val= new validation;
$id=$_POST["id"];

$data=$val->deleteData("products","id=$id");

 header("location:dashboard.php");  