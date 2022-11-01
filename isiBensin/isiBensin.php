<?php

/***
  ==========
  ISI BENSIN
  ==========
 
  Buatlah sebuah FUNGSI dengan DUA PARAMETER -> `tipeBensin` dan `uang` yang akan menentukan berapa jumlah liter yang akan didapatkan sebuah mobil
  sesuai dengan uang yang dimiliki pengguna mobil tersebut
 
  Ketika sebuah mobil tidak memiliki `tipe bensin` atau `uang` maka tampilkan 'Tidak ada tipe bensin dan uang'
 
  Ketika `tipe bensin` mobil tersebut adalah `solar` maka biaya pengisian bensinnya adalah 5000 setiap liternya,
  Ketika `tipe bensin` mobil tersebut adalah `premium` maka biaya pengisian bensinnya adalah 7500 setiap liternya.
  Ketika `tipe bensin` mobil tersebut adalah `pertamax` maka biaya pengisian bensinnya adalah 10000 setiap liternya.
 
  Ketika pengisian bensin hasil nya tidak bulat maka hanya tampilkan satu angka dibelakang koma.
 
  contoh:
  1. tipe bensin = solar
  2. uang = 30000
 
  Output => Mobil anda telah terisi solar sebanyak 6.0 lt
 
  1. tipe bensin = premium
  2. uang = 35000
 
  Output => Mobil anda telah terisi premium sebanyak 4.6 lt
 */

echo "==========</br>ISI BENSIN</br>==========</br></br>";

function isiBensin($tipeBensin,$uang){
  if(strcasecmp($tipeBensin,"solar") ==0){
    $harga = 5000;
  } elseif(strcasecmp($tipeBensin,"premium") ==0){
    $harga = 7500;
  } elseif(strcasecmp($tipeBensin,"pertamax") ==0){
    $harga = 10000;
  } else {
    echo "Tidak ada tipe bensin dan uang";
  }
  $bensin = round($uang / $harga, 1);
  echo "Mobil anda telah terisi $tipeBensin sebanyak $bensin lt.";
}


// Jika mengisi bensin premium dengan uang 35000

isiBensin("premium",35000);
?>