<?php

// Penggunaan array menggunakan for san foreach
// For perulangan yang akan di ulang sesuai set yang kita atur

// Variabel angka memiliki nilai pertama = 0 dan diakhiri kurang atau sama dengan 10, dihitung increment.
// for($angka = 0; $angka <= 10; $angka++){
//     echo "Angkanya adalah : $angka <br>";
// }

// Foreach = string, char
// Foreach mengulang sesuai niai yang mau diambil (key)
$warna = array("Merah","hijau*","biru","kuning");

// foreach($warna as $variasi) {
//     echo "Berwarna : $variasi <br>";
// }

// Tugas menerapkan For dan Foreach menggunakan PHP
$days= ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
?>

<html>
    <head>
        <title>Latihan menggunakan for dan foreach</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        for ($hari = 0; $hari < count($days); $hari++){
        ?>
        <div class="box">
            <?php echo $days[$hari];?>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <?php foreach($days as $hari_hari) { ?>
            <div class="box2">
            <?php echo $hari_hari;?>
        </div>
        <?php } ?>