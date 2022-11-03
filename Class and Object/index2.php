<?php

//Cara mengakses class dan object
class mobil{
    //property
    var $merk;
    var $roda;
    var $kecepatan;

    //Membuat fungsi/operasi berjalan (maju dan mundur)
    function jalan_maju(){
        return "vrooooomm maju";
    }
    function jalan_mundur(){
        return "vrooooomm ciitttttt mundur";
    }
}

//instansiasi (menginstankan variabel yang menghubungkan dari class keluar class)
//mobil_keren itu objek
$mobil_keren = new mobil();

 //set property
 $mobil_keren->merk="Lamborghini";
 $mobil_keren->roda="Hitam";
 $mobil_keren->kecepatan="500Kmh";

 //Tampilkan propertinya
 echo $mobil_keren->merk;
 echo "<br />";
 echo $mobil_keren->roda;
 echo "<br />";
 echo $mobil_keren->kecepatan;

 //tampilkan function
 echo "<br />";
 echo $mobil_keren->jalan_maju();
 echo "<br />"; 
 echo $mobil_keren->jalan_mundur();

?>