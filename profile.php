<?php 
include "db_config.php"; 

// Menggunakan $_FILES['foto']
if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'])) {
    $foto = $_FILES['foto'];
    
    // Generate nama unik untuk file yang di-upload
    $photoName = time() . '_' . $foto['name'];

    // Pindahkan file ke folder 'imag'
    if (move_uploaded_file($foto['tmp_name'], './img/' . $photoName)) {
        echo "File berhasil diupload: $photoName";
    } else {
        echo "Gagal mengupload file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>Upload File</h1>
    <form  method="POST" enctype="multipart/form-data">
        <label for="file">Choose file to upload:</label>
        <input type="file" name="file" id="file" required>
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>

