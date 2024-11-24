<?php
include "db_config.php";
session_start();
$register_message='';
$username = '';
$password = '';
$role = '';

if (isset($_POST['register'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO users(username, password,role) VALUES ('$username', '$password','user');";
    if (!$db->query($sql)) {
        $register_message ="daftar akun anda gagal,silahkan coba lagi" . $db->error;
    } else{
        $register_message ="daftar akun anda berhasil,silahkan login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
    <link rel="stylesheet" href="layout/style.css">
</head>
<body>
<?php
    include "layout/header.html";
?>
<h3>Register Akun</h3>
<i><?=$register_message?></i>
<form action="register.php" method="POST">
    <input type="text" placeholder="username" name="username" required />
    <input type="password" placeholder="password" name="password" required />
    <button type="submit" name="register">Daftar Sekarang</button>
</form>

</body>
</html>


