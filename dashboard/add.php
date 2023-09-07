
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="_add.php" method="POST" enctype="multipart/form-data">
    <label for="name">name of product</label>
      <input type="text" id="name" name="name" placeholder="Enter your product name" required>
        <br>
      <label for="price">price</label>
      <input type="price" id="price" name="price" placeholder="Enter your product's price" required>
      <br>
      <label for="description">description</label>
      <input type="description" id="description" name="description" placeholder="Enter your description" required>
      <br>
      Select image to upload:
        <input type="file" name="image" id="image">
      <br>
      <label for="categroy">Select categries:</label>
        <select id="categroy" name="categroy">
        <option value="mobile">mobile</option>
        <option value="t-shirts">t-shirts</option>
        <option value="cars">cars</option>
        </select>
        <br>
        <button type="supmit" onclick="showAlert()">Add</button>

            <script>
            function showAlert() {
                alert("the data was added");
            }
            </script>
    </form>
</body>
</html>