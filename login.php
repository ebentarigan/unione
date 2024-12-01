<?php
include "db_config.php";
session_start(); // Pastikan session dimulai terlebih dahulu

// Jika sudah login, langsung arahkan ke dashboard
if (isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi login
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['username'] = $data['username'];
        $_SESSION["is_login"] = true; // Menyimpan nama pengguna ke dalam sesi
        header("Location: dashboard.php"); // Redirect setelah login sukses
        exit();
    } else {
        echo "Username atau password salah.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="layout/style.css">
</head>
<body>
<?php
    include "layout/header.html";

?>
<h3>Masuk Akun</h3>
<br></br>
<form method="POST" action="login.php">
    <input type="text" placeholder="Username" name="username" required />
    <input type="password" placeholder="Password" name="password" required />
    <button type="submit" name="login">Masuk Sekarang</button>
</form>

</body>
</html>
