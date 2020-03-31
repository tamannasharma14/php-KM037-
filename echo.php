<?php

include('common.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>select movie</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<?php

include('header.php');
?>
<style>
body
{
  background-image:url("img/2.jpeg");
  background-repeat: no-repeat;
  background-origin: content-box;
  background-size: cover;
}
</style>
<body>


<div class="container" >
<br>
<br><br>
<br>
<br><br>
  <div class="jumbotron">
  <br>
<br><br>
<?php
 $x=0;
  echo "YOUR SEATS ARE :";
    foreach($_POST['checkboxName'] as $value)
    {
      echo  $value." ";
      $x++;
    }
    $total=$x*200;
    echo "Show Time: ".$x."<br/>";
    echo "Total Tickets : ".$x."<br/>";
    echo "Total Amount: ".$x."*200 :".$total."<br>";
    ?>
    <a href="success.php" class="btn btn-success ">Confirm</a>
    <a href="snack.php" class="btn btn-primary ">Pre Order Food!!</a>
    <br>
<br><br>
</div>
</div>
<?php
include 'footer.php';
 ?>
</body>
</html>
