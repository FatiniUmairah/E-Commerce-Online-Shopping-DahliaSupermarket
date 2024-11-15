<br><h4>Customer's Order Details</h4><br>
<table border = "1" class="table">
  <thead>
    <tr>
      <th>User ID</th>
      <th>Order ID</th>
      <th>Order Date</th>
      <th>Order Time</th>
      <th>Order Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include("dbconn.php");

      $sql = "SELECT * FROM cust_order";
      $result = $connect->query($sql);

      if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          echo "<tr>";
          echo "<td>".$row['UserID']."</td>";
          echo "<td>".$row['OrderID']."</td>";
          echo "<td>".$row['OrderDate']."</td>";
          echo "<td>".$row['OrderTime']."</td>";
          echo "<td>".$row['OrderStatus']."</td>";
    ?>
          <td align="center"><a href="status-form.php?id=<?php echo $row["UserID"]; ?>">UPDATE</a></td>
        <?php
          echo "</tr>";
        }
        echo "</table>";
      } 
    
      $connect->close();
      ?>
  </tbody>
</table>

