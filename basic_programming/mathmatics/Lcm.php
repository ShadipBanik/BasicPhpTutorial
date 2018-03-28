<?php

 function   lcm(){
   $nmb1=$_POST['matinput1'];
   $nmb2=$_POST['matinput2'];
   $gcd;
   //Again gcd to lcm.
   $x=$nmb1;
   $y=$nmb2;
   $lcm;
   while($nmb1!=$nmb2){
        if($nmb1>$nmb2){
           $nmb1=$nmb1-$nmb2;
        }
        else{

          $nmb2=$nmb2-$nmb1;
        }
   }
   $gcd=$nmb1;
   $lcm=($x*$y)/$gcd;

   return $lcm;

 }



 ?>
