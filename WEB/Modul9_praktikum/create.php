<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $gambar = $_FILES['gambar']['name'];
    $link = $_POST['link'];

    // Upload image to the server
    $targetDirectory = "./image";
    $target_file = $target_dir . basename($_FILES['gambar']['name']);
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);

    // Insert data into the database
    $sql = "INSERT INTO surveys (judul, gambar, link) VALUES ('$judul', '$gambar', '$link')";
    
    // Use mysqli_query directly
    if (mysqli_query($conn, $sql)) {
        header("Location: read.php"); // Redirect to the read page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Survey</title>
    <style> 
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h2 {
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 20px 0;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
    }

    a button {
        background-color: #f44336;
    }

    button:hover, a button:hover {
        background-color: #45a049;
    }

  </style>
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <label for="judul">Judul Survei:</label>
        <input type="text" name="judul" required><br>

        <label for="gambar">Choose File:</label>
        <input type="file" name="gambar" accept="./image" required><br>

        <label for="link">Link:</label>
        <input type="text" name="link" required><br>

        <button type="submit">Submit</button>
        <a href="read.php"><button type="button">View</button></a>
    </form>
</body>
</html>
