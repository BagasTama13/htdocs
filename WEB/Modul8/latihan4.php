<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            // Variabel-variabel
            $nama = "John";
            $umur = 25;
            $pekerjaan = "Programmer";
            $kota = "Jakarta";
            $gaji = 5000;

            // Kombinasi variabel saat ditampilkan
            $pesan = "Halo, saya $nama. Saya berusia $umur tahun dan bekerja sebagai $pekerjaan.";
            $alamat = "Saya tinggal di $kota.";
            $infoGaji = "Gaji saya per bulan adalah $$gaji.";

            // Menampilkan hasil kombinasi variabel
            echo "<p>$pesan $alamat $infoGaji</p>";
        ?>
        <h3>Variable yang digunakan</h3>
        <p> $nama = "John";<br>
            $umur = 25;<br>
            $pekerjaan = "Programmer";<br>
            $kota = "Jakarta";<br>
            $gaji = 5000;<br>
        </p>
        <h3>Variable kombinasi</h3>
        <p>$pesan = "Halo, saya $nama. Saya berusia $umur tahun dan bekerja sebagai $pekerjaan.";<br>
            $alamat = "Saya tinggal di $kota.";<br>
            $infoGaji = "Gaji saya per bulan adalah $$gaji.";<br>
        </p>


</body>
</html>

