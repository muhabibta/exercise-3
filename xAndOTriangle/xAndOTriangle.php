<?php

function xAndOTriangle($num)
{
   
    for ($a = 0; $a < $num; $a++){
        for ($c = $num; $c > $a + 1; $c--){
            echo " ";
        }
        for ($b = 0; $b <= $a; $b++){
            if ($b === $num) {
                echo 'x';
            }
            echo "xo";
        }
        echo "</br>";
    }
}

xAndOTriangle(3);
?>