<?php

// Comments
// Ini adalah komentar satu baris

/*
Ini adalah komentar
beberapa baris
*/

// Variables
$nama = "John Doe"; // Variabel untuk menyimpan nama
$umur = 30; // Variabel untuk menyimpan umur

// Echo / Print
echo "Halo, nama saya $nama dan saya berumur $umur tahun."; // Menampilkan pesan
print "Halo, nama saya $nama dan saya berumur $umur tahun."; // Menampilkan pesan

// Data Types
$integer = 10; // Tipe data integer
$float = 3.14; // Tipe data float
$string = "Hello, World!"; // Tipe data string
$boolean = true; // Tipe data boolean

// Strings
$pesan = "Halo, ini adalah string."; // Variabel string

// Numbers
$a = 10; // Variabel angka 1
$b = 20; // Variabel angka 2

// Math
$hasil_penjumlahan = $a + $b; // Menjumlahkan $a dan $b
$hasil_pengurangan = $a - $b; // Mengurangi $a dari $b
$hasil_perkalian = $a * $b; // Mengalikan $a dan $b
$hasil_pembagian = $a / $b; // Membagi $a dengan $b

// Constants
define("PI", 3.14); // Mendefinisikan konstanta PI

// Magic Constants
echo __FILE__; // Nama file ini
echo __LINE__; // Nomor baris saat ini

// Operators
$x = 10;
$y = 5;

$penjumlahan = $x + $y; // Penjumlahan
$pengurangan = $x - $y; // Pengurangan
$perkalian = $x * $y; // Perkalian
$pembagian = $x / $y; // Pembagian
$modulus = $x % $y; // Modulus (Sisa bagi)

// If...Else...Elseif
if ($umur < 18) {
    echo "Anda masih di bawah umur."; // Jika umur kurang dari 18
} elseif ($umur >= 18 && $umur < 30) {
    echo "Anda sudah dewasa muda."; // Jika umur antara 18 dan 30
} else {
    echo "Anda sudah dewasa."; // Jika umur lebih dari atau sama dengan 30
}

// Switch
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah Senin.";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa.";
        break;
    default:
        echo "Hari ini adalah hari lain.";
        break;
}

// Loops
for ($i = 0; $i < 5; $i++) {
    echo "Iterasi ke-$i <br>"; // Looping for
}

$angka = 1;
while ($angka <= 5) {
    echo "Angka: $angka <br>"; // Looping while
    $angka++;
}

// Functions
function tambah($a, $b) {
    return $a + $b; // Fungsi penjumlahan
}

$hasil = tambah(5, 3); // Memanggil fungsi tambah
echo "Hasil penjumlahan: $hasil";

// Arrays
$buah = array("Apel", "Jeruk", "Pisang"); // Array buah

// Superglobals
echo $_SERVER['PHP_SELF']; // Nama script yang sedang dieksekusi
echo $_SERVER['SERVER_NAME']; // Nama server
echo $_SERVER['REQUEST_METHOD']; // Metode permintaan (GET atau POST)

?>
