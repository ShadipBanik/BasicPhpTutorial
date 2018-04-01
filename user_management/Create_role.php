<?php
 // session_start();
 //
 // if(!$_SESSION['email'])
 // {
 //
 //   header("Location: login.php");
 // }
 //   include 'view/role_header.php';
 ?>
 <div class="limiter">
  <div class="container-login100" style="background: #E0E0E0">

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
  </div>
</div>
<?php
include 'view/role_footer.php';
?>
