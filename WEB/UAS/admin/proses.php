

<?php
    include "service/database.php";
    session_start();
    $massage = "";

    

    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);

        if ($result->num_rows>0){
            $data = $result->fetch_assoc();

            $_SESSION["username"] = $data["username"];
      
            header("location: input_data/index.php");
        }
        else{
           $massage = "AKUN BELUM TERDAFTAR";
        }
    }
?>
<?php
include "service/database.php";


if (isset($_POST['register'])) {
    // Validasi input
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $message = "USERNAME DAN PASSWORD HARUS DIISI";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Gunakan prepared statement
        $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        try {
            // Eksekusi prepared statement
            $stmt->execute();
            $massage = "AKUN TERDAFTAR, SILAHKAN LOGIN";
        } catch (mysqli_sql_exception $e) {
            // Tangkap kesalahan khusus untuk Duplicate entry
            if ($e->getCode() === 1062) {
                $massage = "USERNAME TELAH TERDAFTAR. SILAHKAN UBAH USERNAME ANDA.";
            } else {
                $massage = "GAGAL MENYIMPAN DATA.";
            }
        }

        // Tutup prepared statement
        $stmt->close();
    }
}
?>
