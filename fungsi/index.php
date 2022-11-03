<?php

//card membuat function tidak memakai class
function ngoding(){

}
//functionnya bisa dikategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}

//mencoba buat fungsi sapa teman
function sapa_teman(){
    echo "<h1>Hai cok</h1>";
    echo "<h3>ketemu lgi bersama gweh</h3>";
}

//mencoba membuat fungsi yang ada parameter
function temen($temen_gweh, $umur){
    echo "<h2>heii gue disini bersama {$temen_gweh}</h2>";
    echo "<h2>umur die sgini{$umur}</h2>";
}

//cara panggil fungsi
//tuliskan nama fungsinya bersama()
sapa_teman();
temen("riski","13");

// tambah komen

//mencoba membuat fungsi menggunakan percabangan
function kasir($nama,$jumlah){
    echo "<h1>hai {$nama}, makasih loh</h1>";
    echo "<h3>dan jgn lupa balik lgi!</h3>";

    //membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah > 100){
        echo "<h1>anjay lu depet nilai {$jumlah} cokk</h1>";
    }
}

kasir("billar","200");

?>