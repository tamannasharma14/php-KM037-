<?php
include'common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   <style>
   img
   {
	   radius:20px;
   }
   
   </style>
</head>
<body >
<?php
$x=$_GET['movie'];
?>
 <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="city.php">Get Your Ticket</a>
           </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                   <li><a href = "a.php"><span class = "glyphicon glyphicon-th-list"></span> About Us</a></li>
                   <li><a href = "ContactUs.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us</a></li>
                   <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-phone"></span>Logout</a></li>
                </ul>
            </div>
        </div>
      </div>
<div class="container">
<div class="button">
	<div class="text- left">
	 <div class="col-md-4 col-sm-4 col-xs-12"></div>
   <div class="col-md-12 col-sm-12 col-xs-12">
   <br><br><br>
		<br><br>
		<br>
		<h2 style="margin-left:415px;">Choose Your City</h2>
		<br><br><br>
		
      <br>
      <script>
      function city() {
         <?php
         $a="";
         if($x==1)
         {
            $a="select_movie_delhi2.php";
         }
         else if($x==2)
         {
            $a="select_movie_delhi3.php";
         }
         else
         {
            $a="select_movie_delhi.php";
         }
            ?>
      }
     
      function city1() {
         <?php
         $b="";
         if($x==1)
         {
            $b="select_movie_jalandhar2.php";
         }
         else if($x==2)
         {
            $b="select_movie_jalandhar3.php";
         }
         else
         {
            $b="select_movie_jalandhar.php";
         }
            ?>
      }
      function city2() {
         <?php
         $c="";
         if($x==1)
         {
            $c="select_movie_lucknow2.php";
         }
         else if($x==2)
         {
            $c="select_movie_lucknow3.php";
         }
         else
         {
            $c="select_movie_lucknow.php";
         }
            ?>
      }
      function city3() {
         <?php
         $d="";
         if($x==1)
         {
            $d="select_movie_ludhiana2.php";
         }
         else if($x==2)
         {
            $d="select_movie_ludhiana3.php";
         }
         else
         {
            $d="select_movie_ludhiana.php";
         }
            ?>
      }
      function city4() {
         <?php
         $e="";
         if($x==1)
         {
            $e="select_movie_rajasthan2.php";
         }
         else if($x==2)
         {
            $e="select_movie_rajasthan3.php";
         }
         else
         {
            $e="select_movie_rajasthan.php";
         }
            ?>
      }
      function city5() {
         <?php
         $f="";
         if($x==1)
         {
            $f="select_movie_Ranchi2.php";
         }
         else if($x==2)
         {
            $f="select_movie_Ranchi3.php";
         }
         else
         {
            $f="select_movie_Ranchi.php";
         }
            ?>
      }
   
      </script>
		<center>
      <table style="padding-top: 15px;">
      <tr>
      <td><a href="<?php echo $a; ?>" onclick="city()"><img src="img/delhi.jpg" width="90px" height="90px" class="img-circle"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</td><td><a href="<?php echo $b; ?>" onclick="city1()"><img src="img/jalandhar.jpg" width="90px" height="90px" class="img-circle"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</td><td><a href="<?php echo $c; ?>" onclick="city2()"><img src="img/lucknow.jpg" width="90px" height="90px" class="img-circle"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</td><td><a href="<?php echo $d; ?>" onclick="city3()"><img src="img/ludhiana.jpg" width="90px" height="90px" class="img-circle"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</td><td><a href="<?php echo $e; ?>" onclick="city4()"><img src="img/rajasthan.jpg" width="90px" height="90px" class="img-circle"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</td><td><a href="<?php echo $f; ?>" onclick="city5()"><img src="img/ranchi.jpg" width="90px" height="90px" class="img-circle"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</tr>
      <tr>
      <td>&nbsp &nbsp <b>Delhi</b></td>
      <td>&nbsp <b>Jalandhar</b></td>
      <td>&nbsp<b>Lucknow</b></td>
      <td>&nbsp<b>Ludhiana</b></td>
      <td>&nbsp<b>Rajasthan</b></td>
      <td>&nbsp &nbsp<b>Ranchi</b></td>


      </center>
		
	</div>
	
       </div>
</div>
<?php
include 'footer.php';
 ?>
</body>
</html>