<?php
  require 'diamond.php';
  include_once '../include/connect.php';
  $dianmb=$_POST['diainput1'];
  $SearchFor="diamond";
  $diamond= diamond();

  echo $diamond;

  $insert_sql="INSERT INTO SearchHistory (SearchFor,input,result,user_id,date_time)
  VALUES ('$SearchFor','$dianmb','$diamond',5,CURRENT_TIMESTAMP())";

  if($conn->query($insert_sql)==true){
   ?>
     <script type="text/javascript">
      document.getElementById('diamsg').innerHTML="data insert succesfully";
     </script>
<?php
  }
  else {
?>
     <script type="text/javascript">
     document.getElementById('diamsg').innerHTML="error occured while inserting your data";
     </script>
<?php
}
$conn->close();
 ?>
