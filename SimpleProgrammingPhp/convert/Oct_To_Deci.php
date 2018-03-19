<?php

    function octToDec(){

         $nmb=$_POST['input'];
         $bin=0;

         $pow=1;
         $result='';
         $re;

         while ($nmb>0){
           $re=$nmb%10;
           $bin=$bin+($re*$pow);
           $nmb=$nmb-$re;
           $nmb=$nmb/10;
           $pow=$pow*8;

         }

         return $bin;
    }


 ?>
