<?php
include'common.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style media="screen">
img
{
  overflow:hidden;
}
  footer{

      padding: 10px 0;
      background-color: #101010;
      color:#9d9d9d;
      bottom: 0;
      width: 100%
  }
  

</style>
</head>
<body>
<?php
include 'header.php';
include 'check-if-added.php';
?>
<br><br><br>
<div class="container">
  <div class="jumbotron">
    <h1>Snack Time(Popcorn, Cold Drink And Much More...!</h1>
    <p> Pre order food and drinks to enjoy the movie to the fullest..</p>

  </div>

<div class="row text-center">
  <div class="col-md-4 col-sm-6">
      <a href="#" class="thumbnail"><img src="img/pop.png" alt="fgfdgd" class="img-responsive img-rounded"></a>
    <div class="caption">
      <h3>Popcorn </h3>
      <h5>Price:Rs.150.00</h5>
      <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(1)){?>
          <a href="snack.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                             
          ?>                                     
      <a href="cart-added.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
 
 
  </div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="img/coke.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
  <div class="caption">
    <h3>Xoke</h3>
    <h5>Price:Rs.90.00</h5>
           <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(2)){?>
          <a href="snack.php?id=2" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                  
                                         
          ?>                                     
      <a href="cart-added.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                 
      ?> 
    
</div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="img/wPasta.jpg" alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>White Pasta</h3>
    <h5>Price:Rs.120.00</h5>
           <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(3)){?>
          <a href="snack.php?id=3" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                   
                                          
          ?>                                     
      <a href="cart-added.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    </div>

</div>

</div>
<br>
<div class="row text-center">
  <div class="col-md-4 col-sm-6">
      <a href="#" class="thumbnail"><img src="img/rPasta.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
    <div class="caption">
      <h3>Red Pasta</h3>
      <h5>Price:Rs.120.00</h5>
       <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(4)){?>
          <a href="snack.php?id=4" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                 
                                         
          ?>                                     
      <a href="cart-added.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
      
  </div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="img/burger.jpg" alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>Burger</h3>
    <h5>Price:Rs.80.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(5)){?>
          <a href="snack.php?id=5" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                 
                                         
          ?>                                     
      <a href="cart-added.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    
</div>

</div>
<div class="col-md-4 col-sm-6">
    <a href="#" class="thumbnail"><img src="img/pizza.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
  <div class="caption">
    <h3>Pizza</h3>
    <h5>Price:Rs.130.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(6)){?>
          <a href="snack.php?id=6" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                  
                                       
          ?>                                     
      <a href="cart-added.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                   
      ?> 
    </div>

</div>

</div><br>
<div class="row text-center">
  <div class="col-md-4 col-sm-6">
      <a href="#" class="thumbnail"><img src="img/hotdog.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
    <div class="caption">
      <h3>Hot Dog</h3>
      <h5>Price:Rs.90.00</h5>
       <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(7)){?>
          <a href="snack.php?id=7" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                  
                                         
          ?>                                     
      <a href="cart-added.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                   
      ?> 
        </div>

</div>
<div class="col-md-4 col-sm-6">
    <a href="#" class="thumbnail"><img src="img/nachos.jpg" alt="fgfdgd" class="img-responsive img-rounded"style="height:350px;"></a>
  <div class="caption">
    <h3>Nachos</h3>
    <h5>Price:Rs.90.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(8)){?>
          <a href="snack.php?id=8" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                 
                                          
          ?>                                     
      <a href="cart-added.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    </div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="img/bhelpuri.jpg" alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>Bhel Puri</h3>
    <h5>Price:Rs.100.00</h5>
    <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else  if(check_if_added_to_cart(9)){?>
          <a href="snack.php?id=9" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                               
                                        
          ?>                                     
      <a href="cart-added.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
 </div>

</div>

</div>

</div>
<br><br>
<?php
include 'footer.php';
 ?>
</body>
</html>
