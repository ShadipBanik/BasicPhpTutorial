<?php
 include 'view/header.php';
 include 'system/reg.php';
 ?>

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
					Member Registration
				</span>

				<form class="login100-form validate-form" action="" method="POST">

             <?php if(isset($result)){ echo $result;} ?>

					<div class="wrap-input100 validate-input" data-validate = "valid fullname">
						<input class="input100" type="text" name="fullname" placeholder="fullname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Valid Username">
           <input class="input100" type="text" name="Username" placeholder="Username">
           <span class="focus-input100"></span>
           <span class="symbol-input100">
             <i class="fa fa-user" aria-hidden="true"></i>
           </span>
         </div>
         <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="email" placeholder="Email">
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
          <div class="wrap-input100 validate-input" data-validate = "select required">
                <select class="input100" name="selectid1">
                  <?php
                    include("include/connect.php");
                    $view_role_query="select * from role";//select query for viewing users.
                    $run=mysqli_query($conn,$view_role_query);//here run the sql query.

                    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                    {
                       $role_id=$row[0];
                       $role_name=$row[1];
                    ?>
                   <option name="admin" value="<?php echo $role_id ?>"><?php echo $role_name; ?></option>

               <?php } ?>

                </select>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-check"  aria-hidden="true"></i>
                </span>
           </div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="regbtn">
							Registration
						</button>
					</div>


					<div class="text-center p-t-136">
            <span class="txt1">
              You have an Account
            </span>
						<a class="txt2" href="login.php">
							 Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
 include 'view/footer.php';
 ?>
