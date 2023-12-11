<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            // Variabel global
            $variabelGlobal = "Ini adalah variabel global.";

            function contohLocalScope() {
                // Variabel lokal
                $variabelLocal = "Ini adalah variabel lokal.";
                global $variabelGlobal; // Menggunakan variabel global di dalam fungsi
                
                echo "<p><u><strong>Di dalam fungsi:</strong></u></p>";
                echo "<p>Variabel lokal: $variabelLocal</p>"; // Variabel lokal dapat diakses di dalam fungsi
                echo "<p>Variabel global: $variabelGlobal</p>"; // Variabel global dapat diakses di dalam fungsi
            }
            ?>

            <h1 style="color: green;"><small>Variable lokal dan global dapat di akses dalam suatu function</small></h1>

            <?php
            // Memanggil fungsi
            contohLocalScope();

            // Mencoba mengakses variabel lokal di luar fungsi (akan menghasilkan error)
            // echo "<p>Variabel lokal di luar fungsi: $variabelLocal</p>";
            // Variabel global dapat diakses di luar fungsi
           
            echo "<p><u><strong>Di luar fungsi:</u></strong></p>";
            echo "<p>Variabel global: $variabelGlobal</p>";
            echo "<p>Variabel Local: $variableLocal</p></p>"
        ?>
      <h1 style="color: red;"><small>Mencoba mengakses variabel lokal di luar fungsi (akan menghasilkan error)</small></h1>

</body>
</html>
