<?php


if(!isset($_SESSION['username'])){
    include("UserArea/login.php");
    echo'<script>alert("Plese login to Continue Payment")</script>';
}else{
    include("payment.php");
}

?>