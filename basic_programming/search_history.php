<?php
 session_start();

 if(!$_SESSION['email'])
 {

   header("Location: ../user_management/login.php");//redirect to login page to secure the welcome page without login access.
 }
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search History</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.min.css"/>

<link href="../resources/crud/assets/crud.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="header">
        <h1> welcome to Search History</h1>
   </div>
	<div class="container main">
        <h2 class="form-signin-heading">Search Records.</h2>
        <hr />
        <div class="content-loader">
        <table cellspacing="0" style="text-align:center;" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>SearchFor</th>
        <th>Input</th>
        <th>Result</th>
        <th>Date_Time</th>
        <!-- <th>edit</th>
        <th>delete</th> -->
        </tr>
        </thead>
        <tbody>
          <?php
          include 'include/connect.php';
          $sql="SELECT * FROM searchhistory ORDER BY id DESC";
          $result=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($result)) {
         ?>
           <tr>
             <td><?php echo $row['SearchFor']; ?></td>
             <td><?php echo $row['input']; ?></td>
             <td><?php echo $row['result']; ?></td>
             <td><?php echo $row['date_time']; ?></td>
           </tr>
          <?php
          }
          mysqli_close($conn);
          ?>

        </tbody>
        </table>
        </div>
    </div>
<script src="../resources/crud/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../resources/crud/assets/datatables.min.js"></script>
<script type="text/javascript" src="../resources/crud/crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>
