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
    <link rel="stylesheet" href="css/cart.css">
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
    
    <?php
   
         if(isset($_GET['add_to_cart'])){
           add_cart();
          }

         
          

?>
<div class="row mt-5">
 <h2 class="text-center ">Food In Cart</h2>
  <?php
 $ip=getIPAddress();
  
      $select_user="SELECT * FROM cart_details WHERE (ip_address='$ip')";
      $result_user=mysqli_query($con,$select_user);
      $num_ip_user=mysqli_num_rows($result_user);
      if($num_ip_user>0){
      while($row_user=mysqli_fetch_array($result_user)){
        $food_id=$row_user['Food_id'];
        $select_food="SELECT * FROM food WHERE (Food_id=$food_id)";
        $result_food=mysqli_query($con,$select_food);
        $num_food=mysqli_num_rows($result_food);
        if($num_food>0){
          while($row_food=mysqli_fetch_array($result_food)){
            $id=$row_food['Food_id'];

            $food_name=$row_food['Food_name'];
            $food_price=$row_food['Food_price'];
            $food_img=$row_food['Food_image2'];
            

         
            ?>
            <div class="col-sm-3 mt-3">
            <form method="post">
           
            <div class="card m-3" style="width: 20rem; height:100vh;">
           
            <img style="height:350px;" src="img/<?php echo$food_img;?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?php echo$food_name;?></h5>
              
              <p class=" mt-2  card-text">Food Price : $<?php echo$food_price;?></p>

              <p class="mt-2 card-text">
              
              <label for="quantity">Quantity:</label>
              <input type="number"  min="1"  name="quantity" style="width:90px;" >
              
          <?php
            if(isset($_POST['update_cart'])){
              if(!empty($_POST['quantity'])){
                $quntatity=$_POST['quantity'];
                $ip=getIPAddress();
                $update="UPDATE cart_details SET quantity=$quntatity WHERE (ip_address='$ip') ";
                  $result_update=mysqli_query($con,$update);
        echo'<script>window.open("cart.php","_self")</script>';
 
 }
}
?>
              </p>
              <p>
              <label >Remove:</label>
              <input type="checkbox"  name="removeitem[]" value="<?php echo $food_id?>">
              </p>
                          
              <input class="mt-4 m-2 btn btn-warning text-white" type="submit" name="update_cart" value="Update Food">
              <input class="mt-4 m-2 btn btn-danger text-white" type="submit" name="remove" value="Remove Food">
            
            </div>
          </div>
          </form>
        



            </div>
            

         
          <?php
          }
          }

          

        }
      
        ?>
         <div class=" container mt-3 d-flex justify-content-center">
        <a class="w-100 btn " href="check_payment.php"><button type="button" class= "w-100 btn btn-success text-white">Payment</button></a>
        </div>
       
        
        
        <div class=" container mt-3 d-flex justify-content-center">
        <a class="w-100 btn " href="cart.php?empty_cart"><button type="button" class= "w-100 btn btn-danger">Empty Cart</button></a>
        </div>
        
        <?php
      }else{
        echo'<h2 class="mt-5 text-center text-danger"> No Food Added To Cart</h2>';
      }
   
    
  ?>
<?php

remove_cart_item();
empty_cart()
?>


    
</div>



</body>
</html>