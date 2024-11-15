<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale-1">
  <title>Menu Admin Page</title>
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
        <h3>Dashboard</h3>
        <div class="box">
          <table border = "1" cellspacing="0" class="table">
            <h4>My Profile</h4><br>
              <?php
                include('dbconn.php');

                $sql = "SELECT * FROM admin";
                $result = $connect->query($sql);

                if ($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    echo "<tr><th>Admin Name</th><td><center>".$row['AdminFName']." ".$row['AdminLName']."</center></td></tr>";
                    echo "<tr><th>Email</th><td><center>".$row['AdminEmail']."</center></td></tr>";
                    echo "<tr><th>Contact Number</th><td><center>".$row['AdminContactNo']."</center></td></tr>";
                  }
                  echo "</table>";
                  include('cust-order.php');
                } 

                else 
                  echo "0 results";
              ?>
        </div>
      </div>
    </div>
</body>
</html>