<?php
$hostname = "localhost"; // e.g., localhost
$username = "root";
$password = "";
$database = "crud_surveys";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
