<?php

$listPesanError = [
    'required' => function($field){
        return "Field ($field) harus diisi";
        // Pesan error jika tidak diisi
    },
    'email' => function($field){
        return "Field ($field) harus berupa email yang valid";
        // Pesan error jika isinya belum ada (@)
    },
    'username' => function($field){
        return "Field ($field) hanya boleh angka, huruf, dan underscore(_)";
        // Pesan error jika isinya REGEX
    },
    'numeric' => function($field){
        return "Field ($field) harus berupa angka";
        // Pesan error jika isinya huruf
    }
]
?>