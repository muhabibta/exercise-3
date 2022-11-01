# Logic Challenge - Interesting Ladder Array Multidimensi

### HINTS

- Nama function haruslah `ladder` dan __tidak boleh diganti dengan nama function lainnya__. Untuk detail fungsi akan mengacu kepada [Directions](#directions) yang disebutkan di bawah

---

## Objectives

- Mampu memecahkan sebuah masalah dengan `nested loop`
- Mengerti logika `nested loop`
- Dapat melihat pola dari posisi baris dan kolom sebuah pola yang diberikan
- Mampu membuat array multidimensi dari sebuah string yang diberikan

## Directions

Diberikan sebuah function `ladder` berisi satu parameter bertipe string

Buatlah program yang menghasilkan gambar yang menyerupai tangga dengan pola sebagai berikut:

- kata yang paling atas adalah kata itu sendiri dengan catatan masing-masing huruf berada di indeks berbeda di satu array
- setiap turun, huruf akan berkurang 1 dari belakang (dari value kata awal)

```php
function ladder(word) {
    //your code here
};

// DRIVER CODE
print_r(ladder('4angrymen'));
[
  [ '4', 'a', 'n', 'g', 'r', 'y', 'm', 'e', 'n' ],
  [ '4', 'a', 'n', 'g', 'r', 'y', 'm', 'e' ],
  [ '4', 'a', 'n', 'g', 'r', 'y', 'm' ],
  [ '4', 'a', 'n', 'g', 'r', 'y' ],
  [ '4', 'a', 'n', 'g', 'r' ],
  [ '4', 'a', 'n', 'g' ],
  [ '4', 'a', 'n' ],
  [ '4', 'a' ],
  [ '4' ]
];
```
