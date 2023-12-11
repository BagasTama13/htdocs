<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <!-- Sertakan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Ubah Data Survei</h2>
    
    <!-- Formulir untuk Update Data -->
    <form>
        <div class="form-group">
            <label for="logo">Logo:</label>
            <input type="file" class="form-control" id="logo" name="logo">
        </div>
        
        <div class="form-group">
            <label for="judul">Judul Survei:</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        
        <div class="form-group">
            <label for="link">Link Survei:</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<!-- Sertakan Bootstrap JS dan Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
