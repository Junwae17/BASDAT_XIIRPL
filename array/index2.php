<?php

$warnaterang = ['kuning','hijau','pink'];
$warnagelap = ['hitam','abu','cokelat'];

// Gabungkan 2 array menjadi 1
$warna_warna = array_merge($warnaterang, $warnagelap);

// Array_merge bisa ditambahkan lebih dari 2
$warna_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['Margenta','Cyan','Hijau Kelabu']
);

// Unpacking untuk mengekstrak array menggunakan....
$list_buah_lokal = ['Mangga','Rambutan'];
$list_buah = ['Kurma','Anggur',$list_buah_lokal, 'Kismis'];

// Kurma, Anggur, Mangga, Rambutan, Kismis

// Explode array berfungsi memecah belah string lalu diubah ke dalam array

// Explode ada 2 parameter : delimiter (pemisah), string sasaran (Sasaran yang akan kita pecah menjadi array)

$siswa = "andi budi dono kasino indro";
var_dump(explode(" ",$siswa));

// Impload fungsi mengembalikannya expload
// impload dia 2 parameter : glue (Penggabung), array sasaran (sasaran yang akan kita gabung menjadi string)

$siswa_pintar = ['Refa', 'Agus', 'Novan'];
$siswa_jago = implode(' ',$siswa_pintar);


?>