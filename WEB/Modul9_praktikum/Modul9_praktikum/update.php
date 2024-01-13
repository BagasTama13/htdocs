<?php
include_once 'db.php';

// Fetch the survey data to pre-fill the form
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM surveys WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $survey = mysqli_fetch_assoc($result);
} else {
    // Handle the case where no survey ID is provided
    header("Location: read.php");
    exit();
}

// Handle form submission for updating the survey
if (isset($_POST['update'])) {
    $updatedJudul = mysqli_real_escape_string($conn, $_POST['judul']);
    $updatedLink = mysqli_real_escape_string($conn, $_POST['link']);

    // Check if a file is uploaded
    if ($_FILES['gambar']['size'] > 0) {
        // Handle file upload logic here
        $targetDirectory = "./image";
        $targetFile = $targetDirectory . basename($_FILES['gambar']['name']);
        move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile);

        // Update the database with the file path
        $updateQuery = "UPDATE surveys SET judul = '$updatedJudul', link = '$updatedLink', gambar = '$targetFile' WHERE id = $id";
    } else {
        // Update the database without changing the file path
        $updateQuery = "UPDATE surveys SET judul = '$updatedJudul', link = '$updatedLink' WHERE id = $id";
    }

    // Perform the update query
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Redirect to the read.php page after successful update
        header("Location: read.php");
        exit();
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Survey</title>
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
    <h2>Update Survey</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $survey['id'] ?>">

        <label for="judul">Judul Survei:</label>
        <input type="text" name="judul" value="<?= $survey['judul'] ?>" required><br>

        <!-- Display current image -->
        <?php if (!empty($survey['gambar'])) : ?>
            <img src="<?= $survey['gambar'] ?>" alt="Current Image" style="max-width: 100%; margin-bottom: 10px;">
        <?php endif; ?>

        <label for="gambar">Choose File:</label>
        <input type="file" name="gambar" accept="image/"><br>

        <label for="link">Link:</label>
        <input type="text" name="link" value="<?= $survey['link'] ?>" required><br>

        <button type="submit" name="update">Update</button>
        <a href="../Modul9_praktikum/read.php"><button type="button">Kembali</button></a>
    </form>
</body>
</html>