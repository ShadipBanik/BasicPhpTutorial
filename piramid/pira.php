<?php
function piramid()
{
   $row; $sp;$st;
   $nmb=$_POST['pirinput1'];
   $temp=$nmb;
   $result="";
   for ( $row = 1 ; $row <= $nmb ; $row++ )
   {
      for ( $sp = $temp-1;$sp>0; $sp-- ){
          $result.=" "; // space
            }
        $temp--;
      for( $st = 1 ; $st<=2*$row-1; $st++ ){
        $result.="*";

      }
       $result.= ("<br>");
   }
   return  nl2br($result);
}
?>
