<?php

    function deciToBin(){

         $nmb=$_POST['input'];
         $bin= array();
         $i=0;
         $result='';
         $re;

         while ($nmb>0){
           $re=$nmb%2;
           $bin[$i]=$re;
           $nmb=$nmb-$re;
           $nmb=$nmb/2;
           $i++;

         }
         $cnt=count($bin)-1;
         for ($j=$cnt;$j>=0;$j--) {
             $result .=$bin[$j];

         }
         return $result;
    }


 ?>
