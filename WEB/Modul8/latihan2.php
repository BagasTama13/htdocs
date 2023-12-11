<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APK PHP</title>
</head>
<body>
    <div>
        <p>merah jika kata 1 dan 2 berbeda</p>
        <p>karena PHP adalah case-sensitive</p>
        <h3>kata 1 = Halo</h3>
        <h3>kata 2 = halo</h3>
        <h1 style="color: red;">
<?php
    $kata1 = "Halo";
    $kata2 = "halo";

    if ($kata1 == $kata2) {
        echo "Kedua kata sama.";
    } else {
        echo "Kedua kata tidak sama.";
    }
?>
        </h1>
</div>


<div>
        <p>hijau jika kata 1 dan 2 berbeda</p>
        <p>PHP dapat menjadi case-insensitive, Anda dapat menggunakan fungsi seperti <i>strcasecmp()</i></p>
        <h3>kata 1 = Halo</h3>
        <h3>kata 2 = halo</h3>
        <h1 style="color: green;">
<?php
    $kata1 = "Halo";
    $kata2 = "halo";

    if (strcasecmp($kata1, $kata2) == 0) {
        echo "Kedua kata sama.";
    } else {
        echo "Kedua kata tidak sama.";
    }
?>

        </h1>
</div>


</body>
</html>
