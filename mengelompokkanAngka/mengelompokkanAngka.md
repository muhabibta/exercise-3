# Mengelompokkan Angka

`WAJIB MEMBUAT FUNCTION.`

### RESTRICTION

- Tidak boleh menggunakan built-in function.

### HINTS

- Nama function haruslah `mengelompokkanAngka` dan __tidak boleh diganti dengan nama function lainnya__. Untuk detail fungsi akan mengacu kepada [Directions](#directions) yang disebutkan di bawah

---

## Objectives

- Mampu mengakses array dan melakukan manipulasi value di dalamnya
- Dapat menghasilkan array multi dimensi

### CLUES

`Clues bersifat tidak wajib diikuti, bila memiliki cara lain, silahkan lanjutkan!`

- Cukup menggunakan 1 kali looping.

- Jangan lupa gunakan counter untuk setiap jenis angka.

- Ingat baik-baik, array multidimensi hanya berjumlah 3, yang mengartikan Ia fixed atau tidak dinamis.

## Directions

Diberikan sebuah function bernama `mengelompokkanAngka` dimana function tersebut menerima satu paremeter denga tipe Array.

Buatlah algoritma di dalam function `mengelompokkanAngka` sehingga dapat menghasilkan hasil seperti contoh berikut:

```php
function mengelompokkanAngka(arr) {
  // you can only write your code here!
}

print_r(mengelompokkanAngka([2, 4, 6])); // [ [2, 4], [], [6] ]
print_r(mengelompokkanAngka([1, 2, 3, 4, 5, 6, 7, 8, 9])); // [ [ 2, 4, 8 ], [ 1, 5, 7 ], [ 3, 6, 9 ] ]
print_r(mengelompokkanAngka([100, 151, 122, 99, 111])); // [ [ 100, 122 ], [ 151 ], [ 99, 111 ] ]
print_r(mengelompokkanAngka([])); // [ [], [], [] ]
```