<?php

// Array adalah tipe data yang berisi beberapa tipe data (string maupun integer)
//Keynya diawali dengan angka 0 dst.

// <---Array asosiatif---> \\
//Keynya berubah menjadi tipe data string

$siswa = [
    // keynya bisa int/string
    'sipalingganteng' => 'gweh',
    'sipalingcantik' => 'binikgweh',
    'sipalingnetral' => 'bapakgweh',
];

// echo "Siapa yang paling ganteng? {$siswa['sipalingganteng']}";

// <---Array Multidimention---> \\
//ada array di dalam array

$togel = [
    [1, 2, 3 ,4, 5],
    [6, 7, 8 ,9, 22],
    [12, 15, 13, 14, 51],
    [19, 21, 31, 47, 35]
];

//cara memanggil array
// echo $togel[3][2];

// <---Array Push---> \\
// array push berguna untuk menerima 2 parameter, parameter pertama : untuk target, parameter kedua untuk nilai yang akan dimasukkan
$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

// Cara pertama untuk menambahkan items
array_push($buah,'timun');

// Cara kedua
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];

?>