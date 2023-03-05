<?php

include('Connect Database/connect.php');
include('functions/function.php');

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
    <link rel="stylesheet" href="css/food_details.css">
    <title>Document</title>
</head>
<body>
    <!--start nav-->
    <nav  class="nw navbar navbar-expand-lg ">
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

              <li  class="items nav-item">
                
                <a class="nav-link " aria-current="page" href="home.php">Service</a>
              </li>
              
              <li  class="items nav-item">
                
                <a class="nav-link " aria-current="page" href="home.php">About Us</a>
              </li>

              <li  class="items nav-item">
                
                <a class="nav-link " aria-current="page" href="home.php">View The Restaurant</a>
              </li>

              <li class="items nav-item">
                <a class="nav-link" href="home.php">Contact US</a>
              </li> 

             
              <li class="items nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Type of Food
                </a>
                <ul class="dropdown-menu">
                 <?php
                 $select_type="SELECT * FROM typefood ";
                 $result_type=mysqli_query($con,$select_type);
                 $numrow=mysqli_num_rows($result_type);
                 if($numrow>0){
                  while($row_type=mysqli_fetch_assoc($result_type)){
                    $type_food=$row_type['Type_name'];
                    $id_type=$row_type['id'];
                    echo' <li><a class="menu dropdown-item" href="all_menu.php?type_name='.$type_food.'">'.$type_food.'</a></li>
                    ';
                  }
                 }
                 ?>                  
                </ul>
              </li>
              <li class="items nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Food Country
                </a>
                <ul class="dropdown-menu">
                  <?php
                  $select_country="SELECT * FROM country";
                  $result_country=mysqli_query($con,$select_country);
                  $numrow2=mysqli_num_rows($result_country);
                  if($numrow2>0){
                    while($row_country=mysqli_fetch_assoc($result_country)){
                      $id_country=$row_country['id'];
                      $name_country=$row_country['Country_name'];

                        echo' <li><a class="menu dropdown-item" href="all_menu.php?country_name='.$name_country.'">'.$name_country.'</a></li>';
                    }

                  }
                  
                  ?>


                  
                </ul>
              </li>
              
            </ul>
            <a href="cart.php"><i class="cart fa-solid fa-cart-arrow-down"><sup  class="  m-1  text-black fs-6"><?php  echo number_cart_food(); ?></sup></i></a>
       
            <a href="UserArea/login.php"><button class="login-button btn" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>
    <!--end nav-->




<!--start details-->

<h1 class=" spacial-head">Food Details</span>
  <i class="spacial-icon fa-solid fa-bowl-food"></i>
</h1>
<div class="menu-resturant ">






<!--backend php-->

<div id="menu" class="menu-food">
<h3> View Food:</h3>




<!--start row-->
  <div class=" mt-5 container">
    

  <?php

  if(isset($_GET['details_id'])){
    details_food();

  }

      
  ?>

  
  </div>
  <!-- end row-->







</div>

</div>

<!--end Menu-->
























</body>
</html>