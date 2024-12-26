<?php
include "db_config.php";
session_start();
$register_message='';
$username = '';
$password = '';
$role = '';


if (isset($_POST['register'])) {
    // Mendapatkan data dari form
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $role = 'user'; // Default role

    // Validasi input
    if (empty($username) || empty($password) || empty($email)) {
        $register_message = "Semua field harus diisi.";
    } else {
        // Hash password untuk keamanan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Menggunakan prepared statement untuk menghindari SQL Injection
        $stmt = $db->prepare("INSERT INTO users(username, password, role, email) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            die("Error pada prepare statement: " . $db->error);
        }
        
        // Eksekusi query
        if ($stmt->execute()) {
            $register_message = "Pendaftaran berhasil, silakan login.";
        } else {
            $register_message = "Pendaftaran gagal: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-color: black;">
    <!-- Glass Login Card with Image -->
    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl shadow-lg p-8 w-full max-w-4xl flex items-center">
        <!-- Left Side - Image -->
        <div class="w-1/2 hidden md:block">
            <img src="img/register-picture.png" alt="Register Illustration" class="rounded-lg">
        </div>
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold text-center text-white mb-6">Register</h2>

            <!-- Tampilkan pesan -->
            <?php if (!empty($register_message)) : ?>
                <div class="mb-4 text-center text-white bg-red-500 bg-opacity-75 p-2 rounded">
                    <?= htmlspecialchars($register_message); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-200 mb-2">Username</label>
                    <input type="text" id="username" name="username"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your username">
                </div>
                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-200 mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your email">
                </div>
                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-200 mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your password">
                </div>

                <!-- Submit Button -->
                <button type="submit" name="register"
                    class="w-full px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Sign Up
                </button>
            </form>

            <!-- Additional Links -->
            <p class="text-center text-sm text-gray-300 mt-4">
                Sudah punya akun? <a href="login.php" class="text-blue-400 hover:underline">Login</a>
            </p>

            <div class="container mx-auto flex items-center justify-around flex items-center p-4">
                <img src="img/google.png" alt="Logo Google" class="h-10">
                <img src="img/Facebook.png" alt="Logo Facebook" class="h-10">
                <img src="img/microsoft.png" alt="Logo Microsoft" class="h-10">
            </div>
        </div>
    </div>
</body>

</html>
