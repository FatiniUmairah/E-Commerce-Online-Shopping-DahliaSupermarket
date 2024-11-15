<?php
session_start();
/*include db connection file */
include("dbconn.php"); 

if(isset($_POST['submit'])){
	/* capture values from HTML form */
	$id = $_POST['id'];
	$pass = $_POST['pass'];

	if($id == "admin" && $pass == "admin"){
		$_SESSION['UserID'] = "Administrator";
		header("Location: menuAdmin.php"); //redirect to admin page
	}

	else {
		/* execute SQL command */
		$sql = "SELECT * FROM user WHERE UserID = '$id' AND UserPassword = '$pass'"; //refer on dbconn
		$query = mysqli_query($connect, $sql) or die ("Error: " . mysqli_error($connect));
		$row = mysqli_num_rows($query); //read record row by row

		if ($row > 0){ //record found, put in session
			$r = mysqli_fetch_assoc($query); 
			$_SESSION['id'] = $r['UserID'];
			header("Location: homepage.php");
		}

		else 
			echo '<script>alert("Invalid User ID or Password")</script>'; //record not found
			echo '<script>window.location="login.php"</script>';  
	}
}
mysqli_close($connect);
?>
