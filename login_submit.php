<?php
include 'common.php';

$a=$_POST['email'];
$b=$_POST['password'];
$c=mysqli_real_escape_string($con,$a);
$d=mysqli_real_escape_string($con,$b);
$f="select id,email from users where email='$c' and password='$d'";
   
     $var=$_POST['var'];
 

$result=mysqli_query($con,$f)or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
  
  header('location:Login.php?error=Wrong User and Password');
}else
  {
  $data=mysqli_fetch_array($result);

  $_SESSION['user_id']=$data['id'];
  $_SESSION['email']=$data['email'];
  
  if($var==1)
  {
  header('location:city.php?movie=1');
  }
  else if($var==2)
  {
    header('location:city.php?movie=2');
  }
  else
    header('location:city.php?movie=3');
  }


 ?>
