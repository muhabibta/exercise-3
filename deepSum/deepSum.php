<?php

function deepSum($arr)
{
    if (!$arr) {
        echo "No Result";
    } else {
        $totalArr = 0;

        foreach ($arr as $a => $subArray) {
            foreach ($subArray as $b => $subSubArray) {
                foreach ($subSubArray as $c => $value) {
                    $totalArr += $value;
                }
            }
        }

        echo ($totalArr);
        return $totalArr;
    }
}

$_Arr = [
    [[20, 10], [15], [1, 1]],
    [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], [2], [9, 11]],
    [[3, 5, 1], [1, 5, 3], [1]],
    [[2]]
];

deepSum($_Arr);