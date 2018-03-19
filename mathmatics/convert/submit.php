<?php
  include 'Gcd.php';
  include 'Lcm.php';
  $s1=$_POST['matselectid1'];
  $nmb1=$_POST['matinput1'];
  $nmb2=$_POST['matinput2'];
 if($s1=="gcd") {
   $math = gcd();

 }
 else if  ($s1=="lcm") {
  $math=lcm();

}
echo $math;

 ?>
