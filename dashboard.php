<?php
session_start(); // Mulai sesi terlebih dahulu


if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] != true) {
    header("Location: login.php"); // Arahkan ke halaman login
    exit();
}

if (isset($_POST['logout'])) {
        session_unset();  // Menghapus semua data session
        session_destroy(); // Menghancurkan session
        header("Location: login.php"); // Redirect ke halaman login setelah logout
        exit();
}
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
    include "layout/header.html";
?>
<h3>Selamat datang, <?php echo $_SESSION['username']; ?></h3> 

<!-- Logout form -->
<form method="POST">
    <button type="submit" name="logout">Logout</button>
</form>

</body>
</html>
