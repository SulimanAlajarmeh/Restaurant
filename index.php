<?php

include('Connect Database/connect.php');

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
    <link rel="stylesheet" href="css/index.css">
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
                <a class="nav-link " aria-current="page" href="#">Home</a>
              </li>
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="#">Home</a>
              </li>
              <li  class="items nav-item">
                
                <a class="nav-link " aria-current="page" href="#">Home</a>
              </li>

              <li class="items nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="items nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Type of Food
                </a>
                <ul class="dropdown-menu">

                  <?php
                  #display type Food 
  
                      $select1="SELECT * FROM typefood ";
                      $result1=mysqli_query($con,$select1);
                      $numrow1=mysqli_num_rows($result1);
                      if($numrow1>0){
                        while($row_type=mysqli_fetch_assoc($result1)){
                          $type_food=$row_type['Type_name'];
                          $id_type=$row_type['id'];
                          echo'
                          <li><a class="menu dropdown-item" href="">'.$type_food.'</a></li>
                        
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
                  #display name country
                   $select2="SELECT * FROM country";
                   $result2=mysqli_query($con,$select2);
                   $numrow2=mysqli_num_rows($result2);
                   if($numrow2>0){
                     While($row_country=mysqli_fetch_assoc($result2)){
                      $id_country=$row_country['id'];
                       $country_name=$row_country['Country_name'];
                       echo'
                        <li><a class="menu dropdown-item" href="">'.$country_name.'</a></li>
                       ';
                     }
                   }
                  
               ?>



                 
                </ul>
              </li>
              
            </ul>
            <i class="cart fa-solid fa-cart-arrow-down"><sup class=" text-danger fs-5">10</sup></i>
       
            <a href="login.html"><button class="login-button btn" type="submit">Login</button></a>
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
<h1 class="spacial-head">Service</span>
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
<div class="menu-resturant">


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


<form  method="post" class="form-search m-5">
  <input  class="search" type="text" placeholder="Search.......">
  <button type="button" class="button-search btn btn-warning"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>


<!-- start row-->
<div class="row">
<?php
  $select_food="SELECT * FROM food ORDER BY rand() LIMIT 0,10";
  $result_food=mysqli_query($con,$select_food);
  $food_num_row=mysqli_num_rows($result_food);
  if($food_num_row>0){
    while($row_food=mysqli_fetch_assoc($result_food)){

      $food_name=$row_food['Food_name'];
      $food_country=$row_food['country_name'];
      $food_type=$row_food['type_name'];
      $food_decription=$row_food['Food_description'];
      $price=$row_food['Food_price'];
      $img=$row_food['Food_image2'];

      echo'
      <div class="col-6">
      <div class="card-mobile row">

<div class="card-cont col">
  <div class="card mb-3" style="max-width: 650px; max-height:500px; ">
    <div class="row ">
      <div class="card-cont-edit col-md-4">
        <img style="min-height:412px" src="img/'.$img.'" class="card-cont-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-cont-body card-body">
          <h5 class="card-title fs-3">'.$food_name.'</h5>
          <p class="card-text fs-5">'.$food_country.'</p>
          <p class="card-text fs-5">'.$food_type.'</p>
           <p class="card-text">'.$food_decription.'</p>
           <p class="fs-4">$'.$price.'</p>
           <div class="price">
            <button type="button" class=" w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-cart-shopping"></i></button>
            <button type="button" class="w-100 mt-4 btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div>

      ';}
    }
      ?>

  </div>




   
 
 

<!--end row-->

<div class="view-all">
<a href="product.php"><button class="menu-view">View More </button></a>
</div>

</div>

</div>

<!--end Menu-->






<!--start About-->
<h1 class="spacial-head">AboutUs</span>
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
<h1 class="spacial-head">View The Restaurant</span>
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

<h1 class="social-media spacial-head">Contact US</span>
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