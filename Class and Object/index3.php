<?php
//class SMKJP1

class smkjp1{
    //property
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdiri tegap";
    }
    function berlari(){
        return "berlari 1000 meter";
    }
}
// instansiasi
$sekolah = new smkjp1();

//eksperimen 
$smkjpone = new smkjp1();

//isi property
$sekolah->guru = "Pak Iip";
$sekolah->murid = "Ahmad";

//tampilkan
echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br />"; 
echo $sekolah->murid," ",$sekolah->berlari();
echo "<br />";

//tampilkan
echo $sekolah->guru," ",$sekolah->berlari();
echo "<br />"; 
echo $sekolah->murid," ",$sekolah->berdiri();
?>