<?php

$con=new mysqli ('localhost','root','','restaurant');

if(!$con){
    die(mysqli_connect_error($con));
}
?>
