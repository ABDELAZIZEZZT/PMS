<?php 
if(isset($_POST["Add"])){
    header ("location:add.php");

}else if(isset($_POST["Update"])){
    var_dump($_POST);
    // header("location:update.php");
}
else{
    echo "Delet";
}

?>

