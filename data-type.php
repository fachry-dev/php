<?php

// 1.String
    $karakter = "Hello";
    $karakter_juga = 'Hello';

// 2.Number
    $bulat = 16 ;
    $desimal = 3.14 ;

// 3. Boolean ---> true/false
    $flag = true ;

// 4.Associative array 
$data_diri = [
    "nama" => "FACHRY",
    "umur" => 22,
    "alamat" => [
        "kota" => "Jakarta",
        "jalan" => "Cakung_Timur"
    ]
];
var_dump($data_diri);

// var_dump untuk mencetak isi pajang  selagigus isi datanya

// 5. Null
$kosong = null ;
echo $kosong;
var_dump($kosong);