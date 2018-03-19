<?php

 function octToBin(){


              $nmb=$_POST['input'];
              $dec=0;
              $pow=1;
              $re;
              //Again convert deci to oct;
              $rem;
              $i=0;
              $bin=array();
              $result='';
              while ($nmb>0){
                $re=$nmb%10;
                $dec=$dec+($re*$pow);
                $nmb=$nmb-$re;
                $nmb=$nmb/10;
                $pow=$pow*8;
              }
              while ($dec>0){
                $rem=$dec%2;
                $bin[$i]=$rem;
                $dec=$dec-$rem;
                $dec=$dec/2;
                $i++;

              }
              $cnt=count($bin)-1;
              for ($j=$cnt;$j>=0;$j--) {
                  $result .=$bin[$j];

              }
              return $result;


      }


 ?>
