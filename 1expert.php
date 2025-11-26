<?php

// Identitas
$nama = "Yuliana";
$alamat = "Bojongsoang";
$jenis_kelamin = "Perempuan";
$no_hp = "08123456789";

// Hitung jumlah karakter string pada nama
$jumlah_karakter = strlen($nama);

// Jumlahkan semua angka pada nomor HP
$nilai = 0;
foreach (str_split($no_hp) as $digit) {
    if (is_numeric($digit)) {
        $nilai += $digit;
    }
}

// Logika pengecekan
$cek1 = ($nilai < 30 && $nilai % 2 == 1);
$cek2 = ($nilai > 30 || $nilai % 2 == 2);

echo "Nama : $nama\n";
echo "<br>";

echo "Alamat : $alamat\n";
echo "<br>";

echo "Jenis Kelamin : $jenis_kelamin\n";
echo "<br>";

echo "No HP : $no_hp\n\n";
echo "<br>";

echo "Jumlah Karakter Nama : $jumlah_karakter\n";
echo "<br>";

echo "Jumlah Semua Angka No HP : $nilai\n\n";
echo "<br>";

// var_dump sesuai instruksi
echo "Cek 1: ";


var_dump($cek1);
echo "<br>";

echo "Cek 2: ";
var_dump($cek2);

?>