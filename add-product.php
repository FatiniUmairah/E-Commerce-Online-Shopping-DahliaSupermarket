<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale-1">
  <title>Add Data Page</title>
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
        <h3>Add Product</h3>
        <div class="box">
          <form action="" method="POST">
            Product ID: <input type = "text" name = "productID" class = "input-control" required>
            Manufacture ID: <input type = "text" name = "manufactureID" class = "input-control" required>
            Product Name: <input type = "text" name = "productName" class = "input-control" required>
            Product Category: <input type = "text" name = "category" class = "input-control" required>
            Product Price: <input type = "text" name = "price" class = "input-control" required>
            Product Brand: <input type = "text" name = "brand" class = "input-control" required>
            Product In Stock: <input type = "text" name = "instock" class = "input-control" required>
            Product Image: <input type = "file" name = "img" class = "input-control" required>
            <center><input class = "btn" type = "submit" name = "submit" value = "Add Product">
            <input class = "btn" type = "reset" name = "clear" value = "Clear"></center>
          </form >
        </div>
      </div>
    </div>
</body>
</html>

<?php
  session_start();
  include ("dbconn.php");

  if(isset($_POST['submit'])){
    $prod_id = $_POST['productID'];
    $manu_id = $_POST['manufactureID'];
    $prod_name = $_POST['productName'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $instock = $_POST['instock'];
    $img = $_POST['img'];

    $sql = "INSERT INTO `product` (`ProductID`,`ManufactureID`,`ProductName`,`ProductCategory`,`ProductPrice`,`ProductBrand`,`ProductInStock`, `ProductImg`) VALUES ('".$prod_id."','".$manu_id."','".$prod_name."','".$category."','".$price."','".$brand."','".$instock."','".$img."')";

    $result = $connect->query($sql);

    if ($result === TRUE){
      echo '<script>alert("Data has been added!")</script>';
      echo "<meta http-equiv=\"refresh\" content=\"0;URL=product.php\">";
    }

    else 
      echo "<p style='text-align:center'>Error: " . $sql . "<br>" . $connect->error;
        
    $connect->close();
  }
?>

