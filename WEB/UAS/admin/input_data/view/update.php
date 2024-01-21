<!-- Header -->
<?php include "../header.php"; ?>
<?php include "../db.php"; ?>

<?php
// Initialize variable for messages
$message = "";

// Check if pasien_id is set in the URL
if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];

    // Using prepared statement to prevent SQL injection
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
                $lfg = $pasien['lfg'];
                $anjuran_nutrisi = $pasien['anjuran_nutrisi'];
                $makanan_dianjurkan = $pasien['makanan_dianjurkan'];
            } else {
                $message = "Data pasien tidak ditemukan.";
            }

            mysqli_free_result($result);
        } else {
            $message = "Error saat mengambil data: " . mysqli_error($db);
        }

        mysqli_stmt_close($stmt);
    } else {
        $message = "Error saat mempersiapkan pernyataan: " . mysqli_error($db);
    }
} else {
    $message = "ID pasien tidak valid. Parameter pasien_id tidak ditemukan dalam URL.";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs

    // Using prepared statement to update data
    $update_query = "UPDATE pasien SET nama = ?, umur = ?, stadium = ?, lfg = ?, anjuran_nutrisi =?, makanan_dianjurkan = ?  WHERE id = ?";
    $update_stmt = mysqli_prepare($db, $update_query);

    if ($update_stmt) {
        mysqli_stmt_bind_param($update_stmt, "ssssssi", $nama, $umur, $stadium, $lfg, $anjuran_nutrisi, $makanan_dianjurkan, $pasien_id);
        mysqli_stmt_execute($update_stmt);

        mysqli_stmt_close($update_stmt);

        $message = "Data pasien $nama berhasil diperbarui.";
        header("location: home.php");
        exit();
    } else {
        $message = "Error saat mempersiapkan pernyataan update: " . mysqli_error($db);
    }
}
?>

<!-- Navbar -->
<?php include "../navbar.php"; ?>

<div style="background-image: url(../../../img/bg.jpg); height:200vhvh; background-size: cover;border-radius: 30px; "
    class="container p-1 mb-1 text-black">
    <a href="home.php" class="btn btn-warning mt-1 ml-2">Kembali</a>

    <div>
        <div class="container col-md-10">
            <form action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <h3 style="text-align: center;">INPUT DATA PASIEN</h3>
                    <p class="text-danger"><?= $message ?></p>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama" class="for-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="umur" class="for-label">Umur</label>
                            <input type="number" name="umur" class="form-control" value="<?= $umur ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="stadium" class="for-label">Stadium</label>
                            <input type="number" name="stadium" class="form-control" value="<?= $stadium ?>" required>
                        </div>
                    </div>

                    <label for="lfg" class="for-label">LFG</label>
                    <input type="text" name="lfg" class="form-control" value="<?= $lfg ?>" required>
                    <label for="anjuran_nutrisi" class="for-label">Anjuran Nutrisi</label>
                    <textarea type="comments" name="anjuran_nutrisi" class="form-control" required><?= $anjuran_nutrisi ?></textarea>
                    <label for="makanan_dianjurkan" class="for-label">Makanan yang dianjurkan</label>
                    <textarea type="comments" name="makanan_dianjurkan" class="form-control" required><?= $makanan_dianjurkan ?></textarea>

                    <div class="form-group ml-2" style="display: flex; justify-content:space-between">
                        <input type="submit" name="update" class="btn btn-primary mt-2" value="Submit">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <?php include "../footer.php" ?>
</div>
