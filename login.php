<?php
include "db_config.php";
session_start();

// Jika sudah login, arahkan ke dashboard
if (isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi login dengan prepared statement
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['username'] = $data['username'];
        $_SESSION["is_login"] = true;
        header("Location: dashboard.php"); // Redirect setelah login sukses
        exit();
    } else {
        $error_message = "Username atau password salah.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
</head>

<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-color: black;">
    <!-- Glass Login Card with Image -->
    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-xl shadow-lg p-8 w-full max-w-4xl flex items-center">
        <!-- Left Side - Image -->
        <div class="w-1/2 hidden md:block">
            <img src="img/login-picture.png" alt="Login Illustration" class="rounded-lg">
        </div>
        <!-- Right Side - Form -->
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold text-center text-white mb-6">Login</h2>

            <!-- Tampilkan pesan error jika ada -->
            <?php if (isset($error_message)): ?>
                <p class="text-red-500 text-center mb-4"><?= htmlspecialchars($error_message) ?></p>
            <?php endif; ?>

            <form action="" method="POST">
                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-200 mb-2">Username</label>
                    <input type="text" name="username" id="username"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your username" required />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-200 mb-2">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 bg-white bg-opacity-20 text-white placeholder-gray-300 border border-white border-opacity-30 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter your password" required />
                </div>

                <!-- Submit Button -->
                <button type="submit" name="login"
                    class="w-full px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Login
                </button>
            </form>

            <!-- Additional Links -->
            <p class="text-center text-sm text-gray-300 mt-4">
                Don't have an account? <a href="#" class="text-blue-400 hover:underline">Sign Up</a>
            </p>

            <div class="container mx-auto flex items-center justify-around flex items-center p-4">
                <img src="img/google.png" alt="Google Logo" class="h-10">
                <img src="img/Facebook.png" alt="Facebook Logo" class="h-10">
                <img src="img/microsoft.png" alt="Microsoft Logo" class="h-10">
            </div>
        </div>
    </div>
</body>

</html>
