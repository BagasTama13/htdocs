<?php
include "../header.php";

if (isset($_GET['delete'])) {
    $id_survey = mysqli_real_escape_string($conn, $_GET['delete']);

    // SQL query to delete data from survei table where id_survei = $id_survey
    $query = "DELETE FROM survei WHERE id_survei = {$id_survey}";
    $delete_query = mysqli_query($conn, $query);

    if ($delete_query) {
        // Add success message or additional logic if needed
        // ...

        // Redirect the user back to the home.php page
        echo '<script>window.location.href = "home.php";</script>';
        exit();
    } else {
        // Handle the case when the delete query fails
        $error_message = "Error deleting record: " . mysqli_error($conn);
        // Display a user-friendly message or log the error for debugging
        echo "Error: " . $error_message;
        // Log detailed error for reference
        error_log($error_message);
        exit();
    }
}

include "footer.php";
?>
