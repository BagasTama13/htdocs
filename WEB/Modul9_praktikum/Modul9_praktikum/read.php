<?php
include_once 'db.php';

// Retrieve data from the database
$sql = "SELECT * FROM surveys";
$result = mysqli_query($conn, $sql);

// Fetch data as an associative array
$surveys = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Surveys</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Add some styling for the action buttons */
        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .action-buttons a {
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            border-radius: 3px;
        }

        .action-buttons a.delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <h2>Daftar Survei</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Survei</th>
                <th>Gambar</th>
                <th>Link</th>
                <th>Action</th> <!-- New column for action buttons -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($surveys as $survey): ?>
                <tr>
                    <td><?= $survey['id'] ?></td>
                    <td><?= $survey['judul'] ?></td>
                    <td> <img src="<?= $survey['gambar'] ?>" alt="Gambar Survei" style="max-width: 100px;"></td>
                    <td><?= $survey['link'] ?></td>
                    <td class="action-buttons">
                        <a href="update.php?id=<?= $survey['id'] ?>">Update</a>
                        <a href="delete.php?id=<?= $survey['id'] ?>" class="delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
