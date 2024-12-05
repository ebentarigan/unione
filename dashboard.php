
<?php
include "db_config.php"; 
session_start(); // Mulai sesi terlebih dahulu


if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] != true) {
    header("Location: login.php"); 
    exit();
}

// Menangani logout
if (isset($_POST['logout'])) {
    session_unset();  
    session_destroy(); 
    header("Location: login.php"); 
    exit();
}

// Ambil data lowongan
$sql = "SELECT * FROM lowongan";
$query = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="layout/style.css">
</head>
<body>
<?php
    include "layout/header.html"; // Menyertakan header
?>

<h3>Selamat datang, <?php echo($_SESSION['username']); ?></h3>

<!-- Tombol logout -->
<form method="post">
    <button type="submit" name="logout">Logout</button><br></br>
</form>

<form action="lowongan/addlowongan.php" method="post">
    <button type="submit" name="add_lowongan">tambah lowongan</button>
</form>

<?php
// Cek apakah ada lowongan
if (mysqli_num_rows($query) == 0) {
    // Jika tidak ada lowongan
    echo '<p>Tidak ada lowongan yang tersedia.</p>';
    echo '<button class="btn btn-primary" onclick="window.location.href=\'lowongan/addlowongan.php\'">Tambah Lowongan Pekerjaan</button>';
} else {
    // Jika ada lowongan
    echo '<h3>Lowongan Pekerjaan yang Tersedia</h3>';
    echo "<table border='1'>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>";
    
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
                <td>" .($row['judul']) . "</td>
                <td>" .($row['deskripsi']) . "</td>
                <td>" . $row['tanggal_posting'] . "</td>
                <td>
                    <a href='lowongan/editlowongan.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='lowongan/deletelowongan.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>
                </td>
            </tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
