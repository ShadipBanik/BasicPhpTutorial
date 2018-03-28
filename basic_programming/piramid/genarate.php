<?php
  require 'pira.php';
  include_once '../include/connect.php';
  $pirnmb=$_POST['pirinput1'];
  $SearchFor="piramid";
  $piramid= piramid();

  echo $piramid;

  $insert_sql="INSERT INTO SearchHistory (SearchFor,input,result,user_id,date_time)
  VALUES ('$SearchFor','$pirnmb','$piramid',5,CURRENT_TIMESTAMP())";

  if($conn->query($insert_sql)==true){
   ?>
     <script type="text/javascript">
      document.getElementById('pirmsg').innerHTML="data insert succesfully";
     </script>
<?php
  }
  else {
?>
     <script type="text/javascript">
     document.getElementById('pirmsg').innerHTML="error occured while inserting your data";
     </script>
<?php
}
$conn->close();
 ?>
