<!DOCTYPE html>
<?php
include 'common.php';
?>
<html>
  <head>
    
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style>
  
  body{
	  background-image:url("28.jpg");
	  background-repeat:no-repeat;
	  background-size: cover; 
	  color:white;
  }
  footer{
      margin-top:435px;
      padding: 10px 0px;
      background-color: #101010;
      color:#9d9d9d;
      width: 100%;
  }
</style>
  </head>
  <body>
    <?php
    include 'header.php';
     ?>
<br><br><br><br>
<div class="container">
<div class="row">
  <div class="col-xs-5 col-xs-offset-4">
  <table class="table table-striped" style="color:black; background-color:white;" >
    <?php
    $totals=0;
    $sum = 0;
    $user_id = $_SESSION['user_id'];
    
    $query = "SELECT items.price, items.pid, items.name FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id' and status='added to cart'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    if (mysqli_num_rows($result) >= 1) {
    ?>
    <thead>
        <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
    <?php
        $y=1;
        while ($row = mysqli_fetch_array($result)) {
            $sum+= $row["price"];
            $id= $row["pid"];
            echo "<tr>
                      <td>" . "#" . $y++ . "</td>
                      <td>" . $row["name"] . "</td>
                      <td>Rs " . $row["price"] . "</td>
                      <td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'> X </a></td>
                  </tr>";
        }
        $sum=$sum+$totals;
        echo "<tr>
                  <td></td>
                  <td>Total</td>
                  <td>Rs " . $sum . "</td>
                  </tr>
				  <tr >
				    <td></td>
					  <td></td>
				  <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
				  </tr>";
        ?>
    </tbody>
    <?php
} else
  {
    echo "<center><h2>Add items to the cart first!</h2></center>";
   }
?>
  </table>
</div>
</div>
</div>
<br><br>
<br>
<br>
<br>
<?php
include 'footer.php';
 ?>
</body>
</html>
