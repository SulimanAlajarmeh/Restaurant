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
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>


<?php
if(isset($_POST['login'])){
login();
}
?>

    


    <form  method="post" style="margin-top:90px;">
        <h1>Molto delizioso </h1>
        <h2>Login</h2>
       
        <label>UserName:</label><br>
        <input type="text" name="user_name" placeholder="Enter Your Name" autocomplete="off" required="required">

        <label>Email:</label>
       
        <input type="email" name="user_email" placeholder="Enter Your Email" autocomplete="off" required="required"> 

        <label>Password:</label>
       
        <input type="password" name="user_password" placeholder="Enter Your Password" autocomplete="off" required="required">
        <button  class="bg-success text-white"type="submit" name="login">Submit</button>
        <button type="submit"><a href="register.php">Register</a></button>

       
     
    </form>
  
</body>
</html>