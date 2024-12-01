<?php
include "../db_config.php"; // Koneksi sudah ada di db_config.php

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];

    // Menyimpan data lowongan baru
    $sql = "INSERT INTO lowongan (judul, deskripsi, lokasi) VALUES ('$judul', '$deskripsi', '$lokasi')";

    if (mysqli_query($db, $sql)) {
        echo "Lowongan berhasil ditambahkan!";
        echo "<br><button onclick=\"window.location.href='../dashboard.php'\">Kembali ke Dashboard</button>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>

<form method="post">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" required><br>

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi" required></textarea><br>

    <label for="lokasi">Lokasi:</label>
    <input type="text" name="lokasi" required><br>

    <button type="submit" name="submit">Tambah Lowongan</button>
</form>
