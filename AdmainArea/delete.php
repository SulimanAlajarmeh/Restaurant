<?php

include('../Connect Database/connect.php');
if(isset($_GET['type_id'])){
$type_id=$_GET['type_id'];
$delete="DELETE FROM typefood WHERE (id=$type_id) ";
$result=mysqli_query($con,$delete);

if($result){
    echo '<script>alert("Delete Type Done")</script>';
    echo '<script>window.open("admain.php?view_type_food","_self")</script>';
}
}

if(isset($_GET['country_id'])){
    $country_id=$_GET['country_id'];
    $delete2="DELETE FROM country WHERE (id=$country_id)";
    $result2=mysqli_query($con,$delete2);
    if($result2){
        echo '<script>alert("Delete Country Done")</script>';
        echo '<script>window.open("admain.php?view_food_country","_self")</script>';
    }
}



if(isset($_GET['delete_food'])){
    $delete_id=$_GET['delete_food'];
    $delete_food="DELETE FROM food WHERE (Food_id=$delete_id)";
    $result_delete=mysqli_query($con,$delete_food);
    if($result_delete){
        echo '<script>alert("Delete Food Done")</script>';
        echo '<script>window.open("admain.php?view_food","_self")</script>';
    }
}

if(isset($_GET['delete_user']));
$delete_id=$_GET['delete_user'];
$delete_user="DELETE FROM user WHERE(User_id=$delete_id)";
$result_delete=mysqli_query($con,$delete_user);
if($result_delete){
    $select_cart="SELECT * FROM cart_details WHERE (User_id=$delete_id)";
    $result_select=mysqli_query($con,$select_cart);
    if($result_select){

        $delete_cart="DELETE FROM cart_details WHERE (User_id=$delete_id)";
        $result_delete_cart=mysqli_query($con,$delete_cart);

        if($result_delete_cart){

            echo '<script>alert("Delete User Done")</script>';
        echo '<script>window.open("admain.php?users","_self")</script>';
        }


    }else{
        echo '<script>alert("Delete User Done")</script>';
        echo '<script>window.open("admain.php?users","_self")</script>';
    }
}


?>