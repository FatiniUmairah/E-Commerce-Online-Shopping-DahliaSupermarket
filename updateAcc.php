<?php

session_start();
/* include db connection file */
include("dbconn.php");
$id= $_SESSION['id']; 

/* update process */
if(isset($_POST['Update'])){
	$firstNm = $_POST['firstname'];
	$lastNm = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['nohp'];
	$address = $_POST['address'];
	$password = $_POST['pwd'];

	$sql= "UPDATE user SET UserFName = '$firstNm',UserLName = '$lastNm',UserEmail = '$email',UserContactNo = '$phone',UserAddress = '$address',UserPassword = '$password' WHERE UserID= '$id'";
	$query = mysqli_query($connect, $sql) or die ("Error: " .
		mysql_error());
	echo '<script>alert("You have succesfully update")</script>';
	echo '<script>window.location="myaccount.php"</script>';  
}
?>

