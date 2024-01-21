<!-- Header -->
<?php include "../header.php"?>

<?php 
if (isset($_POST['create'])) {
    // $icon = $_FILES['icon'];
    $judul = $_POST['judul'];
    $link = $_POST['link'];
    $icon = $_FILES['icon']['name'];
    $tmp = $_FILES['icon']['tmp_name'];

        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$icon;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){
    //SQL query to insert user data into the users table
    $query = "INSERT INTO survei(icon,judul, link) VALUES('{$fotobaru}','{$judul}','{$link}')";
    $add_judul = mysqli_query($conn, $query);

    if (!$add_judul) {
        echo "something went wrong ". mysqli_error($conn);
    } else {
        $successModal = true;
    }
  

}
}

?>


<!-- Success Modal -->
<?php if (isset($successModal) && $successModal): ?>
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <h1 class="mt-4"><i class="fas fa-check-circle text-success fa-3x"></i></h1>
                    <h2 class="mb-4"><b>Berhasil</b></h2>
                    <p>Data anda berhasil ditambahkan!</p>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <a href="home.php" class="btn btn-success btn-block">OK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Display the success modal when the page loads -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#successModal').modal('show');
        });
    </script>
<?php endif; ?>

<div class="container text-left">
<a href="home.php" class="btn btn-warning mt-3">Kembali
</a>
</div>
<div>
<div class="container col-md-6 ">

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
        <legend>Add Survei details</legend>
        <div class="form-group">
            <label for="icon" class="for-label">Icon</label>
            <input type="file" name="icon" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="judul" class="for-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="link" class="form-label">Link</label>
            <input type="text" name="link" class="form-control" required>
        </div>

     

        <div class="form-group">
        <input type="submit" name="create" class="btn 
        btn-primary mt-2" value="Submit">
        </div>
        </fieldset>
    </form>
</div>
</div>


<!-- a BACK button to go to the home page -->


<!-- Footer -->
<?php include "../footer.php" ?>

 <?php 
// if(!$icon){
//     return false ; 
// }

// function upload(){
//     $namafile = $_FILES['icon']['name'];
//     $ukuranfile = $_FILES['icon']['size'];
//     $error = $_FILES['icon']['error'];
//     $tmpName = $_FILES['icon']['tmp_name'];
//     if ($error === 4){
//         echo "<script>
//         alert('pilih gambar dulu!
//         </script>";
//         return false;
//     }
// }

// $extensiGambarValid = ['jpq','png','jpeg'];
// $extensiGambar = explode('.', $namafile);
// $extensiGambar = strtolower(end( $extensiGambar));
// if (in_array($extensiGambar,$extensiGambarValid)){
//     echo "<script>
//     alert('yang anda upload bukan gambar!')
//     </script>";
//     return false;

// }

///lolos
// move_uploaded_file($tmpName, 'images');


// 

?>
