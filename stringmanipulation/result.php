<?php
  include_once 'Substring_In_String.php';
  include_once '../include/connect.php';
  $Str=$_POST['strinput1'];
  $Sub=$_POST['strinput2'];
  $sub=
  $input=$Str."--".$Sub;
  $SearchFor="String_Substring";
  $strng= string();
  echo $strng;

  $insert_sql="INSERT INTO SearchHistory (SearchFor,input,result,user_id,date_time)
  VALUES ('$SearchFor','$input','$strng',5,CURRENT_TIMESTAMP())";

  if($conn->query($insert_sql)==true){
   ?>
     <script type="text/javascript">
      document.getElementById('msg').innerHTML="data insert succesfully";

     </script>
<?php
  }
  else {
?>
     <script type="text/javascript">
     document.getElementById('msg').innerHTML="error occured while inserting your data";
     </script>
<?php
}
$conn->close();

 ?>
