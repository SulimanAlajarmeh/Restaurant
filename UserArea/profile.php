<?php
include('../Connect Database/connect.php');
include('../functions/function.php');
session_start();

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
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>

<body>
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
                <a class="nav-link " aria-current="page" href="../home.php">Home</a>
              </li>
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="../all_menu.php">Menu</a>
              </li>
              
              <li >
              <a href="../cart.php">
                <i class="cart fa-solid fa-cart-arrow-down"><sup  class=" m-1 text-black fs-6"><?php 
                if(isset($_SESSION['id'])){ echo number_cart_food();} ?></sup> : <span class="text-black">$ 
                  <?php  if(isset($_SESSION['id'])){total_cart_price();}?></span></i>
              </a>
              </li>
                             
            </ul>
         
                
            </ul>
         
       
            <a href="../logout.php"><button class="login-button btn" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>

      <!--end navbar-->

      <!--start profile-->

   <!--start profile header-->


   
      <h2 class="text-center mt-3 fw-bold">Your Profile:</h2>


      <div class="user">
      <div class="user-info">
        <?php
        profile_img();
        ?>
       
        <?php
       profile_info();
        ?>
    </div>
    <div class="user-num-order">
        <div class="content">
        <div class="icon">
          
        <i class="fa-solid fa-credit-card" style="color: #039114;"></i>
            <p class="fs-5 mt-2 "><?php echo show_number_order();?></p>
            <p class="fs-5 mt-2 ">Number Payment</p>
        </div>

        <div class="icon">
        <i class="fa-solid fa-bowl-food" style="color: #ffeb0a;"></i>
            
            <p class="fs-5 mt-2 "><?php echo show_number_dishes();?></p>
            <p class=" fs-5 mt-2 ">Number Dishes </p>

        </div>

        <div class="icon">
        <i class="fa-solid fa-comment-dots" style="color: #1100ff;"></i>
            <p class="fs-5 mt-2 "><?php echo user_number_feedback();?></p>
            <p class="fs-5 mt-2 ">Number massage</p>

        </div>
    </div>
    </div>
      </div>
       <!--end profile header-->

       <div class="profile-body">
        <div class="profile-body-edit">
            <h3 class="text-center mt-3 fw-bold" ">Setting Profile</h3>
         <P class="m-4 fs-4  text-center"><a href='profile.php?showorder' class="text-dark">Show Order</a></P>
         <P class="m-4 fs-4 text-center"><a href='profile.php?edit' class="text-dark">Edit Profile </a></P>
         <P class="m-4 fs-4 text-center"><a href='profile.php?Delete' class="text-danger">Delete Acount </a></P>
         <P class="m-4 fs-4 text-center"><a href="../logout.php"><button class=" btn-warning btn" type="submit">Logout</button></a></p>
        </div>


        <?php

delete_user();
?>

        <div class="profile-show">  
        

         <?php
         if(isset($_GET['edit'])){
          include("edit.php");
         }elseif(isset($_GET['Delete'])){
          include("delete_user.php");
         }elseif(isset($_GET['showorder'])){
          
          include("order_show.php");

         }
         ?>


    
    </div>




<!--start footer-->

<!--end  footer-->  
</body>



</html>