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
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>

<body>


    
    <form   method="post" style="margin-top:100px;"  >
        <h1>Molto delizioso </h1>
        <h2>Registering</h2>
        <label for="name_user">UserName:</label><br>
        <input id=name_user type="text" name="user_name" required="required" placeholder="Enter Your Name" autocomplete="off">

        <label for="email_user">Email:</label><br>
        <input id="email_user" type="email" name="email" required="required" placeholder="Enter Your Email" autocomplete="off">

        <label for="password_user">Password:</label>
        <input id="password_user" type="password" name="password" required="required" placeholder="Enter Your Password">

        <label for="re-password_user">Re-Password:</label>
        <input id="re-password_user" type="password" name="re_password" required="required" placeholder="Enter Your Password Again" >
        
        <label for="phone_user">Phone:</label>
        <input id="phone_user" type="text" name="phone" placeholder="Enter Your Phone" required="required" autocomplete="off">

        

        <button type="submit" name="submit" value="submit">Submit</button>

   

       
<div>
    <span class="fw-bold">Already have Acount??</span>
    <a class="text-danger text-decoration-none" href="login.php">Login</a>
<div>
       
     
     
    </form>

<?php
if(isset($_POST['submit'])){
 insert_user();
}
?>


    
</body>
</html>