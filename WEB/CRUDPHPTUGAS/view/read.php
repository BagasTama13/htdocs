<!-- Footer -->
<?php include "../db.php" ?>
<?php include "../header.php" ?>

<div class="container text-left mt-2">
    <a href="home.php" class="btn btn-secondary mt-5"> Back </a>
</div>

<h1 class="text-center mt-4 ">DETAIL SURVEI</h1>
<div class="container mt-4">
    <table class="table table-striped table-bordered border-dark table-hover">
    <thead class="table-dark">
    <tr>
                <th class="container col-md-1 text-center"scope="col">ID</th>
                <th class="container col-md-1 text-center"scope="col">Icon</th>
                <th class="container col-md-5 text-center"scope="col">Judul</th>
                <th class="container col-md-5 text-center"scope="col">Link</th>
        </tr>
</thead>
<tbody>
    <tr>
           <?php
            $query = "SELECT * FROM survei";//SQL query to fecth all  table daa
            $view_survei = mysqli_query($conn, $query); //sending the query to the database

            //displaying all the data retrieved from the database using while lop
            while ($row = mysqli_fetch_assoc($view_survei)){
                $id = $row ['id'];
                $icon = $row ['icon'];
                $judul = $row['judul'];
                $link = $row['link'];
                
                echo "<tr>";
                echo "<th scope='row' > 202401{$id}</th>";
                echo "<td ><img src='images/".$icon."' width='100' height='100'> </td>";
                echo "<td > {$judul}</td>";
                echo "<td > {$link}</td>";
            }
            ?>
    </tr>
</tbody>
</table>
</div>


<!-- Footer -->
<?php include "../footer.php" ?>
