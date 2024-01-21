<!-- Header -->
<?php include "../header.php"; ?>

<!-- Navbar -->
<?php include "../navbar.php"; ?>

<?php
if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];

    // Validate and sanitize $pasien_id

    $query = "SELECT * FROM pasien WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $pasien_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            // Check if data is found
            if (mysqli_num_rows($result) > 0) {
                $pasien = mysqli_fetch_assoc($result);

                // Extracting data for better readability
                $nama = $pasien['nama'];
                $umur = $pasien['umur'];
                $stadium = $pasien['stadium'];
                $lfg = isset($pasien['lfg']) ? $pasien['lfg'] : "";
                $anjuran_nutrisi = isset($pasien['anjuran_nutrisi']) ? $pasien['anjuran_nutrisi'] : "";
                $makanan_dianjurkan = isset($pasien['makanan_dianjurkan']) ? $pasien['makanan_dianjurkan'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pasien: <?= $nama ?></title>

    <style>
        /* Default styles */
        .container {
            width: 100%;
            padding: 1rem;
            box-sizing: border-box;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            .container {
                padding: 0.5rem;
            }

            /* Adjust styles for the table or other elements as needed */
            table {
                font-size: 14px;
            }
        }

        /* Responsive images */
        img {
            max-width: 100%;
            height: auto;
        }


    </style>
</head>

<body>
<div style="background-image: url(../../../img/bg.jpg); max-height:200vh; background-size: cover; background-position:center; border-radius: 30px; " class="container p-3 mb-2 text-black">
        <h3 class="text-center mt-4">Detail Pasien: <?= $nama ?></h3>

        <div class="container text-left mb-3" style="display: flex; justify-content: space-between; ">
            <a href="home.php" class="btn btn-dark mt-3">Kembali</a>
            <!-- Add export button -->
            <a href="export.php?pasien_id=<?= $pasien_id ?>" class="btn btn-success mt-3">Export Data</a>
        </div>

        <div class="container">
            <table class="table table-striped text-center table-bordered table-hover">
                <thead class="table-dark">
                    <tr class="container col-md-12">
                        <th class="container col-md-3 text-center" scope="col">Nama</th>
                        <th class="container col-md-1 text-center" scope="col">Umur</th>
                        <th class="container col-md-1 text-center" scope="col">Stadium</th>
                        <th class="container col-md-2 text-center" scope="col">LFG</th>
                        <th class="container col-md-2 text-center" scope="col">Anjuran Nutrisi</th>
                        <th class="container col-md-3 text-center" scope="col">Makanan di anjurkan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $nama ?></td>
                        <td><?= $umur ?></td>
                        <td><?= $stadium ?></td>
                        <td><?= $lfg ?>
                        <td> <?= $anjuran_nutrisi ?></td>
                        <td> <?= $makanan_dianjurkan ?></td>

                    </tr>
                </tbody>
            </table>
        </div>

        <?php
            } else {
                echo "Data pasien tidak ditemukan.";
            }

            mysqli_free_result($result);
        } else {
            echo "Query failed: " . mysqli_error($db);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Prepared statement failed.";
    }
} else {
    echo "Pasien ID tidak valid.";
}
?>
</body>

</html>
