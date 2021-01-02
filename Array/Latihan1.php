<?php

//cara lama
$hari = array("senin", "selasa", "rabu", "kamis");

//cara baru
$bulan = ["januari", "februari", "maret", "april", "mei"];

//element pada array boleh memiliki tipe data yang sama
$arr1 = [123, "ilham", true];

//menampilkan array tidak bisa pakai echo, bisanya pakai var_dump $ print_r
var_dump($arr1);
echo "\n";
print_r($hari);
echo "\n";

//menampilkan 1 elemen array
echo $bulan[0];
echo "\n";
echo "\n";

//menambahkan elemen baru pada array
$hari[] = "jumat";
var_dump($hari);


?>