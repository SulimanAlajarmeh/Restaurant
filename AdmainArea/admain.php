<?php

session_start();
if(isset($_SESSION['admain_name'])){
$admain_name=$_SESSION['admain_name'];
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/admain.css">
    <title>Document</title>
</head>

<body>
    <!--start nav-->
    <nav class="navbar navbar-expand-lg bg-light mb-5">
        <div class="container-fluid">
          
          <span class="name"><?php 
          if(isset($admain_name)){
             echo $admain_name;
          }else{
            echo 'Admain';
          }?></span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav-mange navbar-nav me-auto mb-2 mb-lg-0">

                <a class="link" href="admain.php?insert_food"><button class="btn-warning btn " type="submit">Insert Food</button></a>
                <a class="link" href="admain.php?view_food"><button class="btn-warning btn " type="submit">View Food</button></a>

                <a class="link" href="admain.php?insert_type_food"><button class="btn-warning btn " type="submit">Insert Type Food</button></a>
                <a class="link" href="admain.php?view_type_food"><button class="btn-warning btn " type="submit">View Type Food</button></a>

                <a class="link" href="admain.php?insert_food_country"><button class=" btn-warning btn " type="submit">Insert Food Country</button></a>
                <a class="link" href="admain.php?view_food_country"><button class="btn-warning btn " type="submit">View Food Country</button></a>



                <a class="link" href="admain.php?allorder"><button class="btn-warning btn " type="submit">All Order</button></a>
                <a class="link" href="admain.php?AllMassages"><button class="btn-warning btn " type="submit">All Massages</button></a>
                <a class="link" href="admain.php?users"><button class="btn-warning btn " type="submit">List User</button></a>
            
            </ul>
            <?php
            if(isset($_SESSION['admain_name'])){
              echo '<a href="lougout_admain.php"><button class="login-button btn" type="submit">Logout</button></a>';
            }else{
              echo '<a href="loginadmain.php"><button class="login-button btn" type="submit">Login</button></a>';
            }
            
            ?>
          </div>
        </div>
      </nav>
    <!--end nav-->
    <h2 class="text-center mt-2 fw-bold">Admain Panael</h2>

    <!--back end -->
      <div class="container">
    <?php
    if(isset($_SESSION['admain_name'])){
    if(isset($_GET['insert_food'])){
          echo'<h3>Insert Food:</h3>';
          include('insert_food.php');
    }elseif(isset($_GET['insert_type_food'])){
      echo'<h3>Insert Type Food:</h3>';
      include('insert_type_food.php');
    }elseif(isset($_GET['view_type_food'])){
      echo '<h3> View Type Food : </h3>';
      include('view_type_food.php');
    }elseif(isset($_GET['insert_food_country'])){
      echo '<h3> Insert Food Country: </h3>';
      include('insert_food_country.php');
    }elseif(isset($_GET['view_food_country'])){
      echo '<h3> View Food Country: </h3>';
      include('view_food_country.php');
    }elseif(isset($_GET['view_food'])){
      echo'<h3 class="mt-5 mb-3">View Food In Resturant: </h3>';
      include('view_food.php');
    }elseif(isset($_GET['update_food'])){
      echo'<h3 class="mt-5 mb-3">Update Food In Resturant: </h3>';
      include('update_food.php');
    }elseif(isset($_GET['allorder'])){
      echo'<h3 class="mt-5 mb-3">All Invoices Sold: </h3>';
      include('view_allorder.php');
    }elseif(isset($_GET['AllMassages'])){

      include('../Connect Database/connect.php');
      $select_massage="SELECT * FROM feedback";
      $result_massage=mysqli_query($con,$select_massage);
      $number_massage=mysqli_num_rows($result_massage);

      echo'<h3 class="mt-5 mb-3"><i class="fa-solid fa-comments fs-3" style="color: #035efc;"></i> All FeedBack Sent: '.$number_massage.'</h3>';
      include('all_massage.php');
    }elseif(isset($_GET['users'])){
      include('../Connect Database/connect.php');
      $select_user="SELECT * FROM user";
      $result_user=mysqli_query($con,$select_user);
      $number_user=mysqli_num_rows($result_user);
      echo'<h3 class="mt-5 mb-3"><i class="fa-solid fa-users fs-2" style="color: #ffea05;"></i>  Users: '.$number_user.' </h3>';
      include('all_user.php');
    }
  }else{
    echo '<script>alert("Login To Admain")</script>';
    echo '<script>window.open("loginadmain.php","_self")</script>';
  }
    ?>
    </div>

      <!--end backend -->
</body>
</html>