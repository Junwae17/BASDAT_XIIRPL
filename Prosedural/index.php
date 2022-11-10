<?php

// Prosedural adalah pemrograman yang tidak perlu adanya instansiasi, cukup menggunakan fungsi (function)

// Contoh dari prosedural
echo date('D-M-Y'); //FUNGSI TANPA ADANYA OBJEK

// Contoh dari pendekatan objek

$date = new DateTime(); // OBJEK
echo $date->format('D-M-Y');


?>