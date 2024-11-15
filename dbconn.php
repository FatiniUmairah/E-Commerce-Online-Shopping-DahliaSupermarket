<?php
	/*php& mysqldb connection file */
	$user = "epiz_32159668";//username
	$pass = "924LOHn3mk6";//mysql password
	$host = "sql206.epizy.com";//server name or ip address
	$dbname = "epiz_32159668_dahliasp";

	$connect = mysqli_connect($host,$user,$pass,$dbname);

	if(isset($connect))
		error_log("Connection established");
	else
		error_log("Connection failed"); 
?>