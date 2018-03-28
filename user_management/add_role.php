<?php
session_start();

if(!$_SESSION['email'])
{

  header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Role</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.min.css"/>
<link href="../resources/crud/assets/crud.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../resources/login_resource/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/login_resource/css/main.css">

</head>
<body>
  <div class="header">
        <h1> welcome to user role </h1>
   </div>
	<div class="container main">
        <h2 class="form-signin-heading">All Records.</h2>
        <hr />
         <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Role</button>
           <div class="modal fade"   id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" style="width: 489px;    margin-left: 58px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      			<div class="wrap-login100" >
 				<span class="login100-form-title">
 					Add role
 				</span>
               <div id="output">
                 </div>
 					<div class="wrap-input100 validate-input" data-validate = "valid role">
 						<input class="input100" type="text" id="addrole" placeholder="add role">
 						<span class="focus-input100"></span>
 						<span class="symbol-input100">
 							<i class="fa fa-user" aria-hidden="true"></i>
 						</span>
 					</div>


 				 <div class="container-login100-form-btn">
 						<button class="login100-form-btn" id="submit">
 							Add
 						</button>
 					</div>
 			</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
		<hr />
        <div class="content-loader">

        <table cellspacing="0" style="text-align:center;" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Role name</th>
        <th>create date</th>
        <th>Update date</th>

        <!-- <th>edit</th>
        <th>delete</th> -->
        </tr>
        </thead>
        <tbody>
          <?php
          include 'include/connect.php';
          $sql="SELECT * FROM role ORDER BY id DESC";
          $result=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($result)) {
         ?>
           <tr>
             <td><?php echo $row['name']; ?></td>
             <td><?php echo $row['create_date']; ?></td>
             <td><?php echo $row['update_date']; ?></td>

           </tr>
          <?php
          }
          mysqli_close($conn);
          ?>

        </tbody>
        </table>
        </div>
    </div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	$(document).ready(function(){
	    $('#submit').click(function(){

	      $.post("../user_management/system/role_submit.php",
	            {addrole:$('#addrole').val(),},

	            function(data){
	                $('#output').html(data);
	            },
	          );

	    });

	});
</script>
</body>
</html>
