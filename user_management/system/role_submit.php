<?php
include '../include/connect.php';
$addrole=$_POST['addrole'];

$sql="INSERT INTO role (name,create_date)
VALUES ('$addrole',CURRENT_TIMESTAMP()) ";

if($conn->query($sql)==true)
{
  echo  '<div class="alert alert-success alert-dismissible ">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  Sucessfully Add role.
  </div>
  ';

}
else {
  echo '<div class="alert alert-warning alert-dismissible ">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  this role already exist.
  </div>';
}

$conn->close();
?>
