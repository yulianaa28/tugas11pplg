<?php
function hitung($angka1, $angka2) {
    return $angka1 + $angka2;
}

$umur = 24;              
$digit1 = floor($umur / 10);  
$digit2 = $umur % 10;          

$hasil = hitung($digit1, $digit2);

echo "Jumlah angka umur saya $hasil";
?>