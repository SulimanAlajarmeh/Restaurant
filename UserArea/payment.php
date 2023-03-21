<?php

include('../Connect Database/connect.php');
include('../functions/function.php');
echo $_SESSION['id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/payment.css">
    
    <title>Document</title>
</head>
<body>
    <!--start nav-->

    <nav  class="nw navbar navbar-expand-lg bg-secondry ">
        <div  class="container-fluid">
            <img class="img" src="img/logo.png">
          <a id="logo"  class="navbar-brand" href="#">Molto delizioso</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="item" class="navbar-nav me-auto mb-2 mb-lg-0">
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="profile.php">My Profile</a>
              </li>
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="../home.php">Home</a>
              </li>
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="../all_menu.php">Menu</a>
              </li>
              
              <li >
                <a href="../cart.php">
                <i class="cart fa-solid fa-cart-arrow-down"><sup  class=" m-1 text-black fs-6"><?php 
                if(isset($_SESSION['id'])){ echo number_cart_food(); }?></sup> : <span class="text-black">$ <?php 
                if(isset($_SESSION['id'])){total_cart_price();}?></span></i>
              </li>
                </a>      
            </ul>
         
       
            <a href="../logout.php"><button class="login-button btn" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>
       
       <h2 class="text-center mt-4 text-warninig">Payment Method</h2>

      <div class="payment-body">
        <div class="payment-image">
          <img src="img/p.jpg">
        </div>
        <div class="payment-info border border-dark rounded p-2 border-opacity-10" >
          
          


          <form class="row g-3" method="post" action="">
            <div class="col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" autocomplete="off" required="required">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" autocomplete="off" required="required">
            </div>
            
            <div class="col-12">
              <label for="Card" class="form-label">Number on Card</label>
              <input type="text" class="form-control" id="inputAddress" name="NumberCard" placeholder="Number Card" autocomplete="off" required="required">
            </div>
           
            <div class="col-md-6">
              <label for="cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cvv" name="cvv" autocomplete="off" required="required">
            </div>
            
            
            
            <div class="col-12">
              <button type="submit" class=" w-100 btn btn-warning text-white" name="submit">Submit</button><a>
            </div>
          </form>

        </div>
      </div>

<?php
order();

 ?>
    
          
<div class="container-faluid " >
<div class=" w-100 "  style="background-color:black; height:70px;">
<p class="pt-3 text-center text-warning fs-5"><span>&copy;</span> 2023 All Rights Reserved By Suliman Bassam Alajarmeh 2023 </p>
</div>
</div>

</body>
</html>