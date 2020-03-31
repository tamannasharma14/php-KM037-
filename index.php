<?php
include'common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php

if (isset($_SESSION['email'])) {
  session_destroy();
  header('location: index.php');
}

?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vedio slider</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
    .checked
    {
    color: orange;
    }
    </style>
  </head>
  <body>
 
        <?php
include('header.php');
if (isset($_SESSION['email'])) {
  session_destroy();
}
?>
	<section>
		<video id="slider" autoplay loop>
		<source src="img/B.mp4" type="video/mp4">
    </video>
    <ul class="navigation">
      <li onclick="videoUrl('img/FF.mp4')"><img src="img/movie3.jpg"></li>
      <li onclick="videoUrl('img/AM.mp4')"><img src="img/movie2.jpg"></li>
      <li onclick="videoUrl('img/S.mp4')"><img src="img/movie1.jpg"></li>
          </ul>
  </section>

<script type="text/javascript">
function showMe (it, box) {
var vis = (box.checked) ? "block" : "none";
document.getElementById(it).style.display = vis;
}
</script>
  <div class="sidebar" style="background-color:white; display:inline-content;margin:2%; width:20%;float:left;">
  <b>Choose Language</b>
  <form action="#" method="post">
    <ul style="list-style:none;">
      <li><input type="checkbox" name="movie" value="All" onclick="showMe('div1', this)">All</input></li>
<li><input type="checkbox" name="movie" value="English"onclick="showMe('div2', this)">English</input></li>
<li><input type="checkbox" name="movie" value="Hindi"onclick="showMe('div3', this)">Hindi</input></li>
</form>

  </div>

<div class="content" style="display:inline-content;float:inline;">
 <div id="div1" style="display:none;">
<table>
  <tr>
 <td><a href="login.php?movie=1"><img src="img/movie1.jpg"></a></td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp <a href="login.php?$movie=2"><img src="img/movie2.jpg"?></a></td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp <a href="login.php?$movie=3"><img src="img/movie3.jpg"?></a></td>
</tr>
<tr>
<br><br>
<td><b>Suryavanshi</b></td><td><b>&nbsp  &nbsp  &nbsp  &nbsp &nbspAngrezi Medium</b></td>
<td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp<b>Fast and Furius 9</b></td></div>
</tr>
<tr>
  <td>Reviews..</td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp Reviews..</td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp Reviews..</td>
</tr>
<tr>
 <td><span class="heading">User Rating</span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p></td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp <span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>&nbsp  &nbsp  &nbsp  &nbsp &nbsp 4.1 average based on 254 reviews.</p></td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp <span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>&nbsp  &nbsp  &nbsp  &nbsp &nbsp 4.1 average based on 254 reviews.</p></td>  
</tr>
</table>
</div>
<div id="div2" style="display:none;">
<table>
  <tr>
  <td><a href="login.php?$movie=3"><img src="img/movie3.jpg"?></a></td>
</tr>
<tr>
<br><br>
<td><b>Fast and Furious 9</b></td></div>
</tr>
<tr>
  <td>Reviews..</td>
</tr>
<tr>
  <td><span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p></td>  
</tr>
</table>
</div>
<div id="div3" style="display:none;">
<table>
  <tr>
   <td><a href="login.php?$movie=1"><img src="img/movie1.jpg"?></a></td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp <a href="login.php?$movie=2"><img src="img/movie2.jpg"?></a></td>
</tr>
<tr>
<br><br>
<td><b>Suryavanshi</b></td><td><b>&nbsp  &nbsp  &nbsp  &nbsp &nbspAngrezi Medium</b></td>
</tr>
<tr>
  <td>Reviews..</td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbspReviews..</td>
</tr>
<tr>
 <td><span class="heading">User Rating</span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p></td>
  <td>&nbsp  &nbsp  &nbsp  &nbsp &nbsp<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>&nbsp  &nbsp  &nbsp  &nbsp &nbsp4.1 average based on 254 reviews.</p></td>
</tr>
</table>
</div>

</div>

  
  <script type="text/javascript">
    function videoUrl(hmmm)
    {
        document.getElementById("slider").src=hmmm;
    }
    

  </script>
  
  </body>	
 </html>