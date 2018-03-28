<?php
  include_once 'divsor.php';
  include_once '../include/connect.php';
  $low=$_POST['divinput1'];
  $high=$_POST['divinput2'];
  $dnmb=$_POST['divinput3'];
  $input= $low."--".$high."divisible number".$dnmb;
  $SearchFor="divisible number count";
  $div= div();
  echo $div;

  $insert_sql="INSERT INTO SearchHistory (SearchFor,input,result,user_id,date_time)
  VALUES ('$SearchFor','$input','$div',5,CURRENT_TIMESTAMP())";

  if($conn->query($insert_sql)==true){
   ?>
     <script type="text/javascript">
      document.getElementById('divmsg').innerHTML="data insert succesfully";

     </script>
<?php
  }
  else {
?>
     <script type="text/javascript">
     document.getElementById('divmsg').innerHTML="error occured while inserting your data";
     </script>
<?php
}
$conn->close();

 ?>
