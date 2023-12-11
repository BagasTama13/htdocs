<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Deklarasi variabel
    $angka1 = 5;
    $angka2 = 10;

    // Operator penjumlahan
    $hasilPenjumlahan = $angka1 + $angka2;

    // Operator pengurangan
    $hasilPengurangan = $angka1 - $angka2;

    // Operator perkalian
    $hasilPerkalian = $angka1 * $angka2;

    // Operator pembagian
    $hasilPembagian = $angka1 / $angka2;

    // Operator modulus
    $hasilModulus = $angka1 % $angka2;

    
    $hasila = $angka1 ** $angka2;

    // Menampilkan hasil operasi
    echo "<h2>Hasil Operasi Aritmatika</h2>";
    echo "<p>Penjumlahan: $hasilPenjumlahan</p>";
    echo "<p>Pengurangan: $hasilPengurangan</p>";
    echo "<p>Perkalian: $hasilPerkalian</p>";
    echo "<p>Pembagian: $hasilPembagian</p>";
    echo "<p>Modulus: $hasilModulus</p>";
?>

</body>
</html>