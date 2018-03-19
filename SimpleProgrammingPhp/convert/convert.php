<?php
include 'Deci_To_Bin.php';
include 'Deci_To_Oct.php';
include 'Deci_To_Hexa.php';
include 'Bin_To_Dec.php';
include 'Bin_To_Oct.php';
include 'Bin_To_Hex.php';
include 'Oct_To_Deci.php';
include 'Oct_To_Bin.php';
include 'Oct_To_Hex.php';
include ("Hex_To_Dec.php");
include ("Hex_To_Bin.php");
include ("Hex_To_Octal.php");


          $s1 = $_POST['selectid1'];
          $s2 = $_POST['selectid2'];
          $nmb=$_POST['input'];

      if ($s1=="decimal"  && $s2 =="binary" ) {
         $number = deciToBin();

      }
      else if  ($s1=="decimal"  && $s2=="octal") {
        $number=deciToOct();

      }
      else if  ($s1=="decimal"  && $s2=="hexadecimal") {
          $number=deciToHexa();

      }
      else if  ($s1=="decimal"  && $s2=="decimal")  {
         $nmb=$_POST['input'];
         $number=$nmb;


      }

      //bin to  others
      else if ($s1=="binary"  && $s2 =="decimal" ) {
          $number=binToDec();

      }
      else if  ($s1=="binary"  && $s2=="octal") {
        $number=binToOct();

      }
      else if  ($s1=="binary"  && $s2=="hexadecimal") {
        $number=binToHex();

      }
      else if  ($s1=="binary"  && $s2=="binary")  {
        $nmb=$_POST['input'];
        $number=$nmb;

      }
      //octal to others
      else if ($s1=="octal"  && $s2 =="decimal" ) {
          $number=octToDec();

      }
      else if  ($s1=="octal"  && $s2=="binary") {
          $number=octToBin();

      }
      else if  ($s1=="octal"  && $s2=="hexadecimal") {
          $number=octToHex();


      }
      else if  ($s1=="octal"  && $s2=="octal")  {
        $nmb=$_POST['input'];
        $number=$nmb;


      }
      //hexadecimal to others
      else if ($s1=="hexadecimal"  && $s2 =="decimal" ) {
          $number=hexToDec();


      }
      else if  ($s1=="hexadecimal"  && $s2=="binary") {
          $number=hexToBin();


      }
      else if  ($s1=="hexadecimal"  && $s2=="octal") {
          $number=hexToOct();


      }
      else if  ($s1=="hexadecimal"  && $s2=="hexadecimal")  {
        $nmb=$_POST['input'];
        $number=$nmb;


      }

      echo $number;

?>
