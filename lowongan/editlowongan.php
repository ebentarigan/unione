
<?php
include "../db_config.php"; // Koneksi sudah ada di db_config.php

// Mengecek apakah ID ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data lowongan berdasarkan ID yang ada di URL
    $sql = "SELECT * FROM lowongan WHERE id = $id";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $judul = $row['judul'];
        $deskripsi = $row['deskripsi'];
        $lokasi = $row['lokasi'];
    } else {
        echo "Lowongan tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak ditemukan.";
    exit();
}

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];

    // Update data lowongan
    $sql_update = "UPDATE lowongan SET judul='$judul', deskripsi='$deskripsi', lokasi='$lokasi' WHERE id=$id";
    if (mysqli_query($db, $sql_update)) {
        echo "Lowongan updated success!";
        echo "<br><button onclick=\"window.location.href='../dashboard.php'\">Kembali ke Dashboard</button>";
        exit();
    } else {
        echo "Error: " . $sql_update . "<br>" . mysqli_error($db);
    }
}
?>

<form method="post">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" value="<?php echo htmlspecialchars($judul); ?>" required><br>

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi" required><?php echo htmlspecialchars($deskripsi); ?></textarea><br>

    <label for="lokasi">Lokasi:</label>
    <input type="text" name="lokasi" value="<?php echo htmlspecialchars($lokasi); ?>" required><br>

    <button type="submit" name="submit">Update Lowongan</button>
</form>
?>