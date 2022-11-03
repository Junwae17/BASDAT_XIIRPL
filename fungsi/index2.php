<?php
//function itu ada 2, ada yang mengembalikan nilai dan ada yang tidak
//Array yang berisi 3 nilai
$a = ['merah','kuning','biru'];

//fungsi is_null itu mengembalikan nilai bernilai true or false
$fungsi_is_null = is_null($a);

//fungsi dari is_array itu mengemblikan apakah array atau tidak
$fungsi_is_array = is_array($a);

//fungsi dari count
$panjang = count($a);

//fungsi mengenkripsikan karakter MD5 
$enkripsi = md5('Kangen coy');

//fungsi var_dump untuk menampilkan hasil dari function return
var_dump($fungsi_is_null);
echo "<br />";
var_dump($fungsi_is_array);
echo "<br />";
var_dump($panjang);
echo "<br />";
var_dump($enkripsi)

?>