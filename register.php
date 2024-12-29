<?php
include "db_config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $role = isset($_POST['role']) ? trim($_POST['role']) : null;

    // Validasi: Pastikan semua field diisi
    if (empty($username) || empty($password) || empty($email) || empty($role)) {
        echo "<script>alert('Semua field harus diisi, termasuk memilih role!'); history.back();</script>";
        exit;
    }

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email tidak valid!'); history.back();</script>";
        exit;
    }

    // Validasi role
    $valid_roles = ['customers', 'recruiters', 'trainers'];
    if (!in_array($role, $valid_roles)) {
        echo "<script>alert('Role tidak valid, silakan pilih role yang tersedia!'); history.back();</script>";
        exit;
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data ke database
    $stmt = $db->prepare("INSERT INTO users (username, password, email, role) VALUES (?, ?, ?, ?)");

    // Cek apakah prepared statement berhasil dibuat
    if ($stmt === false) {
        echo "<script>alert('Error preparing statement: " . $db->error . "'); history.back();</script>";
        exit;
    }

    // Bind parameter
    $stmt->bind_param("ssss", $username, $hashed_password, $email, $role);

    // Eksekusi dan cek hasil
    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil!'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: " . $stmt->error . "'); history.back();</script>";
    }

    $stmt->close();
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
    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl shadow-lg p-8 w-full max-w-4xl flex items-center">
        <!-- Left Side - Image -->
        <div class="w-1/2 hidden md:block">
            <img src="img/register-picture.png" alt="Register Illustration" class="rounded-lg">
        </div>
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold text-center text-white mb-6">Register</h2>
            <form method="POST" action="">
                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-200 mb-2">Username</label>
                    <input type="text" id="username" name="username"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your username" required>
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-200 mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your email" required>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-200 mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your password" required>
                </div>

                <!-- Role Selection -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-white mb-2">Select Role</label>
                    <div class="flex flex-col space-y-2 text-white">
                        <label class="flex items-center">
                            <input type="radio" name="role" value="customers" class="mr-2" required>
                            <span>Customer</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="role" value="recruiters" class="mr-2" required>
                            <span>Recruiter</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="role" value="trainers" class="mr-2" required>
                            <span>Trainer</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" name="register"
                    class="w-full px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Sign Up
                </button>
            </form>
            <p class="text-center text-sm text-gray-300 mt-4">
                Sudah punya akun? <a href="login.php" class="text-blue-400 hover:underline">Login</a>
            </p>
        </div>
    </div>
</body>
</html>
