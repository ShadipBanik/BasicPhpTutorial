<?php

    function deciToHexa(){

         $nmb=$_POST['input'];
         $bin= array();
         $i=0;
         $result='';
         $re;

         while ($nmb>0){
           $re=$nmb%16;
           $bin[$i]=$re;
           $nmb=$nmb-$re;
           $nmb=$nmb/16;
           $i++;

         }
         $cnt=count($bin)-1;
         for ($j=$cnt;$j>=0;$j--) {

            switch ($bin[$j]) {
              case 10:
                  $bin[$j]='A';
                break;
              case 11:
                  $bin[$j]='B';
                break;
              case 12:
                  $bin[$j]='C';
                break;
              case 13:
                  $bin[$j]='D';
                break;
              case 14:
                  $bin[$j]='E';
                break;
              case 15:
                  $bin[$j]='F';
                break;
            }


             $result .=$bin[$j];

         }
         return $result;
    }


 ?>
