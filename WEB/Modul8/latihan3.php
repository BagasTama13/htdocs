<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program PHP Dinamis</title>
</head>
<body>

    <?php
        // Contoh penggunaan variabel
        $pesan = "";

        // Contoh penggunaan perulangan
        for ($i = 1; $i <= 5; $i++) {
            echo "<p>$pesan $i bola</p>";
        }

        // Contoh penggunaan fungsi
        function tambah($angka1, $angka2,$angka3,$angka4,$angka5) {
            return $angka1 + $angka2 + $angka3 + $angka4 + $angka5;
        }

        // Contoh pemanggilan fungsi
        $hasil = tambah(1,2,3,4,5);
        echo "<p>total ada: $hasil bola</p>";
    ?>

</body>
</html>
