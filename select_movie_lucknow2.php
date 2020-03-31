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
<style>
    .l
    {
        border: black 1px solid;
        width:100%;
        height: 50px;
    }
    
.mySlides 
{   
    display:none;
}
</style>    
</head>
<?php
include('header.php');
?>
<body>
<div>
<br><br>
<h1 style="text-shadow: 2px 2px #ff0000; background-color:gold"><center> Movie Trailers <center></h1>
</div>
<div id="video" style="text-align:left ">
                <img src="IMG/S.jpg" style="float:left;" width="500px" height="400px">
                       
                <div>  
                <video class="mySlides" width="847px" height="400px" controls autoplay>
                <source src="img/S.mp4" type="video/mp4">
                </video>
                </div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>

<div>
   
    <center><span><h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; background-color:yellow">Sooryavanshi</h1></span></center>
    <span><h3>Select Movie Hall and Timing:</h3></span>
    
    <hr>
        <div style="align:left;float: left; ">
            <img src="IMG/Capture18.png" width="500px" height="100px">
          </div> 
		  <div style="align:left ">
		  <br>
		  <br>
          &nbsp <a href="seat_booking.php?$time=9:00"><input type="button" value="9:00 A.M."></a>
           <a href="seat_booking.php?time=9:30"><input type="button" value="9:30 A.M."></a>
           <a href="seat_booking.php?time=10:00"><input type="button" value="10:00 A.M."></a>
           <a href="seat_booking.php?time=12:00"><input type="button" value="12:00 P.M."></a>
           <a href="seat_booking.php?time=2:00"><input type="button" value="2:00 P.M."></a>
           <a href="seat_booking.php?time=4:00"><input type="button" value="4:00 P.M."></a>
            <a href="seat_booking.php?time=6:00"><input type="button" value="6:00 P.M."></a>
            <a href="seat_booking.php?time=9:00"><input type="button" value="9:00 P.M."></a>
        </div> 
<br><br>		
    <hr>
    <hr>
        <div style="align:left;float: left; ">
            <img src="IMG/Capture17.png" width="500px" height="100px">
          </div> 
		  <div style="align:left ">
		  <br>
		  <br>
           
          &nbsp<a href="seat_booking.php?time=10:00"><input type="button" value="10:00 A.M."></a>
           <a href="seat_booking.php?time=10:40"><input type="button" value="10:40 A.M."></a>
            <a href="seat_booking.php?time=10:50"><input type="button" value="10:50 A.M."></a>
            <a href="seat_booking.php?time=12:00"><input type="button" value="12:00 P.M."></a>
            <a href="seat_booking.php?time=1:30"><input type="button" value="1:30 P.M."></a>
            <a href="seat_booking.php?time=2:00"><input type="button" value="2:00 P.M."></a>
            <a href="seat_booking.php?time=4:40"><input type="button" value="4:40 P.M."></a>
            <a href="seat_booking.php?time=6:00"><input type="button" value="6:00 P.M."></a>
        </div>  
<br><br>		
    <hr>
    <hr>
        <div style="align:left;float: left; ">
            <img src="IMG/Capture16.png" width="500px" height="100px">
          </div> 
		  <div style="align:left ">
		  <br>
		  <br>
           
          &nbsp   <a href="seat_booking.php?time=9:50"><input type="button" value="9:00 A.M.">
           <a href="seat_booking.php?time=9:50"><input type="button" value="9:50 A.M."></a>
            <a href="seat_booking.php?time=10:00"> <input type="button" value="10:00 A.M."></a>
            <a href="seat_booking.php?time=12:50"><input type="button" value="12:50 P.M."></a>
            <a href="seat_booking.php?time=1:00"><input type="button" value="1:00 P.M."></a>
            <a href="seat_booking.php?time=2:40"> <input type="button" value="2:40 P.M."></a>
            <a href="seat_booking.php?time=6:20"> <input type="button" value="6:20 P.M."></a>
           <a href="seat_booking.php?time=8.40"><input type="button" value="8:40 P.M."></a>
        </div>  
<br><br>		
    <hr>

    
</div>
<?php
include 'footer.php';
 ?>
</body>
</html>