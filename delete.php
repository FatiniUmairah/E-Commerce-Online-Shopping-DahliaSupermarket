<?php
    include('dbconn.php');

    $ProductID = $_REQUEST['id'];

    $sql = "DELETE FROM product WHERE ProductID ='".$ProductID."'";

    $result = $connect->query($sql);

    if ($connect->query($sql) === TRUE){
        echo '<script>alert("Data product been deleted!")</script>'; 
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=product.php\">";
    }

    else {
        echo "Error: " . $sql . "<br>" . $connect->error;
        echo "<p>";
    }

    //closed specified connection
    $connect->close();
?>