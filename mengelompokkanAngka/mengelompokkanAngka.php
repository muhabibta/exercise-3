<?php
function mengelompokkanAngka($arr)
{
    $newArr = [[], [], []];
    $Ganjil = 0;
    $Genap = 0;
    $Prima = 0;
    if ($arr) {
        foreach ($arr as $index => $value) {
            if ($value % 2 === 0 && $value % 3 !== 0) {
                $newArr[0][$Genap] = $value;
                $Genap++;
            } elseif ($value % 3 === 0) {
                $newArr[2][$Ganjil] = $value;
                $Ganjil++;
            } else {
                $newArr[1][$Prima] = $value;
                $Prima++;
            }
        }
    }
    print_r($newArr);
    return $newArr;
}


mengelompokkanAngka([2, 4, 6]);
?>