<?php

        function hexToDec(){
        $nmb='';
        $value=$_POST['input'];
        $nmb=$value;
        $dec=0;
        $cnt=strlen($nmb);
        $pow=1;
        $dig;
        for($j=$cnt-1;$j>=0;$j--){

                switch ($nmb[$j])
                {
                        case 'A':
                        $dig=10;
                        break;
                        case 'B':
                        $dig=11;
                        break;
                        case 'C':
                        $dig=12;
                        break;
                        case 'D':
                        $dig=13;
                        break;
                        case 'E':
                        $dig=14;
                        break;
                        case 'F':
                        $dig=15;
                        break;
                        default:
                        $dig=$nmb[$j];
                }

        $dec=$dec+($dig*$pow);
        $pow=$pow*16;

        }

        return $dec;
    }
?>
