<!-- Header -->
<?php include '../header.php'; ?>
<h1 class="text-center">User Details</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // First, check if the variable is set using 'isset()' function
            // Processing form data when the form is submitted
            if (isset($_GET['user_id'])) {
                $userid = $_GET['user_id'];

                // SQL query to fetch the data where id = $userid & storing data in view_user
                $query = "SELECT * FROM users WHERE ID = {$userid}";
                $view_users = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($view_users)) {
                    $id = $row['ID'];
                    $user = $row['username'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $gambar = file_get_contents($_FILES['gambar']['tmp_name']); // Ambil konten gambar

                    echo "<tr>";
                    echo "<td>{$id}</td>";
                    echo "<td>{$user}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$password}</td>";
                    
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>
<!-- A BACK Button to go to the previous page -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>
<!-- Footer -->
<?php include '../footer.php'; ?>
