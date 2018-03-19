<?php

    function binToHex(){
                  $nmb=$_POST['input'];
                  $dec=0;
                  $pow=1;
                  $re;
                  //Again convert deci to hexa;
                  $rem;
                  $i=0;
                  $bin=array();
                  $result='';
                  while ($nmb>0)
                  {
                    $re=$nmb%10;
                    $dec=$dec+($re*$pow);
                    $nmb=$nmb-$re;
                    $nmb=$nmb/10;
                    $pow=$pow*2;
                  }
                  while ($dec>0)
                  {
                    $rem=$dec%16;
                    $bin[$i]=$rem;
                    $dec=$dec-$rem;
                    $dec=$dec/16;
                    $i++;

                  }
                  $cnt=count($bin)-1;
                  for ($j=$cnt;$j>=0;$j--)
                  {
                      switch ($bin[$j])
                      {
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
