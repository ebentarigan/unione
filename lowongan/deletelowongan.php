<?php
include "../db_config.php"; // Koneksi sudah ada di db_config.php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menghapus lowongan berdasarkan ID
    $sql_delete = "DELETE FROM lowongan WHERE id = $id";

    if (mysqli_query($db, $sql_delete)) {
        echo "Lowongan berhasil dihapus!";
        echo "<br><button onclick=\"window.location.href='../dashboard.php'\">Kembali ke Dashboard</button>";
        exit();
    } else {
        echo "Error: " . mysqli_error($db);
    }
} else {
    echo "ID lowongan tidak ditemukan.";
}
?>
