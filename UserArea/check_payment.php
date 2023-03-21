
<?php
session_start();
if(!isset($_SESSION['id'])){
    include("login.php");

}else{
    include("payment.php");
    
}

?>