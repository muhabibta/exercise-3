<?php

/**
 * =============
 * Disney Island
 * =============
 *
 * Buatlah function untuk memecahkan kasus berikut:
 * 
 * Sebuah wahana bermain 'Disney Island' akan memberikan tarif sesuai dengan tinggi dan umur anak
 * dengan ketentuan sebagai berikut:
 * - Umur 1 tahun ke bawah: Tampilkan 'Dilarang masuk'
 * - Umur 2-3 tahun: Rp 30.000. Jika tinggi anak umur 2-3 tahun lebih dari 70cm maka tarif akan bertambah 10.000
 * - Umur 4-7 tahun: Rp 40.000. Jika tinggi anak umur 4-7 tahun lebih dari 120cm maka tarif akan bertambah 15.000
 * - Umur 8-10 tahun: Rp 50.000. Jika tinggi anak umur 8-10 tahun lebih dari 150cm maka tarif akan bertambah 20.000
 * - Umur diatas 10 tahun : Rp 80.000
 * Tampilkan tarif harga sesuai umur dan tinggi seorang anak!
 *
**/
echo "=============</br>Disney Island</br>=============</br></br>";

function Tarif($umur,$tinggi){
    if($umur<=1){
        echo "Maaf, anak dilarang masuk";
    } elseif($umur<=3){
        $harga = 30000;
        if($tinggi>70){
            $harga += 30000;
        }
        echo "Tarif harga untuk anak umur $umur dengan tinggi $tinggi adalah Rp. $harga";
    } elseif($umur<=7){
        $harga = 40000;
        if($tinggi>120){
            $harga += 15000;
        }
        echo "Tarif harga untuk anak umur $umur dengan tinggi $tinggi adalah Rp. $harga";
    } elseif($umur<=10){
        $harga = 50000;
        if($tinggi>150){
            $harga += 20000;
        }
        echo "Tarif harga untuk anak umur $umur dengan tinggi $tinggi adalah Rp. $harga";
    }  elseif($umur>10){
        $harga = 80000;
        echo "Tarif harga untuk anak umur $umur dengan tinggi $tinggi adalah Rp. $harga";
    }
}
// Jika
// umur = 10
// tinggi = 120
Tarif(10,120);
?>