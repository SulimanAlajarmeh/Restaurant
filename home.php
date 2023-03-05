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
    <link rel="stylesheet" href="css/home.css">
    <title>Document</title>
</head>
<body>
    <!--start nav-->
    <nav class="nw navbar navbar-expand-lg ">
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
                <a class="nav-link " aria-current="page" href="#menu">Menu</a>
              </li>
              <li  class="items nav-item">
                
                <a class="nav-link " aria-current="page" href="#service">Service</a>
              </li>

              <li  class="items nav-item">
                
                <a class="nav-link " aria-current="page" href="#about">About Us</a>
              </li>

              <li  class="items nav-item">
                
                <a class="nav-link " aria-current="page" href="#view resturant">View The Restaurant</a>
              </li>

              <li class="items nav-item">
                <a class="nav-link" href="#Contact">Contact US</a>
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
                    echo' <li><a class="menu dropdown-item" href="home.php?type_name='.$type_food.'">'.$type_food.'</a></li>
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

                        echo' <li><a class="menu dropdown-item" href="home.php?country_name='.$name_country.'">'.$name_country.'</a></li>';
                    }

                  }
                  
                  ?>


                  
                </ul>
              </li>
              
            </ul>
            <a href="cart.php"><i class="cart fa-solid fa-cart-arrow-down"><sup class=" m-1  text-black fs-6"><?php  echo number_cart_food(); ?></sup></i></a>
       
            <a href="UserArea/login.php"><button class="login-button btn" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>
    <!--end nav-->
    <!--start landding-->
    <div class="ladding">

        <h1 class="spacial">Restaurant <span>Molto delizioso</span>
          <p>
            <i class="star fa-solid fa-star"></i>
            <i class="star fa-solid fa-star"></i>
            <i class="star fa-solid fa-star"></i>
            <i class="star fa-solid fa-star"></i>
            <i class="star fa-solid fa-star"></i>
            
            </p>
          <i class="kitchen fa-solid fa-bowl-food"></i>
         
        </h1>
        
        <p >A five-star restaurant that serves the best and finest foods from all over the world</p>
        <P >It offers the most delicious and distinctive foods</P>
        
       
        
    </div>
<!--end landding-->
<!--start service-->
<h1 id="service" class="spacial-head">Service</span>
  <i class="spacial-icon fa-solid fa-bowl-food"></i>
</h1>

<div class="service ">
  <div class="row">


    <div class="service-c col">
      <div class="service-card card" style="width: 18rem;height: 15rem;">
        <img class="service-icon" src="img/food.png">
        <div class="card-body">
          <h4 class="service-title card-title">Food Dishes</h4>
          <p class="service-text card-text">Delicious dishes from all over the world, international cuisine and various kinds of dishes.</p>
        </div>
      </div>
    </div>


    <div class="service-c col">
      <div class="service-card card" style="width: 18rem;height: 15rem;">
        <img class="  service-icon" src="img/hat.jpg">
        <div class="card-body">
          <h4 class="service-title card-title">Best Cheef</h4>
          <p class=" service-text card-text">The best and most skilled chefs work in the restaurant to cook the most famous foods.</p>
        
        </div>
      </div>
    </div>

    <div class="service-c col">
      <div class="service-card card" style="width: 18rem; height: 15rem;">
        <img class="service-icon" src="img/qulity.png">
      <div class="card-body">
        <h4 class="service-title card-title">Top Quality</h4>
        <p class="service-text card-text">We offer the best services, and we are distinguished by providing the best in the restaurant and the wonderful time through wonderful and calm music.</p>
     
      </div>
    </div>
  </div>



    <div class="service-c col">
      <div class="service-card card" style="width: 18rem;height: 15rem;">
        <img class="service-icon" src="img/sale.jfif">
        <div class="card-body">
          <h4 class="service-title card-title">Discount</h4>
          <p class="service-text card-text">Monthly discounts on food in the restaurant sometimes up to 40%and discounts in the most prominent annual events.</p>
          
        </div>
      </div>
    </div>


   
  </div>
</div>
<!--end service-->



<!--start Menu-->

<h1 class="spacial-head">Menu</span>
  <i class="spacial-icon fa-solid fa-bowl-food"></i>
</h1>
<div id="menu" class="menu-resturant">


<div class="menu-category">
  <div class="row">
  <div class="menu-cont col">
  <i class="menu-icon fa-regular fa-rectangle-list"></i>
  <h5 class="menu-text">List Menu</h5>
  </div>
  <div class="menu-cont col">
    <i class="menu-icon fa-solid fa-bowl-food"></i>
    <h5 class="menu-text">Dishes</h5>
    </div>
    <div class="menu-cont col">
      <i class="menu-icon fa-solid fa-burger"></i>
      <h5 class="menu-text">Burger</h5>
      </div>
      <div class="menu-cont col">
        <i class="menu-icon fa-solid fa-pizza-slice"></i>
        <h5 class="menu-text">Pizza</h5>
        </div>
        <div class="menu-cont col">
          <i class="menu-icon fa-solid fa-shrimp"></i>
          <h5 class="menu-text">Sea Food</h5>
          </div>

     

  </div>
</div>



<!--backend php-->

<div class="menu-food">
<h3>Our Menu:</h3>



<form method="post" class="form-search mb-5 mt-5">
  <input  class="search" name="search_food" type="text" placeholder="Search.......">
  <button type="submit" name="serch_submit"  class="button-search btn btn-warning"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>

<!--start row-->
  <div class="row row-cols-1 row-cols-md-2 g-4 row">
    

  <?php
  if(isset($_POST['serch_submit'])){
    if(!empty($_POST['search_food'])){
      search_food();
    }else{
      all_food();
      echo'
      <div class=" w-100 d-flex justify-content-center view-all">
      <a href="all_menu.php"><button class="menu-view">View More</button> </a>
      </div>';
      
    }
  }elseif(isset($_GET['type_name'])){
    type_food();
  }elseif(isset($_GET['country_name'])){
    country_food();
  }else{
    all_food();
    echo'
    <div class=" w-100 d-flex justify-content-center view-all">
    <a href="all_menu.php"><button class="menu-view">View More</button> </a>
    </div>';
    
  }
      
  ?>

  
  </div>
  <!-- end row-->







</div>

</div>

<!--end Menu-->




















<!--start About-->
<h1 id="about" class="spacial-head">AboutUs</span>
  <i class="spacial-icon fa-solid fa-bowl-food"></i>
</h1>

<div class="about">
  <div class="about-cont row">
  <div class="about-img col">
    <img src="img/about.jpg">
  </div>
  <div class="about-info col">
    <img src="img/logo.png"><span>About Us</span>
    <p>Real Delicious Food Straight To <span>Your Table</span></p>
    <p class="experince"><span>10</span> YEARS OF EXPERIENCE </p>

    <div class="about-bottom row">
      <div class="about-bottom-img col">
          <img src="img/ladding.jpg">
      </div>
      <div class="about-bottom-text col">
        
        <div>
          <i class="fa-solid fa-circle-check"></i>
          Delicious & Healthy Foods
        </div>
        
        <div>
          <i class="fa-solid fa-circle-check"></i>
          Spacific Family & Kids Zone
        </div>
        


        <div>
          <i class="fa-solid fa-circle-check"></i>
         Best Price & Offers
        </div>
        



        <div>
          <i class="fa-solid fa-circle-check"></i>   
          Made By Fresh Ingredients
        </div>
        
        <div>
          <i class="fa-solid fa-circle-check"></i>   
          Music & Other Facilities
        </div>
        
      </div>
    </div>
    
    

  </div>
  <div class="about-me row">
    <div class="me col">
      <img src="img/suliman.jpeg">
      <span>Suliman Alajarmeh</span>
      <span>CEO</span>
      <span class="name-re">Molto delizioso</span>
    </div>
    
  </div>
</div>

</div>



<!--end About-->

<!--start view -->
<h1 id="view resturant" class="spacial-head">View The Restaurant</span>
  <i class="spacial-icon fa-solid fa-bowl-food"></i>
</h1>
<div class="view ">
  <h3>Our success Story</h3>
  <div class="view-cont  row">
    <div class="view-info col">
      <i class="fa-solid fa-user"></i>
      <p>24</p>
      <p>Happy Customers</p>
    </div>
   
   
    <div class="view-info col">
      <i class="fa-solid fa-flag"></i>
      <p>6</p>
      <p> Global Food</p>
    </div>

    <div class="view-info col">
      <i class="fa-solid fa-pizza-slice"></i>
      <p>50</p>
      <p>Foods</p>
    </div>


    <div class="view-info col">
      <i class="fa-solid fa-comment"></i>
      <p>100</p>
      <p>Feedback</p>
    </div>


  </div>
  
 </div>
 
<!--end view-->

<!--start team-->
<div class="team">
  <div class="row">
    <div class="team-info col">
      <h1>Our team:</h1>
      <P>The best and most skilled chefs who have received awards
         and certificates in the field of cooking are serving you 
         to make you happy and enjoy the wonderful and wonderful taste</P>
      

    </div>

    <div class="team-img col">
      <div class="team-img-cont row">
        <div class="col">
          <div class="team-img-card card" style="width: 18rem;">
            <img src="img/chef.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chef</h5>
              <p class="card-text">Executive Chef.</p>
            
            </div>
          </div>
        </div>
        <div class="col">
          <div class="team-img-card card" style="width: 18rem;">
            <img src="img/chef.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chef</h5>
              <p class="card-text">Assistant Chef</p>
            </div>
          </div>
        </div>
      </div>


      <div class="team-img-cont row">
        <div class="col">
          <div class="team-img-card card" style="width: 18rem;">
            <img src="img/chef.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chef</h5>
              <p class="card-text">Assistant Chef</p>   
            </div>
          </div>
        </div>

        <div class="col">
          <div class="team-img-card card" style="width: 18rem;">
            <img src="img/chef.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chef</h5>
              <p class="card-text">Assistant Chef</p>
            </div>
          </div>
        </div>


      </div>
       
    </div>
  </div>

</div>

<!--end team-->


<!--start contact-->

<h1 id="Contact" class="social-media spacial-head">Contact US</span>
  <i class="social-media spacial-icon fa-solid fa-bowl-food"></i>
</h1>

<div class="contact-us">
  <div class="contact-info row">
    <div class="contact-text col">
      <h2>Work Time</h2>
      <p><i class="dash fa-solid fa-minus"></i>Amman,Jordan</p>
      <p><i class="dash fa-solid fa-minus"></i>Fri-Wed:9.00am-12.0am</p>
      <p><i class="dash fa-solid fa-minus"></i>Thu:9.00am-2.00am</p>
      <p><i class="dash fa-solid fa-minus"></i>Delivery 24 Hours </p>
      <p><i class="dash fa-solid fa-minus"></i>Phone:0789993533 </p>
      <h2>Follow Us</h2>
      <i class="social fa-brands fa-facebook"></i>
      <i class="social fa-brands fa-instagram"></i>
      <i class="social fa-brands fa-youtube"></i>
      <i class="social fa-brands fa-snapchat"></i>
      
    </div>
    <div class="contact-form col">
      <h2>Send Your Massage</h2>







      <form method="post">
       
        <input  class="msg" type="text" name="name" placeholder="Enter Your Name">
        <input class="msg" type="email" name="email" placeholder="Enter Your Email">
        <input class="msg-edit" type="text" name="massage" placeholder="Enter Your Massage">
        <button class="send-msg">Send <i class="fa-solid fa-paper-plane"></i></button>

      </form>








    </div>
  </div>
</div>
<!--end contact-->
</body>
</html>