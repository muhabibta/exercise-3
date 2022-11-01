<?php

// Direction 1
echo "**1. Menyusun Barisan Bintang**</br>";

function _rows1($rows1){
    for($i=0;$i<$rows1;$i++){
        echo "*</br>";
    }
}

echo "**Output**</br></br>Jika rows1 = 5</br>";
_rows1(5);

echo "</br>";

// Direction 2
echo "**2. Menyusun Barisan Bintang Dengan Nested Looping**</br>";

function _rows2($rows2){
    for($i=0; $i<$rows2; $i++){
        for($a=0; $a<$rows2; $a++){
            echo "*";
        }
        echo "</br>";
    }
}
echo "**Output**</br></br>Jika rows2 = 5</br></br>";
_rows2(5);

echo "</br>";

// Direction 3
echo "**3. Menyusun Barisan Tangga Bintang Dengan Nested Looping**</br>";

function _rows3($rows3){
    for($i=0; $i<=$rows3; $i++){
        for($a=0; $a<$i; $a++){
            echo "*";
        }
        echo "</br>";
    }
}
echo "**Output**</br></br>Jika rows3 = 5</br>";
_rows3(5);

echo "</br>";

// Direction 3
echo "**4. Menyusun Barisan Tangga Bintang Terbalik Dengan Nested Looping**</br>";

function _rows4($rows4){
    for($i=0; $i<=$rows4; $i++){
        for($a=$rows4; $a>$i; $a--){
            echo "*";
        }
        echo "</br>";
    }
}
echo "**Output**</br></br>Jika rows4 = 5</br></br>";
_rows4(5);

echo "</br>";
?>