<?php
if(isset($_SESSION['id'])){
    echo'<script>window.open("UserArea/profile.php","_self")</script>';
}else{
    echo'<script>window.open("UserArea/login.php","_self")</script>';
}


?>