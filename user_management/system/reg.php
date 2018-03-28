<?php
  include 'include/connect.php';

    if(isset($_POST['regbtn'])){
    $fullname=$_POST['fullname'];
    $username=$_POST['fullname'];
    $email=$_POST['email'];
    $password=sha1($_POST['password']);
    $s1=$_POST['selectid1'];

     $resultset_1 = $conn->query("select * from user where email='".$email."' ") or
     die("Connection failed: " . $conn->connect_error);

     $count = mysqli_num_rows($resultset_1);
   if($count == 0)
    {
      $sql="INSERT INTO user (fullname,username,email,password,role,create_date,update_date)
    VALUES ('$fullname','$username','$email','$password','$s1',CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP())";

    if($conn->query($sql)==true)
    {
        $result='
 				<div class="alert alert-success alert-dismissible ">
 				   <button type="button" class="close" data-dismiss="alert">&times;</button>
 				Sucessfully Registration.
 				</div>
 		     ';

    }
    else {
          $result='	<div class="alert alert-danger alert-dismissible ">
     				   <button type="button" class="close" data-dismiss="alert">&times;</button>
     				 something wrong
     				</div>
     		     ';

          // echo "Connection failed: " . $conn->connect_error;
     }
    }else{
       $result='<div class="alert alert-warning alert-dismissible ">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
       this email already exist.
       </div>';
    }

}
$conn->close();

 ?>
