<?php


function div()
{
    $low=$_POST['divinput1'];
    $high=$_POST['divinput2'];
    $dnmb=$_POST['divinput3'];
    $result="";
    $count=0;

    for($i=$low;$i<=$high;$i++){

        if($i%$dnmb==0){

          $count++;
        }

    }
      return $result.="count of two number divisible is: ".$count;
}
 ?>
