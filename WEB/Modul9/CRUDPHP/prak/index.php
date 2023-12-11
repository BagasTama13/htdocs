<!-- Header -->
<?php include "header.php" ?>
<!-- body -->
<div class="container mt-5">
<h1 class="text-center"> SELAMAT DATANG di Mentoring
PHP CRUD Application!</h1>
<p class="text-center">
Ayo kita Membuat CRUD (Create, Read, Update,
Delete) Application.
</p>
<div class="container">
<form action="view/home.php" method="post">
<div class="from-group text-center">
<input type="submit" class="btn btn-primary
mt-2" value="Let's Do it!">
</div>
</form>
</div>
</div>
<!-- Footer -->
<?php include "footer.php" ?>
<?php
//server with default setting (user 'root' with no password)
$host = 'localhost'; // server
$user = 'root';
$pass = "";
$database = 'crudphp'; //Database Name
// establishing connection
$conn = mysqli_connect($host, $user, $pass, $database);
// for displaying an error msg in case the connection is not established
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}