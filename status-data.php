<?php
	include('dbconn.php');

    $UserID = $_POST['UserID'];
    $OrderID = $_POST['OrderID'];
    $OrderDate = $_POST['OrderDate'];
    $OrderTime = $_POST['OrderTime'];
    $OrderStatus = $_POST['OrderStatus'];

    $sql = "UPDATE `cust_order` SET `UserID`='$UserID',`OrderID`='$OrderID',`OrderDate`='$OrderDate',`OrderTime`='$OrderTime',`OrderStatus`='$OrderStatus' WHERE `OrderID`='$OrderID'";

    $result = $connect->query($sql);

    if ($connect->query($sql) === TRUE){
        echo '<script>alert("Order Status been updated successfully")</script>';
        echo "<meta http-equiv=\"refresh\" content=\"0;URL= menuAdmin.php\">";
    }
    
    else{ 
    	echo "<p style='text-align:center'> Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
?>