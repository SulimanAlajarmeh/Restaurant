<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>


<?php
$user_id=$_SESSION['id'];
$select_user="SELECT * FROM user WHERE(User_id=$user_id)";
$result_user=mysqli_query($con,$select_user);
if($result_user){
    $row_fetch=mysqli_fetch_assoc($result_user);
    $name=$row_fetch['User_name'];
    $email=$row_fetch['User_email'];
    $phone=$row_fetch['User_phone'];
}

if(isset($_POST['Edit'])){
    $ip=getIPAddress();

    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $hash_password=password_hash($password,PASSWORD_DEFAULT);
    $email=$_POST['User_email'];
    $phone=$_POST['User_phone'];
    $image=$_FILES['food_img1']['name'];
    $temp_image=$_FILES['food_img1']['name'];
    move_uploaded_file($temp_image,"./profile_image/$image");

    if(!empty($user_name AND $password AND $email AND $phone)){

    $update_profile="UPDATE user SET User_name='$user_name',User_password='$hash_password',User_email='$email',User_phone='$phone',Image_usre='$image' WHERE User_id=$user_id";
    $result_update=mysqli_query($con,$update_profile);
    if($result_update){
     
        echo'<script>alert("Update Successfuly")</script>';
        echo'<script>window.open("profile.php","_self")</script>';
    }else{
        die(mysqli_error($con));
    }



}else{
    echo'<script>alert("Plese Fill Information")</script>';
    echo'<script>window.open("profile.php?edit","_self")</script>';
        
}
}




?>




















<div class="show-all">
<h3 class="text-center  mt-3 mb-1 fw-bold">Edit Profile</h3>
    <form class="border border-1 p-4"  method="post" enctype="multipart/form-data">
        <!--Name-->
        <div class="form-outline  mt-4 mb-4 ">
            <label for="user_name" class="fs-4 form-label">User Name:</label>
            <input type="text" name="user_name" id="user_name"
            class="form-control" autocomplete="off"  placeholder="<?php echo $name;?>" >
        </div>

        <!--description-->
        <div class="form-outline mt-4 mb-4">
            <label for="password" class="fs-4 form-label">Password:</label>
            <input type="text" name="password" id="password" 
            class="form-control" autocomplete="off"  placeholder="New Password">
        </div>


        <div class="form-outline mt-4 mb-4">
            <label for="User_email" class="fs-4 form-label">Email:</label>
            <input type="email" name="User_email" id="User_email" 
            class="form-control" autocomplete="off"  placeholder="<?php echo $email;?>">
        </div>


 
        
  
            <!--price-->
        <div class="form-outline mt-4 mb-4 ">
            <label for="User_phone" class="fs-4 form-label">Phone:</label>
            <input type="text" name="User_phone" id="User_phone" 
            class="form-control" autocomplete="off"  placeholder="<?php echo $phone;?>">
        </div>

        <!--img1-->

        <div class="form-outline mt-4 mb-4 ">
            <label for="food_img1" class="fs-4 form-label"> User_Image </label>
            <input type="file" name="food_img1" id="food_img1" class="form-control"  >
        </div>
        <!--img1-->
        
        

        <div class="mt-3 mb-2 ">

            <input class=" w-100 btn btn-warning" type="submit" name="Edit" value="Submit">
        </div>
    

    </form>
    </div>
</body>
</html>