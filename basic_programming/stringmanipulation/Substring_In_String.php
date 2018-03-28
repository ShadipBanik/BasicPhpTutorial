<?php


function string()
{
     $Str=$_POST['strinput1'];
     $Sub=$_POST['strinput2'];
     $count1=0;
     $count=0;
     $len1 = strlen($Str);
     $len2 = strlen($Sub);
    for ($i=0; $i<$len1;)
    {
       $j = 0;
      $count =0;
      while($j<$len2)
      {
                if ($Str[$i]==$Sub[$j])
              {
                   $count++;
                   $i++;
                   $j++;
              }
                else
                  break;
        }

        if ($count==$len2)
        {
            $count1++;
            $count=0;
        }
        else if ($count==$len2-1) {
          $i=$i;
        }
        else
        $i++;

    }
          if($count1 !=0){
                $result =$Sub." occur ".$count1." times in string";
             }
         else{
               $result = $Sub." not found in string";
          }
             return  $result;
}

 ?>
