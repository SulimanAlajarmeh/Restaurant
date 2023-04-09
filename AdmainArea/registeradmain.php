<?php


include('../Connect Database/connect.php');
session_start();

if(isset($_POST['Submit'])){
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $password=$_POST['Password'];
  $re_password=$_POST['Re_password'];
  $phone=$_POST['Phone'];

  $hash_password=password_hash($password,PASSWORD_DEFAULT);
  if(!empty($name) AND !empty($email) AND !empty($password) AND !empty($re_password) AND !empty($phone)){

    if($password===$re_password){
     $select_user="SELECT * FROM admain WHERE Admain_Email='$email'";
     $result_select=mysqli_query($con,$select_user);
     $number_user=mysqli_num_rows($result_select);
     if($number_user>0){
      echo '<script>alert("This Admain Name is Exist ")</script>';
      echo'<script>window.open("registeradmain.php","_self")</script>';
     }else{

      $insert_user="INSERT INTO admain (Admain_name,Admain_Email,Admain_Password,Admain_Phone) VALUES ('$name','$email','$hash_password','$phone') ";
      $result_insert=mysqli_query($con,$insert_user);
      if($result_insert){
        echo '<script>alert("This Register Sucessfully ")</script>';
        echo'<script>window.open("registeradmain.php","_self")</script>';
      }

     }

    }else{
      echo '<script>alert("No Match Password :) ")</script>';
    echo'<script>window.open("registeradmain.php","_self")</script>';
    }

    

  }else{
    echo '<script>alert("Plese Fill Your Information :) ")</script>';
    echo'<script>window.open("registeradmain.php","_self")</script>';
  }

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
    <link  rel="stylesheet" href="../css/register_admain.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
      <div class="design-image">
        <img src="../AdmainArea/img/undraw_Profile_details_re_ch9r.png">
      </div>
     <div class="design-form ">
       <h2 class="text-center  mt-3">Register  Admain </h2>

       <form method="post">
        <label>Admain Name:</label>
        <br>
        <input type="text" name="Name" required="required" placeholder="Enter Your Name....">

        <label>Admain Email:</label>
        <br>
        <input type="email" name="Email" required="required" placeholder="Enter Your Email....">


        <label>Admain Password:</label>
        <br>
        <input type="password" name="Password" required="required" placeholder="Enter Your Password....">
        
        <label>Admain Re_Password:</label>
        <br>
        <input type="password" name="Re_password" required="required" placeholder="Enter Your Re_Password....">

        <label>Admain Phone:</label>
        <br>
        <input type="text" name="Phone" required="required" placeholder="Enter Your Phone....">
        <br>
       
        <input type="submit" name="Submit" class="submit-design"  >
            <br>
      <a href="loginadmain.php" class=" register btn"> Go Login</a>

       </form>

     </div>

    </div>

     

    
</body>
</html>