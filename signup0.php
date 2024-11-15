<?php
	include ("dbconn.php");
	if(isset($_POST['submit'])){
		$userid = $_POST['userId'];
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		$email = $_POST['email'];
		$phone = $_POST['numPhone'];
		$alamat = $_POST['address'];
		$password = $_POST['pwd'];

		$sql = "INSERT INTO user (UserID,UserFName,UserLName,UserEmail,UserContactNo,UserAddress,UserPassword) VALUES ('".$userid."','".$fname."','".$lname."','".$email."','".$phone."','".$alamat."','".$password."')";

		mysqli_query($connect, $sql) or die ("Error: " . mysqli_error($connect));
		echo '<script>alert("Successfully sign up!")</script>';
		echo '<script>window.location="login.php"</script>';  

	mysqli_close($connect);
	}
?>