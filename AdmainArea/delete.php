<?php

include('../Connect Database/connect.php');
if(isset($_GET['type_id'])){
$type_id=$_GET['type_id'];
$delete="DELETE FROM typefood WHERE (id=$type_id) ";
$result=mysqli_query($con,$delete);

if($result){
    header('Location:admain.php?view_type_food');
    exit();
}
}

if(isset($_GET['country_id'])){
    $country_id=$_GET['country_id'];
    $delete2="DELETE FROM country WHERE (id=$country_id)";
    $result2=mysqli_query($con,$delete2);
    if($result2){
        header('Location:admain.php?view_food_country');
        exit();
    }
}

?>