<?php

$arrayBuah = ["Alpukat", "Mangga", "Apel", "Semangka", "Rambutan", "Jeruk", "Jeruk Nipis"];

// Sort mengurutkan value dari suatu array
sort($arrayBuah);

// array_pop menghapus value array yang paling akhir 
array_pop($arrayBuah);

// unset menghapus spesifik value pada array
unset($arrayBuah[0]);

// Menambahkan value pada array dibelakang
array_push($arrayBuah, 'Durian');

// Menghapus value yang paling depan
array_shift($arrayBuah);

// Menambahkan value array didepan
array_unshift($arrayBuah, 'Buah Naga');

$arrayBuah[2] = 'Pisang';

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}

