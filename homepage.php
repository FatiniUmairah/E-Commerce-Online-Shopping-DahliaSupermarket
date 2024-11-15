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

  <div class="side-bar" style="height:1300px">
    <div class="menu">
      <div class="item">
        <h3>CATEGORY</h3>
        <a href="catFruitVeg.php">Fruits & Vegetables</a>
        <a href="catSnack.php">Snacks</a>
        <a href="catHouseHold.php">Household</a>
        <a href="catRawMF.php">Raw Material & Frozen</a>
        <a href="catBeverage.php">Beverages</a>
        <a href="catFlourBakery.php">Flours & Bakery</a>
        <a href="catDairyEgg.php">Dairy & Eggs</a>
        <a href="catPantry.php">Pantry</a>
        <a href="catHealthBeauty.php">Health & Beauty</a>
      </div>
    </div>
   </div>

  <div class="container_pic" style="margin-left: 300px; margin-rigth: 200px">
    <a href="#" class="picture-item"><img src="img/poster4.png" class="picture_img"></a>
    <a href="#" class="picture-item"><img src="img/poster2.png" class="picture_img"> </a>
    <a href="#" class="picture-item"><img src="img/poster3.png" class="picture_img"></a>
    <a href="#" class="picture-item"><img src="img/poster6.png" class="picture_img"></a>
  </div>
  <?php
  include('footer.html');
  ?>
</body>
</html>