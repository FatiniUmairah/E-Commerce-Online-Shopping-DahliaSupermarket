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
<style>

.hi-slide{
position: relative;
width: 800px;
height: 300px;
border-radius: 50px;
margin: 115px auto 0;
}

.hi-slide .hi-next,
.hi-slide .hi-prev {
  position: absolute;
  top: 50%;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  border-radius: 50px;
  line-height: 40px;
  text-align: center;
  cursor: pointer;
  background-color: floralwhite;
  color: black;
  transition: all 0.7s;
  font-size: 20px;
  font-weight: bold;
}

.hi-slide .hi-next:hover,
.hi-slide .hi-prev:hover{
  opacity: 1;
  background-color: #869F77;
}

.hi-slide .hi-prev{
  left: -200px;}

.hi-slide .hi-prev::before{
  content: '<';
}

.hi-slide .hi-next{
  right: -130px;
}

.hi-slide .hi-next::before{
  content: '>';
}

.hi-slide > ul{
  list-style: none;
  position: relative;
  width: 800px;
  height: 300px;
  margin: 0;
  padding: 0;
}

.hi-slide > ul > li{
  overflow: hidden;
  position: absolute;
  z-index: 0;
  left: 400px;
  width: 0;
  height: 0;
  margin: 0;
  padding: 0;
  border: 2px solid floralwhite;
  cursor: pointer;
  background-color: #fde9ea;
}

.hi-slide > ul > li > img{
  width: 100%;
  height: 100%;
  background-position: center;
}

</style>
<body style="background-color:#e7b5ac;">
  <header>
      <div class="container">
          <img src ="img/logo.png" width="150">
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

  <div class="slide hi-slide">
    <div class="hi-prev"></div>
    <div class="hi-next"></div>
    <ul>
      <li><img src = "img/catalogue1.jpg" alt=""></li>
      <li><img src = "img/catalogue2.jpg" alt=""></li>
      <li><img src = "img/catalogue3.jpg" alt=""></li>
      <li><img src = "img/catalogue4.jpg" alt=""></li>
      <li><img src = "img/catalogue5.jpg" alt=""></li>
      <li><img src = "img/catalogue6.jpg" alt=""></li>
      <li><img src = "img/catalogue7.png" alt=""></li>
    </ul>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="hislide/jquery.hislide.js"></script>
  <script>
    $('.slide').hiSlide();
  </script><br>
  <?php
  include('footer.html');
  ?>
</body>
</html>