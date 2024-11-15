<?php
  include('dbconn.php');

  $UserID = $_REQUEST['id'];

  $sql= "SELECT * FROM cust_order where UserID = '".$UserID."'";
  $result = $connect->query($sql);

  if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc())
    {
      $UserID = $row['UserID'];
      $OrderID = $row['OrderID'];
      $OrderDate = $row['OrderDate'];
      $OrderTime = $row['OrderTime'];
      $OrderStatus = $row['OrderStatus'];
    }
  ?>

    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale-1">
    <title>Update Status</title>
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
          <h3>Update Status</h3>
          <div class="box">
            <form action="status-data.php" method="POST">
              User ID:<input type="text" name="UserID" class = "input-control" value = "<?php echo $UserID; ?>">
              Order ID:<input type="text" name="OrderID" class = "input-control"value = "<?php echo $OrderID; ?>">
              Order Date:<input type="text" name="OrderDate" class = "input-control" value = "<?php echo $OrderDate; ?>">
              Order Time:<input type="text" name="OrderTime" class = "input-control"value = "<?php echo $OrderTime; ?>">
              Order Status:

                  <input type="radio" name="OrderStatus" value = "Pending"
                  <?php 
                  if($OrderStatus == 'Pending'){
                    echo "checked";
                  }
                  ?>> Pending

                  <input type="radio" name="OrderStatus" value="Preparing"
                  <?php 
                  if($OrderStatus == 'Preparing'){
                    echo "checked";
                  }
                  ?>> Preparing 

                  <input type="radio" name="OrderStatus" value="Delivery"
                  <?php 
                  if($OrderStatus == 'Delivery'){
                    echo "checked";
                  }
                  ?>> Delivery

                  <input type="radio" name="OrderStatus" value="Completed"
                  <?php 
                  if($OrderStatus == 'Completed'){
                    echo "checked";
                  }
                  ?>> Completed

              <center><input class = "btn" type = "submit" name = "submit" value = "Update"></center>
            </form >
          </div>
        </div>
      </div>
    <?php 
  }
    
  else {
    echo "0 results";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=menuAdmin.php\">";
  }
?>
</body>
</html>