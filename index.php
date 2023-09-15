<?php

// String 
$string = "Tipe data string digunakan untuk menampilkan karakter ";

$namaDepan = 'Korius ';
$namaBelakang = 'Wenda';
$alamat = 'Waena';

//  Integer/int
$x = 7;
$y = 9;

$tambah = $x + $y;
$kurang = $x - $y;
$kali = $x * $y;
$bagi = $x / $y;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Menampilkan variabel string -->
    <p> <?= $string ?> </p>
    <p> Nama Saya <?= $namaDepan . $namaBelakang?>. saya tinggal di <?= $alamat ?> </p>

    <p> Tipe integer digunakan untuk menyimpan data bilangan bulat </p>

    <p> <?= $x ?>  + <?= $y ?>  = <?= $tambah ?>  </p>
    <p> <?= $x ?>  - <?= $y ?>  = <?= $kurang ?>  </p>
    <p> <?= $x ?>  x  <?= $y ?>  = <?= $kali ?>  </p>
    <p> <?= $x ?>  :  <?= $y ?>  = <?= $bagi ?>  </p>


</body>
</html>