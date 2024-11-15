<?php   
  session_start();  
  $connect = mysqli_connect("sql206.epizy.com", "epiz_32159668", "924LOHn3mk6", "epiz_32159668_dahliasp");  
  if(isset($_POST["add_to_cart"]))
  {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_ProductID = array_column($_SESSION["shopping_cart"], "item_ProductID");  
           if(!in_array($_GET["ProductID"], $item_array_ProductID))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_ProductID'               =>     $_GET["ProductID"],  
                     'item_ProductName'               =>     $_POST["hidden_ProductName"],  
                     'item_ProductPrice'          =>     $_POST["hidden_ProductPrice"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="catHouseHold.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
               'item_ProductID'               =>     $_GET["ProductID"],  
                     'item_ProductName'               =>     $_POST["hidden_ProductName"],  
                     'item_ProductPrice'          =>     $_POST["hidden_ProductPrice"],  
                     'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 
 ?>  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale-1">
  <title>Promotion Household</title>  
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

   <div class="side-bar">
    <div class="menu">
      <div class="item">
        <h3>CATEGORY</h3>
        <a href="catFruitVeg.php">Fruits & Vegetables</a>
        <a href="catSnack.php">Snacks</a>
        <a href="catHouseHold.php" style="color:grey; background-color:#F9E0DB"><b>Household</b></a>
        <a href="catRawMF.php">Raw Material & Frozen</a>
        <a href="catBeverage.php">Beverages</a>
        <a href="catFlourBakery.php">Flours & Bakery</a>
        <a href="catDairyEgg.php">Dairy & Eggs</a>
        <a href="catPantry.php">Pantry</a>
        <a href="catHealthBeauty.php">Health & Beauty</a>
      </div>
    </div>
   </div>

   <br/>
       <div class="container" style="width:700px;">   
            <?php

            $query = "SELECT * FROM product WHERE ProductCategory = 'Household' ORDER BY ProductID ASC";  
            $result = mysqli_query($connect, $query);  
            if(mysqli_num_rows($result) > 0)  
            {  
                 while($row = mysqli_fetch_array($result))  
                 {  
            ?>  
            <div class="col-md-4">  
                <form method="post" action="catHouseHold.php?ProductID=<?=$row['ProductID'] ?>">
                    <div style="border:1px solid #333; background-color:#f1f1f1; margin-bottom: 20px; border-radius:5px; padding:16px" align="center">  
                       <img src="img/<?=$row['ProductImg']?>" style='height:150px;'>
                       <h4 class="text-info"><?php echo $row["ProductName"]; ?></h4>  
                       <h4 class="text-danger">RM<?php echo $row["ProductPrice"]; ?></h4>   
                       <input type="number" name="quantity" value="1" class="form-contol" min="0" style="width:100px;" >
                       <input type="hidden" name="hidden_ProductName" class="nama" value="<?php echo $row["ProductName"]; ?>" />  
                       <input type="hidden" name="hidden_ProductPrice" value="<?php echo $row["ProductPrice"]; ?>" />  
                       <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                    </div>  
                </form>  
            </div>  
            <?php  
                 }  
            }  
            ?>  
</body>
</html>