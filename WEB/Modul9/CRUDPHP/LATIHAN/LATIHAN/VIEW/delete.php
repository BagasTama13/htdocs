<!-- Header -->
<?php include "../header.php"; ?>
<?php
if (isset($_GET['delete'])) {
    $userid = $_GET['delete'];

    // Validate $userid to ensure it is a valid integer
    if (!filter_var($userid, FILTER_VALIDATE_INT)) {
        // Handle invalid input, for example, redirect to an error page
        header("Location: error.php");
        exit;
    }

    // SQL query to delete data from user table where id = $userid
    $query = "DELETE FROM users WHERE ID = $userid";
    $delete_query = mysqli_query($conn, $query);

    // Check if the deletion was successful
    if ($delete_query) {
        header("Location: home.php");
        exit;
    } else {
        // Handle deletion failure, for example, redirect to an error page
        header("Location: error.php");
        exit;
    }
}
?>
<!-- Footer -->
<?php include "footer.php"; ?>
