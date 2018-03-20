<?php

    function deciToOct(){

         $nmb=$_POST['input'];
         $bin= array();
         $i=0;
         $result='';
         $re;

         while ($nmb>0){
           $re=$nmb%8;
           $bin[$i]=$re;
           $nmb=$nmb-$re;
           $nmb=$nmb/8;
           $i++;

         }
         $cnt=count($bin)-1;
         for ($j=$cnt;$j>=0;$j--) {
             $result .=$bin[$j];

         }
         return $result;
    }


 ?>
