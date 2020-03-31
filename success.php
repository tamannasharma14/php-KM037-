<!DOCTYPE html>
<?php
include 'common.php';
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style>
  footer{
     margin-top:280px;
      padding: 10px 0;
      background-color: #101010;
      color:#9d9d9d;
      bottom: 0;
      width: 100%;
  }
</style>
  </head>
  <body>
<?php
include 'header.php';
 ?>
<br><br><br>
<div class="container">
  <?php
  if(!isset($_SESSION['email'])){
    header('location.index.php');
  } else {

  $user_id = $_SESSION['user_id'];

  //We will change the status of the items purchased by the user to 'Confirmed'
  $query = "UPDATE users_items SET status='confirmed' WHERE user_id='$user_id' AND status='added to cart'";
  mysqli_query($con, $query) or die($mysqli_error($con));
}
  ?>
  <div class="col-xs-9 col-xs-offset-2">
    <div class="jumbotron">
      <h2>Your order is confirmed</h2>
      <h3>Thank You for booking from Get Your Ticket.Your Seats are Confirmed.</h3><br>
      
    </div>

  </div>

</div>
<?php
include 'footer.php';
 ?>
</body>
</html>
