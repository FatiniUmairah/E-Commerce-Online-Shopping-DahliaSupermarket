<?php
session_start();

include("dbconn.php");
$id= $_SESSION['id'];

$sql= "SELECT * FROM user WHERE UserID= '$id'";
$query = mysqli_query($connect, $sql) or die ("Error: ".mysqli_error());
$row = mysqli_num_rows($query);

if($row == 0){
echo "No record found";
}
else{
$r = mysqli_fetch_assoc($query);
$firstname= $r['UserFName'];
$lastname= $r['UserLName'];

?>

<!DOCTYPE html>
<head>
	<title>My Account</title>
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
  	<div class="profile">
  		<div class="wrapper">
				<form class="frmAcc" name="formProfile" method="post" action="updateAcc.php">
				<h2>My Account</h2>
				<div class="inputProfile">
					<label for="firstname">FIRST NAME</label>
					<input type = "text" name="firstname" value="<?php echo $r['UserFName'] ?>" autofocus required />
				</div>
				<div class="inputProfile">
					<label for="lastname">LAST NAME</label>
					<input type = "text" name="lastname" value="<?php echo $r['UserLName'] ?>" autofocus required />
				</div>
				<div class="inputProfile">
					<label for="email">EMAIL</label>
					<input type = "text" name="email" value="<?php echo $r['UserEmail'] ?>" autofocus required />
				</div>
				<div class="inputProfile">
					<label for="nohp">PHONE NUMBER</label>
					<input type = "text" name="nohp" value="<?php echo $r['UserContactNo'] ?>" autofocus required />
				</div>
				<div class="inputProfile">
					<label for="address">ADDRESS</label>
					<input type = "text" name="address" value="<?php echo $r['UserAddress'] ?>" autofocus required />
				</div>
					<div class="inputProfile">
					<label for="pwd">PASSWORD</label>
					<input type = "password" name="pwd" value="<?php echo $r['UserPassword'] ?>" required />
				</div>
				<div class="inputProfile">
					<input class="btnUpdate" type="submit" name="Update" value="Update Profile"/>&nbsp;&nbsp;
				</div>
			</form>
		</div>
	</div>
</body>
</html>
<?php
    }
    mysqli_close($connect);
?>
