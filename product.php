<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale-1">
  <title>Product Page</title>
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
        <h3>Product Details</h3>
        <div class="box">
          <table border = "1" class="table">
            <thead>
              <tr>
                <th>Product ID</th>
                <th>Manufacture ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Total In Stock</th>
                <th>Product Image</th>
                <th colspan = "2" width="150px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include("dbconn.php");

                $sql = "SELECT * FROM product";
                $result = $connect->query($sql);

                if ($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['ProductID']."</td>";
                    echo "<td>".$row['ManufactureID']."</td>";
                    echo "<td>".$row['ProductName']."</td>";
                    echo "<td>".$row['ProductCategory']."</td>";
                    echo "<td>".$row['ProductPrice']."</td>";
                    echo "<td>".$row['ProductBrand']."</td>";
                    echo "<td>".$row['ProductInStock']."</td>";
                    echo "<td>".$row['ProductImg']."</td>";
              ?>
                    <td align="center"><a href="update-form.php?id=<?php echo $row["ProductID"]; ?>">UPDATE</a></td>
                    <td align="center"><a href="delete.php?id=<?php echo $row["ProductID"]; ?>">DELETE</a></td>

                  <?php
                    echo "</tr>";
                  }
                  echo "</table>";
                } 
                
                else {
                echo "0 results";
                }
              
                $connect->close();
                ?>
            </tbody>
        </div>
      </div>
    </div>
</body>
</html>

