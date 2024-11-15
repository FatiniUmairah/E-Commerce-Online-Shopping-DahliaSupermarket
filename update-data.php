<?php
	include('dbconn.php');

    $ProductID = $_POST['ProductID'];
    $ManufactureID = $_POST['ManufactureID'];
    $ProductName = $_POST['ProductName'];
    $ProductCategory = $_POST['ProductCategory'];
    $ProductPrice = $_POST['ProductPrice'];
    $ProductBrand = $_POST['ProductBrand'];
    $ProductInStock = $_POST['ProductInStock'];
    $ProductImg = $_POST['ProductImg'];

    $sql = "UPDATE `product` SET `ManufactureID`='$ManufactureID',`ProductName`='$ProductName',`ProductCategory`='$ProductCategory',`ProductPrice`='$ProductPrice',`ProductBrand`='$ProductBrand',`ProductInStock`='$ProductInStock',`ProductImg`='$ProductImg' WHERE `ProductID`='$ProductID'";

    $result = $connect->query($sql);

    if ($connect->query($sql) === TRUE){
        echo '<script>alert("Data has been updated successfully")</script>';
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=product.php\">";
    }
    
    else{ 
    	echo "<p style='text-align:center'> Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
?>