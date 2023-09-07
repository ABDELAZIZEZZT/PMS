<?php
require "../oop/validation.php";
$val= new validation;
 $products=$val->getData("products");
 
 foreach ($products as $product ) :
  foreach ($product as $Key=>$value ) :
 if($Key=="id"&&$value==$_POST["id"]): ?>
 <form action="_update.php" method="POST" enctype="multipart/form-data">
    <label for="name">name of product</label>
      <input type="text" id="name" name="name" value="<?php echo $product["name"] ?>" placeholder="<?php echo $product["name"] ?>" required>
        <br>
      <label for="price">price</label>
      <input type="price" id="price" name="price" value="<?php echo $product["price"] ?>" placeholder="<?php echo $product["price"] ?>" required>
      <br>
      <label for="description">description</label>
      <input type="description" id="description" name="description" value="<?php echo $product["description"]?>" placeholder="<?php echo $product["description"] ?>" required>
     
      <br> 
      <label for="categroy">Select categries:</label>
        <select id="categroy" name="categroy">
        <option value="mobile">mobile</option>
        <option value="t-shirts">t-shirts</option>
        <option value="cars">cars</option>
        </select>
        <br>
        <label for="stock">stock</label>
      <input type="stock" id="stock" name="stock" placeholder="<?php echo $product["stock"] ?>" required>
      <br>
      <input type="hidden" id="id" name="id" value="<?php echo $product["id"] ?> " required>

        <button type="supmit" onclick="showAlert()">Update</button>

            <script>
            function showAlert() {
                alert("the data was updated");
            }
            </script>
    </form>
    <?php
    endif ;
endforeach ;
endforeach ;
?>

