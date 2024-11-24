<?php 
session_start(); // Pastikan session dimulai terlebih dahulu

// Jika tidak ada sesi login, arahkan ke halaman login
if (!isset($_SESSION["is_login"]) || $_SESSION["is_login"] === false) {
    header("Location: login.php");
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
