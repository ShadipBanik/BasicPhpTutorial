
<?php
function diamond()
{
   $row; $sp;$st;$r;$s;$d;
   $dianmb=$_POST['diainput1'];
   $temp=$dianmb;
   $temp2=$dianmb;
   $dia=$dianmb;
   $result="";
   for ( $row = 1 ; $row <= $dianmb ; $row++ )
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
    for($r=$dia-1;$r>=1;$r--){
      for($s=1;$s<=$temp2-$r;$s++){
        $result.=" ";
       }
       for( $d = 1 ; $d<=2*$r-1; $d++ ){
         $result.="*";

       }
       $result.="<br>";
     }
     return nl2br($result);
}
 ?>
