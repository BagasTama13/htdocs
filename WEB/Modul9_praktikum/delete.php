<?php
include_once 'db.php';

// Check if the survey ID is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the survey exists in the database
    $query = "SELECT * FROM surveys WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $survey = mysqli_fetch_assoc($result);

    if (!$survey) {
        // Redirect to the read page if the survey does not exist
        header("Location: read.php");
        exit();
    }
} else {
    // Redirect to the read page if no survey ID is provided
    header("Location: read.php");
    exit();
}

// Process the deletion when the form is submitted
if (isset($_POST['delete'])) {
    $query = "DELETE FROM surveys WHERE id = $id";
    $delete_survey = mysqli_query($conn, $query);

    // Redirect to the read page after deletion
    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Survey</title>
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

        p {
            color: #f44336;
        }

        button {
            background-color: #f44336;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Delete Survey</h2>

    <form action="" method="POST">
        <p>Are you sure you want to delete the survey?</p>

        <button type="submit" name="delete">Delete</button>
        <a href="read.php"><button type="button">Cancel</button></a>
    </form>
</body>
</html>
