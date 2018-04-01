<?php
 session_start();

 if(!$_SESSION['user']['role'])
 {

   header("Location: ../user_management/login.php");//redirect to login page to secure the welcome page without login access.
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href ="../resources/css/style.css">
      <link rel="stylesheet" href="../resources/css/sipmle.css" />
</head>

<body>
    <div class="container-fluid">
       <div class="row content">
          <div class="col-sm-2 sidenav  navbar-fixed-top hidden-xs">
              <h2>Tutorials</h2>
              <hr>
              <ul class="nav nav-pills  nav-stacked">
            <li class="active">
              <a href="#section1" data-toggle="collapse" data-target="#demo">Simple Programming &nbsp;<span class="glyphicon glyphicon-menu-down"></span></a>
                <ul id="demo" class="collapse">
                  <li class="active"><a id="bes" href="#"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Home</a></li>
                  <?php
                  include 'include/connect.php';
                   $sql = "SELECT name FROM `role` WHERE id=".$_SESSION['user']['role'];
                   $rl_run=mysqli_query($conn,$sql);
                   $row=mysqli_fetch_assoc($rl_run);

                  if($row['name']=='admin'){
                   echo '<li><a  id="srch" href="#"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Search History</a></li>';
                  ?>
                </ul>
               </li>
               <?php

                echo '<li><a href="#" id="add_role">Role</a></li>';

            }
                  ?>
              </ul><br>
          </div>
           <div class="col-sm-10">
                <nav class="navbar navbar-default col-sm-10 navbar-fixed-top ">
                   <div class="container-fluid">
                      <div class="navbar-header">
                           <a class="navbar-brand" href="#">Basic Programming Tutorial</a>
                      </div>

                         <ul class="nav navbar-nav navbar-right">
                           <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                           <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact</a></li>
                           <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Profile</a></li>
                           <li>
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action &nbsp;<span class="glyphicon glyphicon-menu-down"></span></a>

                             <ul class="dropdown-menu">
                               <li><a href="#">Profile</a></li>
                               <li><a href="#">Message</a></li>
                               <li><a href="logout.php">Log Out</a></li>
                             </ul>
                           </li>
                        </ul>

                   </div>
                </nav>
                 <div class="row content2">

                  </div>
             </div>
         </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../resources/js/welcome.js"></script>
</body>
</html>
