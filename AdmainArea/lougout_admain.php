<?php
session_start();
session_unset();
session_destroy();
echo'<script>window.open("loginadmain.php","_self")</script>';


?>