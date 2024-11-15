<?php
  include('dbconn.php');

  $ProductID = $_REQUEST['id'];

  $sql= "SELECT * FROM product where ProductID = '".$ProductID."'";
  $result = $connect->query($sql);

  if ($result->num_rows > 0){
    //output data of each row
    while ($row = $result->fetch_assoc())
    {
      $ProductID = $row['ProductID'];
      $ManufactureID = $row['ManufactureID'];
      $ProductName = $row['ProductName'];
      $ProductCategory = $row['ProductCategory'];
      $ProductPrice = $row['ProductPrice'];
      $ProductBrand = $row['ProductBrand'];
      $ProductInStock = $row['ProductInStock'];
      $ProductImg = $row['ProductImg'];
    }
  ?>

    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale-1">
    <title>Update Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
      <!-- header -->
      <header>
        <div class="container">
          <a href="menuAdmin.php"><img src ="img/logo.png" width="150"></a>
          <ul>
            <li><a href="menuAdmin.php">Menu</a></li>
            <li><a href="product.php">Product Data</a></li>
            <li><a href="add-product.php">Add Product</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </header>

      <!-- content -->
      <div class="section">
        <div class="container">
          <h3>Update Product</h3>
          <div class="box">
            <form action="update-data.php" method="POST">
              Product ID:<input type="text" name="ProductID" class = "input-control" value = "<?php echo $ProductID; ?>">
              Manufacture ID:<input type="text" name="ManufactureID" class = "input-control"value = "<?php echo $ManufactureID; ?>">
              Product Name:<input type="text" name="ProductName" class = "input-control" value = "<?php echo $ProductName; ?>">
              Product Category:<input type="text" name="ProductCategory" class = "input-control"value = "<?php echo $ProductCategory; ?>">
              Product Price:<input type="text" name="ProductPrice" class = "input-control"value = "<?php echo $ProductPrice; ?>">
              Product Brand:<input type="text" name="ProductBrand" class = "input-control" value = "<?php echo $ProductBrand; ?>">
              Product In Stock:<input type="text" name="ProductInStock" class = "input-control" value = "<?php echo $ProductInStock; ?>">
              Product Image:<input type="file" name="ProductImg" class = "input-control" value = "<?php echo $ProductImg; ?>">
              <center><input class = "btn" type = "submit" name = "submit" value = "Update"></center>
            </form >
          </div>
        </div>
      </div>
    <?php 
  }
    
  else {
    echo "0 results";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=product.php\">";
  }
?>
</body>
</html>

