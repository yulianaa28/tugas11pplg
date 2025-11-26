<?php

$siswa = [
    [
        "nis" => 201,
        "nama" => "fida surorou",
        "alamat" => "gepea",
        "telp" => "089612345678",
        "jenis_kelamin" => "Laki-laki"
    ],
    [
        "nis" => 202,
        "nama" => "intan noor",
        "alamat" => "indimirit picung",
        "telp" => "087812345678",
        "jenis_kelamin" => "Perempuan"
    ],
    [
        "nis" => 203,
        "nama" => "kiran kinat",
        "alamat" => "lewidulang",
        "telp" => "081356789012",
        "jenis_kelamin" => "Laki-laki"
    ]
];

foreach ($siswa as $data) {
    echo "NIS: " . $data["nis"] . "<br>";
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Alamat: " . $data["alamat"] . "<br>";
    echo "No Telp/WA: " . $data["telp"] . "<br>";
    echo "Jenis Kelamin: " . $data["jenis_kelamin"] . "<br><br>";
}

?>