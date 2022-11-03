<?php

//Class
class wargasekolah{
    //property
    var $kepsek;
    var $guru;
    var $murid;

    //function
    function kpl_sekolah(){
        return "Kepsek Kite adalah";
    }
    function guru_sekolah(){
        return "Guru Kite adalah";
    }
    function mrd_sekolah(){
        return "Murid Kite adalah";
    }
}

//Instansiasi
$kita = new wargasekolah();

// Isi Properti
$kita->kepsek = "Pak Lilik";
$kita->guru = "Pak Saiful";
$kita->murid = "Pak Hasan";

//Tampilkan
echo $kita->kpl_sekolah()," ",$kita->kepsek;
echo "<br />";
echo $kita->guru_sekolah()," ",$kita->guru;
echo "<br />";
echo $kita->mrd_sekolah()," ",$kita->murid;



?>
