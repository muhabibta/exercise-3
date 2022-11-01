<?php
function cariMedian($arr)
{
    $panjangArr = 0;
    foreach ($arr as $key => $value) {
        $panjangArr++;
    }

    $Median = $panjangArr / 2;
    
    if ($panjangArr % 2 !== 0) {
        $_Median = $arr[$Median - 0.5];
    } else {
        $_Median = ($arr[$Median - 1]  + $arr[$Median]) / 2;
    }
    echo "Median: $_Median";
    return $_Median;
}


cariMedian([1, 3, 3]);
?>