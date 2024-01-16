<?php
include "../UAS/header.php";

if (isset($_GET['delete'])) {
    $id = filter_var($_GET['delete'], FILTER_VALIDATE_INT);

    if ($id !== false && $id !== null) {
        $query = "DELETE FROM pasien WHERE id = ?";
        $stmt = mysqli_prepare($db, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                // Sukses
                $success_message = "Data berhasil dihapus.";
                echo '<script>alert("'.$success_message.'"); window.location.href = "home.php";</script>';
                exit();
            } else {
                // Gagal
                $error_message = "Error deleting record: " . mysqli_stmt_error($stmt);
                echo '<script>alert("'.$error_message.'");</script>';
                error_log($error_message);
                exit();
            }

           
        }
    }
}

include "../UAS/footer.php";
?>
