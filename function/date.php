<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");

echo "<br>";

// Time
// UNIX timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
echo time();

echo "<br>";

echo date("d M Y", time()-60*60*24*100); // - waktu kebelakang, + waktu kedepan

echo "<br>";

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,9, 10, 2004));

echo "<br>";

// strtotime
echo date("l", strtotime("10 September 2004"));

echo "<br>";
?>