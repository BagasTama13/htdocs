<!-- Header -->
<?php include "../header.php";
?>
<?php

$massage = "";

// Pastikan Anda sudah terhubung ke database sebelumnya

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $stadium = $_POST["stadium"];
    $lfg = $_POST["lfg"];
    $anjuran_nutrisi = $_POST["anjuran_nutrisi"];
    $makanan_dianjurkan = $_POST["makanan_dianjurkan"];
    // Proses penyisipan data ke dalam tabel
    $koneksi = mysqli_connect($servername, $username, $password, $dbname);

    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $query = "INSERT INTO pasien (nama, umur,stadium, lfg, anjuran_nutrisi, makanan_dianjurkan) VALUES ('$nama', $umur,'$stadium', '$lfg','$anjuran_nutrisi','$makanan_dianjurkan')";

    // ...
if (mysqli_query($koneksi, $query)) {
    $massage = "Data tersimpan";

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
// ...


    mysqli_close($koneksi);
}
?>

<?php include "../navbar.php"; ?>

<div style="background-image: url(../../../img/bg1.jpg); height:200vhvh; background-size: cover; border-radius: 30px; background-position:center;" class="container p-1 mb-2 text-black">


<a href="home.php" class="btn btn-dark mt-1 ml-2">Kembali</a>
<div>
<div class="container col-md-10 ">
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            
  
        <h3 style="text-align: center;" >INPUT DATA PASIEN</h3>
       
        <p><?= $massage?></p>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nama" class="for-label" >Nama</label>
        <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group col-md-3">
            <label for="umur" class="for-label">Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="form-group col-md-3">
            <label for="stadium" class="for-label">Stadium</label>
            <input type="number" name="stadium" class="form-control" required>
        </div>
    </div>


            <label for="lfg" class="for-label">LFG</label>
            <input type="text" name="lfg" class="form-control" required>
            <label for="anjuran_nutrisi" class="for-label">Anjuran Nutrisi</label>
            <textarea type="comments" name="anjuran_nutrisi" class="form-control" required></textarea>
            <label for="makanan_dianjurkan" class="for-label">Makanan yang dianjurkan</label>
            <textarea type="comments" name="makanan_dianjurkan" class="form-control" required></textarea>
            
        </div>


        <div class="form-group ml-2" style="display: flex; justify-content:space-between" >
        <input type="submit" name="create" class="btn btn-primary mt-2" value="Submit">
       
        </div>

        </fieldset>
    </form>
</div>
</div>
</div>


<!-- a BACK button to go to the home page -->


<!-- Footer -->
<?php include "../footer.php" ?>

 <?php 
// if(!$nama){
//     return false ; 
// }

// function upload(){
//     $namafile = $_FILES['nama']['name'];
//     $ukuranfile = $_FILES['nama']['size'];
//     $error = $_FILES['nama']['error'];
//     $tmpName = $_FILES['nama']['tmp_name'];
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
