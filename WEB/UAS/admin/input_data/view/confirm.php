<?php
include "../../../header.php";
include "../header.php";
session_start();

if (isset($_GET['delete'])) {
    $id_pasien = mysqli_real_escape_string($db, $_GET['delete']);

    // SQL query to delete data from survei table where id = $id_pasien
    $query = "DELETE FROM pasien WHERE id = {$id_pasien}";
    $delete_query = mysqli_query($db, $query);

    if ($delete_query) {
        // Add success message or additional logic if needed
        // ...

        // Redirect the user back to the home.php page
        echo '<script>window.location.href = "home.php";</script>';
        exit();
    } else {
        // Handle the case when the delete query fails
        $error_message = "Error deleting record: " . mysqli_error($db);
        // Display a user-friendly message or log the error for debugging
        echo "Error: " . $error_message;
        // Log detailed error for reference
        error_log($error_message);
        exit();
    }
}

if (isset($_SESSION['show_delete_modal']) && $_SESSION['show_delete_modal']) {
    unset($_SESSION['show_delete_modal']);

    ?>
    <!-- Link to Bootstrap Icons via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <h1 class="mt-4"><i class="fas fa-trash-alt text-danger fa-3x"></i></h1>
                    <h2 class="mb-4"><b>DELETE</b></h2>
                    <p>Yakin data akan dihapus?</p>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                    <button type="button" id="confirmDeleteButton" class="btn btn-danger btn-block">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS before your custom script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.delete-btn').on('click', function (e) {
                e.preventDefault();
                var id = $(this).data('id_pasien');
                $('#deleteModal').modal('show');

                $('#confirmDeleteButton').on('click', function () {
                    window.location.href = 'delete.php?delete=' + id;
                });
            });
        });
    </script>

    <?php
    exit();
}

include "footer.php";
?>
