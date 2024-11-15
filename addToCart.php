<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "dahliasp");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_ProductID = array_column($_SESSION["shopping_cart"], "item_ProductID");  
           if(!in_array($_GET["ProductID"], $item_array_ProductID))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_ProductID'               =>     $_GET["ProductID"],  
                     'item_ProductName'               =>     $_POST["hidden_ProductName"],  
                     'item_ProductPrice'          =>     $_POST["hidden_ProductPrice"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="catFruitVeg.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
               'item_ProductID'               =>     $_GET["ProductID"],  
                     'item_ProductName'               =>     $_POST["hidden_ProductName"],  
                     'item_ProductPrice'          =>     $_POST["hidden_ProductPrice"],  
                     'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_ProductID"] == $_GET["ProductID"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="addToCart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
<!DOCTYPE html>  
<html>  
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale-1">
        <title>Add To Cart</title>  
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

        <div class="section">
            <div class="container">
               <div class="box">
               <h3>Order Details</h3>  
                    <div class="table-responsive">  
                    <table class="table table-bordered">  
                    <tr>  
                       <th width="40%">Item Name</th>  
                       <th width="10%">Quantity</th>  
                       <th width="20%">Price</th>  
                       <th width="15%">Total</th>  
                       <th width="5%">Action</th>  
                    </tr>  
                  
                    <?php   
                    if(!empty($_SESSION["shopping_cart"])){  
                         $total = 0;  
                         $totalprice=0;
                         $Service=0.0;
                         $delivery=0;
                       
                         foreach($_SESSION["shopping_cart"] as $keys => $values){  
                    ?>  
                         <tr>  
                            <td><?php echo $values["item_ProductName"]; ?></td>  
                            <td><?php echo $values["item_quantity"]; ?></td>  
                            <td>RM<?php echo $values["item_ProductPrice"]; ?></td>  
                            <td>RM<?php echo number_format($values["item_quantity"] * $values["item_ProductPrice"], 2); ?></td>  
                            <td><a href="catFruitVeg.php?action=delete&ProductID=<?php echo $values["item_ProductID"]; ?>"><span class="text-danger">Remove</span></a></td>  
                         </tr>  
                    <?php    
                            $totalprice = $totalprice + ($values["item_quantity"] * $values["item_ProductPrice"]);
                            $delivery=10; 
                            $Service=0.05*$totalprice;
                            $total = $totalprice+$Service+$delivery ;
                         }  
                    ?>  

                    <tr>    
                       <td colspan="3" align="right">Total price</td>  
                       <td align="right">RM<?php echo number_format($totalprice, 2); ?></td>  
                       <td></td>
                    </tr>  
                    <tr>  
                       <td colspan="3" align="right">Service</td>  
                       <td align="right">RM<?php echo number_format($Service, 2); ?></td>  
                       <td></td>      
                    </tr>  
                    <tr>                        
                       <td colspan="3" align="right">Delivery</td>  
                       <td align="right">RM<?php echo number_format($delivery, 2); ?></td>  
                       <td></td>
                    </tr>  
                    <tr>    
                       <td colspan="3" align="right">Total</td>  
                       <td align="right">RM<?php echo number_format($total, 2); ?></td>  
                       <td></td>
                    </tr>  
                    <?php  
                    }  
                    ?>  
                    </table>  
                    </div>
                    
                    <form method="POST" action="myOrder.php" align="center">
                    <input type="submit" name = "addOrder" value ="Pay" style = "padding:8px 15px; background-color: #E7B5AC; border:none; cursor: pointer; " class="btnPay" onclick="alert('You have succesfully paid')"></a>  
                    <a href="catFruitVeg.php"><input type="button" value ="Cancel" style = "padding:8px 15px; background-color: #E7B5AC; border:none; cursor: pointer;" class="btnCancel"></a>
                    </div>
                </div>
            </div>
        </div>
    </body>  
</html>