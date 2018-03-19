<?php

 function   gcd(){
   $nmb1=$_POST['matinput1'];
   $nmb2=$_POST['matinput2'];
   $gcd;

   while($nmb1!=$nmb2){
        if($nmb1>$nmb2){
           $nmb1=$nmb1-$nmb2;
        }
        else{

          $nmb2=$nmb2-$nmb1;
        }
   }
   $gcd=$nmb1;
   return $gcd;

 }



 ?>
