<?php
session_start();

if(!$_SESSION['email'])
{

  header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

        <link rel="stylesheet" href="../resources/css/welcome.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"/>


    </head>
    <body>

        <div class="wrapper-nav">
          <nav id="sidebar">
                    <div class="sidebar-header">

                    </div>

                    <ul class="list-unstyled components">
                        <h3>Tutorials</h3>
                        <li class="">
                            <a class="act" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >Simple Programming</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li class="active"><a href="#home" id="bes" >Home</a></li>
                                <li><a href="#history" id="srch" >Search History</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="act" id="role_home" href="#pageSubmenu" >Role</a>

                        </li>
                    </ul>
                </nav>

		              <nav class="navbar navbar-fixed-top " id="toggle">
                    <div class="container-fluid">

                        <div class="navbar-header">

                            <h3>Basic Programming Tutorials</h3>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Conatac</a></li>
                                <li><a href="#">Profile</a></li>
                                <li>
                                  <div class="dropdown">
                                    <button class="btn navbar-btn dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Action
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">user Profile</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Log Out</a></li>
                                    </ul>
                                  </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

		            <div id="content">

                </div>
        </div>


  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="../resources/js/welcome.js"></script>

    </body>
</html>
