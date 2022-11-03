<?php
//Pewarisan atau inheritance

//Class induk
class komputer{
    public $merk;
    public $prosesor;
    public $memory;

    public function beli_komputer(){
        return "beli komputer baru";
        
    }
}

//Kelas turunan / extends dari class komputer ke class laptop
class laptop extends komputer{
    public function lihat_spek(){
        //ambil property dari class komputer
        return "merk: $this->merk,
         prosesor: $this->prosesor,
         memory: $this->memory";
    }
}

    //instansiasi
    //membuat objek baru dari class laptop (Kelas Turunan)
    $laptop_baru = new laptop();

    //isi propertinya
    $laptop_baru->merk = "Asus";
    $laptop_baru->prosesor = "AMD Ryzen 9X";
    $laptop_baru->memory = "1 PetaByte";

    //panggil functionnya
    echo $laptop_baru->beli_komputer();
    echo "<br />";
    echo $laptop_baru->lihat_spek();


?>