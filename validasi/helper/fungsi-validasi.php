<?php

require_once 'fungsi-pesan-error.php';

function validasi(array $listinput){
    // Variabel berisi inputan form 
    $request = $_REQUEST;

    // Memanggil semua variabel error
    $errors = [];
    
    // Mengakses variabel $listPesanError
    global $listPesanError;

    // Perulangan untuk array terluar (berisi nama input)
    foreach($listinput as $input => $listrules){
        echo "Periksa Input <strong>{$input}</strong><br>";

        // Menggunakan foreach untuk memanggil semua fungsi yang bernama LOLOS
        foreach($listrules as $rules){
            $namaFungsi = 'lolos'.ucfirst($rules);
            // Validasi sesuai input formnye
            $lolos = $namaFungsi($request[$input]);
            // Buatkeun bool (lolos atau tidak lolos)

            // Jika tidak lolos maka munculkan pesan error
            if(!$lolos){
                if(!is_array($errors[$input])){
                    $errors += [$input => []];
                }
                array_push($errors[$input], $listPesanError[$rules]($input));
            }
        }
        echo "<br>";
    }
    return $errors;
}

function lolosrequired($nilai){
    return(bool)$nilai;
}

// Fungsi validasi Email
function lolosEmail($nilai){
    return filter_var($nilai, FILTER_VALIDATE_EMAIL);
}

// Fungsi lolos username menggunakan Regex (Regular Expretion)
function lolosUsername($nilai){
    preg_match("/^[a-zA-Z0-9_]+/", $nilai, $output);
    if(count($output)){
        return $output[0] === $nilai;
    }
    return false;
}

// Fungsi lolos usia (harus menggunakan numeric)
function lolosNumeric($nilai){
    return is_numeric($nilai);
}

?>