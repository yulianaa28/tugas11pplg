<?php

$siswa = [
    [101, "surutou", "Jl. Merdeka No.12", "08123456789", "Laki-laki"],
    [102, "noor", "Jl. Sudirman No.45", "082233445566", "Perempuan"],
    [103, "kinato", "Jl. Mawar No.9", "085323456789", "Laki-laki"]
];

foreach ($siswa as $data) {
    echo "NIS: " . $data[0] . "<br>";
    echo "Nama: " . $data[1] . "<br>";
    echo "Alamat: " . $data[2] . "<br>";
    echo "No Telp/WA: " . $data[3] . "<br>";
    echo "Jenis Kelamin: " . $data[4] . "<br><br>";
}

?>