<?php   
  session_start();
  include("dbconn.php");

  if(isset($_POST['addOrder'])){

    $userid= $_SESSION['id'];
    $orderid= NULL;

    date_default_timezone_set('Asia/Kuala_Lumpur');
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $status = 'Pending';

    $sql = "INSERT INTO cust_order (OrderID,UserID,OrderDate,OrderTime,OrderStatus) VALUES ('".$orderid."','".$userid."','".$date."','".$time."','".$status."')";

    mysqli_query($connect, $sql) or die ("Error: " . mysqli_error($connect));
  }
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale-1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
  <header>
    <div class="container">
        <a href="homepage.php"><img src ="img/logo.png" width="150">
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li><a href="catalogue.php">Product Catalogue</a></li>
          <li><a href="catFruitVeg.php">Promotions</a></li>
          <li><a href="myaccount.php">My Account</a></li>
          <li><a href="addToCart.php">My Cart</a></li>
          <li><a href="myOrder.php">My Order</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
  </header>

  <!-- content -->
    <div class="section">
      <div class="container">
        <div class="box">
          <h3>My Order</h3>
          <table border = "1" class="table">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Order Time</th>
                <th>Order Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include("dbconn.php");
                $userid = $_SESSION['id'];

                $sql = "SELECT * FROM cust_order where UserID = '$userid'";
                $result = $connect->query($sql);

                if ($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['OrderID']."</td>";
                    echo "<td>".$row['OrderDate']."</td>";
                    echo "<td>".$row['OrderTime']."</td>";
                    echo "<td>".$row['OrderStatus']."</td>";
                    echo "</tr>";
                  }
                  echo "</table>";
                } 
            
                else {
                echo "No recent order";
                }
              
                $connect->close();
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>

