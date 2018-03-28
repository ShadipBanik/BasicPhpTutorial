<?php

$servername="localhost";
$username="root";
$password="";
$Dbname="history";
$conn=new mysqli($servername,$username,$password,$Dbname);
if($conn->connect_error){
  die ("connection failed:".$conn->connect_error);  
}
?>
