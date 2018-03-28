<?php
 session_start();

 if(!$_SESSION['email'])
 {

   header("Location: login.php");//redirect to login page to secure the welcome page without login access.
 }
session_destroy();
header("Location:login.php");
?>
