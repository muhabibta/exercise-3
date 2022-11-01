<?php
function palindromeAngka($angka)
{
    $angka = (string)$angka;
    $angkaLength = strlen($angka);
    $checkNum = floor((int)$angkaLength / 2);

    if ($angkaLength % 2 === 0) {
        $genap = true;
    } else {
        $genap = false;
    }

    if ($angka >= 10) {
        while ($angka) {
            if ($genap) {
            }
        }
    } else {
        echo "Silakan masukkan angka yang lebih besar dari 10";
    }
}

$angka = 804;
palindromeAngka($angka);
?>