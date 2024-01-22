<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Pasien</title>
    
  <link rel="shortcut icon" href="../../../img/ginjal.png"/>
    <!-- Add your stylesheet links here -->
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <!-- ... other stylesheets ... -->
</head>
<body  >

    <!-- Page Header Start -->
    <!-- Page Header End -->
    <!-- header -->

    <?php include "../header.php"; ?>
    <?php include "../navbar.php"; ?>

    
<div style="background-image: url(../../../img/bg.jpg); height:86vh; border-radius: 30px;background-position:center; " class="container p-3 mb-2 text-dark">
    
        <h1 class="text-center mt-2">DATA PASIEN</h1>

        <a href="create.php" class="btn btn-outline-dark mb-2" style="background-color: white;"><i class="bi bi-person-plus"></i>Tambahkan data</a>

        <div class="table-responsive">
            <table class="table table-striped text-center table-bordered border-dark table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="container col-md-3 text-center" scope="col">Nama</th>
                        <th class="container col-md-1 text-center" scope="col">Umur</th>
                        <th class="container col-md-1 text-center" scope="col">Stadium</th>
                        <th class="container col-md-4 text-center" scope="col">LFG</th>
                        <th class="container col-md-2 text-center" scope="col" colspan="3" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM pasien";
                    $db = mysqli_query($db, $query);

                    while ($row = mysqli_fetch_assoc($db)){
                        $id = $row['id'];
                        $nama = $row['nama'];
                        $umur = $row['umur'];
                        $stadium = $row['stadium'];
                        $lfg = $row['lfg'];

                        echo "<tr>";
                        echo "<td>{$nama}</td>";
                        echo "<td>{$umur}</td>";
                        echo "<td>{$stadium}</td>";
                        echo "<td>{$lfg}</td>";
                        echo "<td class='text-center'><a href='read.php?pasien_id={$id}' class='btn btn-primary'><i class='bi bi-eye'></i> READ</a></td>";
                        echo "<td class='text-center'><a href='update.php?pasien_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> UPDATE</a></td>";
                        echo "<td class='text-center'><a href='confirm.php?delete={$id}' class='btn btn-danger delete-btn' data-id='{$id}'><i class='bi bi-trash'></i> DELETE</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add your script links here -->
    <script src="path/to/jquery.slim.min.js"></script>
    <script src="path/to/popper.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>

    <?php include "../footer.php"; ?>

</body>
</html>
