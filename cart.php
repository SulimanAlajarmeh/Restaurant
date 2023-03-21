<?php

include('Connect Database/connect.php');
include('functions/function.php');
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
    <link rel="stylesheet" href="css/cart.css">
    <title>Document</title>
</head>
<style>
  @media (max-width:768px) {
    body{
     min-height:703vh;
        
    }
    
}
</style>
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
                <i class="cart fa-solid fa-cart-arrow-down"><sup  class=" m-1 text-black fs-6"><?php if(isset($_SESSION['id'])) {echo number_cart_food();} ?></sup> : <span class="text-black">$ <?php if(isset($_SESSION['id'])){ total_cart_price();}?></span></i>
              </li>
                             
            </ul>
         
       
            <a href="UserArea/login.php"><button class="login-button btn" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>
    
    <?php
 
          if(!isset($_SESSION['id'])){
         if(!isset($_GET['add_to_cart'])){
          echo'<script>window.open("UserArea/login.php","_SELF")</script>';
          }
        }else{
          
          add_cart();
          
        }
        
         
        
          

?>
<div class="row mt-5">
 <h2 class="text-center ">Food In Cart</h2>
  <?php
  if(isset($_SESSION['id'])){
    $ip=getIPAddress();
  $id=$_SESSION['id'];
      $select_user="SELECT * FROM cart_details WHERE (ip_address='$ip' AND User_id=$id)";
      $result_user=mysqli_query($con,$select_user);
      $num_ip_user=mysqli_num_rows($result_user);
      if($num_ip_user>0){
      while($row_user=mysqli_fetch_assoc($result_user)){
        $Cart_id=$row_user['Cart_id'];
        $food_id=$row_user['Food_id'];
        $select_food="SELECT * FROM food WHERE (Food_id=$food_id )";
        $result_food=mysqli_query($con,$select_food);
        $num_food=mysqli_num_rows($result_food);
        if($num_food>0){
          while($row_food=mysqli_fetch_array($result_food)){
            $id=$row_food['Food_id'];

            $food_name=$row_food['Food_name'];
            $food_price=$row_food['Food_price'];
            $food_img=$row_food['Food_image1'];
            

         
            ?>
                    <div class="col-sm-3 mt-3">
            <form method="post" action="cart.php?qty=<?php if(isset($_POST['quantity'])){
              echo $_POST['quantity']; 
            }?>&id=<?php echo $Cart_id; ?>" >
            
           
            <div class="card m-3" style="width: 20rem; height:100vh;">
           
            <img style="height:350px;" src="img/<?php echo$food_img;?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?php echo$food_name;?></h5>
              
              <p class=" mt-2  card-text">Food Price : $<?php echo$food_price;?></p>

              <p class="mt-2 card-text">
              
              <label for="quantity">Quantity:</label>
              <input type="number"  min="1"  name="quantity" style="width:150px;" >
              <input style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .8rem; --bs-btn-font-size: .90rem; margin-bottom:5px;" class="  btn btn-dark text-white" type="submit" name="add" value="+">
    
              </p>
              
                          
              <input class="w-100 mt-4 btn btn-warning text-white" type="submit" name="update_cart" value="Update Food">
              <?php
        
        echo'<form>
        <a class="text-white" href="cart.php?remove='.$Cart_id.'"><input class=" w-100 mt-4  btn btn-danger text-white" type="button" name="remove" value="Remove Food" ></a>
        </form>
   
';

        ?>



            
            </div>
          </div>
          
          </form>
        
         


            </div>
             
             
              
              
       
          

         
          
     

           
            

         
          <?php
          }
          }

        

        }
      
        ?>
         <div class=" container mt-3 d-flex justify-content-center m-2">
        <a class="w-50 btn " href="UserArea/check_payment.php"><button type="button" class= "w-100 btn btn-success text-white">Payment</button></a>
        </div>
       
        
        
        <div class=" container mt-1 d-flex justify-content-center m-2">
        <a class="w-50 btn " href="cart.php?empty_cart"><button type="button" class= "w-100 btn btn-danger">Empty Cart</button></a>
        </div>
        <?php

echo'     <div class="container-faluid " >
<div class=" w-100 "  style="background-color:black; height:60px;">
  <p class="pt-3 text-center text-warning fs-3">Suliman Alajarmeh <span>&copy;</span> 2023 </p>
</div>
</div>';
        ?>
        <?php
      }else{
        echo'<h2 class="mt-5 text-center text-danger"> No Food Added To Cart</h2>';
      }
    }else{
      echo'<script>window.open("UserArea/login.php","_SELF")</script>';
    }
  
  
  ?>
<?php
 if(isset($_SESSION['id'])){
remove_cart_item();
empty_cart();
update_cart();
 
 }
?>


    
</div>



</body>
</html>