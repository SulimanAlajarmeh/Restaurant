
<?php
session_start();
if(isset($_SESSION['id'])){
    echo'<script>window.open("cart.php","_self")</script>';
}else{
    echo'<script>window.open("UserArea/login.php","_self")</script>';
}


?>


