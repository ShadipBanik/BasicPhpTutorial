<?php
session_start();
include 'view/header.php';
?>
<body>

	<div class="limiter">
		<div class="container-login100">
      <div class="content">
        <h1>Welcome To Basic programming <br> Tutorial</h1>
        <div class="login100-pic js-tilt" data-tilt>
          <img src="../resources/login_resource/images/img-01.png" alt="IMG">
        </div>
      </div>

			<div class="wrap-login100">
				<span class="login100-form-title">
					Member Login
				</span>
				<form class="login100-form validate-form" action="login.php" method="POST">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button name="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="registration.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<?php
				  include ("include/connect.php");
				  if(isset($_POST['submit']))
				  {
				      $email=$_POST['email'];
				      $password=sha1($_POST['password']);

				      $check_user="SELECT * FROM `user` WHERE email='$email' AND password='$password'";

				      $run=mysqli_query($conn,$check_user);
							$row=mysqli_fetch_assoc($run);
							$count=mysqli_num_rows($run);

				      if($count==true)
					      {

									$_SESSION['user']=array(
									'email'=>$row['email'],
									'password'=>$row['password'],
									'role'=>$row['role']
									);

									$role=$_SESSION['user']['role'];
								  header('Location:welcome.php');
				      }
				      else
				      {
				          echo "<script>alert('Email or password is incorrect!')</script>";
				      }
				  }
				  ?>
				</form>
			</div>
		</div>
	</div>
  <?php
	include 'view/footer.php';
	?>
