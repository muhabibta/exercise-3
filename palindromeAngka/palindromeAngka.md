# Palindrome Angka

`WAJIB MEMBUAT FUNCTION.`

### RESTRICTION

- Hanya boleh menggunakan built-in function untuk MENGKONVERSI TIPE DATA, seperti toString(), Number(), dll

- Angka minimal `harus memiliki 2 digit`. Angka seperti 1 sampai 9, `TIDAK DIANGGAP` sebagai palindrome.

- Seluruh angka memiliki nilai positif, `LEBIH DARI 0`  (>= 0) dan `BUKAN` floating number.

### HINTS

- Variable `angka` __tidak boleh diganti dengan variabel lain__ dan penggunaannya sesuai dengan [Directions](#directions) yang disebutkan di bawah.

---

## Objectives

- Mampu memecahkan masalah yang diberikan
- Mampu menggabungkan konsep `looping/iteration` dan `conditional` didalam sebuah masalah
- Mampu mengubah/convert tipe data string ke number ataupun sebaliknya
- Mampu membedakan penggunaan while dan for
- Mampu memberhentikan sebuah loop menggunakan `break` / `assign ulang` value.

### CLUES

`Clues bersifat tidak wajib diikuti, bila memiliki cara lain, silahkan lanjutkan!`

- Ingat baik-baik bagaimana cara run looping dari array belakang. Ingat decrement, increment dan lainnya.

## Directions

Diberikan sebuah variabel `angka` bertipe number.

Buatlah program yang menampilkan angka palindrome selanjutnya dari `angka` yang diberikan.

Contoh jika `angka` bernilai 27 maka outputnya adalah 33 karena angka 33 merupakan angka palindrome.

penjelasan:

setelah angka 27, adalah:

- 28 bukan angka palindrome. karena belum mendapatkan angka palindrome maka ditambahkan lagi
- 29 bukan angka palindrome. karena belum mendapatkan angka palindrome maka ditambahkan lagi
- 30 bukan angka palindrome. karena belum mendapatkan angka palindrome maka ditambahkan lagi
- 31 bukan angka palindrome. karena belum mendapatkan angka palindrome maka ditambahkan lagi
- 32 bukan angka palindrome. karena belum mendapatkan angka palindrome maka ditambahkan lagi
- 33 angka palindrome. Karena angka palindrome telah ditemukan maka loop harus berhenti dan menampilkan angka 33

```php
Contoh 1:
$angka = 10;

maka output yang dihasilkan adalah 11

Contoh 2:
$angka = 175;

maka output yang dihasilkan adalah 181
```
