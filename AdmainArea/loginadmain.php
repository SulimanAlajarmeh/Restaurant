<?php
include('../Connect Database/connect.php');

session_start();

if(isset($_POST['Submit'])){
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $password=$_POST['Password'];

  if(!empty ($name) AND !empty($email) AND !empty($password)){

    $select_user="SELECT * FROM admain WHERE (Admain_Email='$email')";
    $result_user=mysqli_query($con,$select_user);
    $number_user=mysqli_num_rows($result_user);
    if($number_user>0){
        $row_admain=mysqli_fetch_assoc($result_user);
        $admain_id=$row_admain['id'];
        $admain_name=$row_admain['Admain_name'];
        $admain_email=$row_admain['Admain_Email'];
        $admain_password=$row_admain['Admain_Password'];
        $admain_phone=$row_admain['Admain_Phone'];
        
        if(password_verify($password,$admain_password)){

          $_SESSION['id_admain']=$admain_id;
          $_SESSION['admain_name']=$admain_name;


          echo '<script>alert("Login Successfuly")</script>';
          echo '<script>window.open("admain.php","_self")</script>';




        }else{
          echo '<script>alert("The Password Not Match")</script>';
          echo '<script>window.open("loginadmain.php","_self")</script>';
        }


    }else{
      echo '<script>alert("this User Not Exisit")</script>';
      echo '<script>window.open("loginadmain.php","_self")</script>';
    }


  }else{
    echo '<script>alert("Plese Fill All Information")</script>';
    echo '<script>window.open("loginadmain.php","_self")</script>';
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
    <link  rel="stylesheet" href="../css/admain_login.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
      <div class="design-image">
        <img src="../AdmainArea/img/undraw_Profile_details_re_ch9r.png">
      </div>
     <div class="design-form ">
       <h2 class="text-center  mt-3">Login Admain </h2>

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
        
        <br>
       
        <input type="submit" name="Submit" class="submit-design"  >
            <br>
      <a href="registeradmain.php" class=" register btn"> Register</a>

       </form>

     </div>

    </div>

     

    
</body>
</html>