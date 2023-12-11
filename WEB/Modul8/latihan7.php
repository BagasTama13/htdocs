<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Tipe data string
    $nama = "Muhammad Bagas Pratama";

    // Tipe data integer
    $umur = 19;

    // Tipe data float
    $tinggiBadan = 179.5;

    // Tipe data array
    $hobi = array("Coding", "Sport", "Musik");

    // Menampilkan informasi dengan memanfaatkan tipe data
    echo "<h1>Profil Pengguna</h1>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Umur: $umur tahun</p>";
    echo "<p>Tinggi Badan: $tinggiBadan cm</p>";

    echo "<p>Hobi:</p>";
    echo "<ul>";
    foreach ($hobi as $h) {
        echo "<li>$h</li>";
    }
    echo "</ul>";
?>

</body>
</html>