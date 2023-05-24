<?php

// Membuat Array
$arrayBuah = ["Alpukat", "Mangga", "Apel", "Semangka", "Rambutan", "Jeruk", "Jeruk Nipis"];

// Cara Pertama
print_r($arrayBuah);
echo "<br>";
// Cara Kedua
var_dump($arrayBuah);
echo "<br>";
// Cara Ketiga
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}

