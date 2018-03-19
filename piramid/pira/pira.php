<?php
function piramid()
{
   $row; $sp;$st;
   $nmb=$_POST['pirinput1'];
   $temp=$nmb;
   $result='';
   for ( $row = 1 ; $row <= $nmb ; $row++ )
   {
      for ( $sp = 1 ; $sp<=$temp ; $sp++ ){
          $result.=""; // space
            }
            $temp--;
      for( $st = 1 ; $st<=$row; $st++ ){
        $result.="* ";

      }
       $result.= ("&#13;");
   }
   return  $result;
}
?>
