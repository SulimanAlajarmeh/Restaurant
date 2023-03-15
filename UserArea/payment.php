<?php

include('../Connect Database/connect.php');
include('../functions/function.php');

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
    <link rel="stylesheet" href="../css/cart.css">
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
                <a class="nav-link " aria-current="page" href="home.php">Home</a>
              </li>
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="all_menu.php">Menu</a>
              </li>
              
              <li >
                <i class="cart fa-solid fa-cart-arrow-down"><sup  class=" m-1 text-black fs-6"><?php  echo number_cart_food(); ?></sup> : <span class="text-black">$ <?php total_cart_price();?></span></i>
              </li>
                             
            </ul>
         
       
            <a href="UserArea/login.php"><button class="login-button btn" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>
       

    <div class="row px-1">
    <div class="col-md-12">
    <div class="row">

   </div> 
   </div> 
   </div> 
          


</body>
</html>