<?php
 session_start();

 if(!$_SESSION['user']['role'])
 {

   header("Location: ../user_management/login.php");//redirect to login page to secure the welcome page without login access.
 }
session_destroy();
header("Location:login.php");
?>
