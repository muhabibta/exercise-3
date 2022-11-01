<?php
function ladder($word){
    $arr = [];
    $idx = 1;
    for ($a = 0; $a <= strlen($word) - 1; $a++) {
        for ($b = 0; $b <= strlen($word) - $idx; $b++) {
            $arr[$a][$b] = $word[$b];
        }
        $idx++;
    }

    print_r($arr);
    return $arr;
}

ladder("4angrymen");

?>