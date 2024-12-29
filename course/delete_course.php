<?php
include "../db_config.php"; // Pastikan file ini mendefinisikan $db
session_start();

// Cek apakah user sudah login dan memiliki role 'trainers'


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Hapus course dari database
    $stmt = $db->prepare("DELETE FROM course WHERE course_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Course berhasil dihapus!'); window.location.href = 'course.php';</script>";
} else {
    echo "<script>alert('ID course tidak ditemukan!'); window.location.href = 'course.php';</script>";
}
?>
