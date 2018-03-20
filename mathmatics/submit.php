<?php
  include 'Gcd.php';
  include 'Lcm.php';
  include '../include/connect.php';
  $s1=$_POST['matselectid1'];
  $nmb1=$_POST['matinput1'];
  $nmb2=$_POST['matinput2'];
  $input= $nmb1."--".$nmb2;
 if($s1=="gcd") {
   $math = gcd();

 }
 else if  ($s1=="lcm") {
  $math=lcm();

}
echo $math;
$insert_sql="INSERT INTO SearchHistory (SearchFor,input,result,user_id,date_time)
VALUES ('$s1','$input','$math',5,CURRENT_TIMESTAMP())";

if($conn->query($insert_sql)==true){
 ?>
   <script type="text/javascript">
    document.getElementById('matmsg').innerHTML="data insert succesfully";
   </script>
<?php
}
else {
?>
   <script type="text/javascript">
   document.getElementById('matmsg').innerHTML="error occured while inserting your data";
   </script>
<?php
}
$conn->close();

 ?>
