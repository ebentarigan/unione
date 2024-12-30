<?php
include "../db_config.php"; // Pastikan file ini mendefinisikan $db
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href = '../login.php';</script>";
    exit;
}

// Ambil data user yang login
$username = $_SESSION['username'];
$query = "SELECT role FROM users WHERE username = ?";
$stmt = $db->prepare($query); // Gunakan $db sebagai variabel koneksi
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$role = $user['role'];

// Ambil data courses
$sql = "SELECT * FROM course";
$courses = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unione</title>
    <link rel="stylesheet" href="../layout/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>


<body class="bg-white">

    <!-- Header -->
    <header>
        <nav>
            <div class="Logo">
                <img src="../img/logoputihtest.png" alt="Logo Website" width="100" />
            </div>
            <div class="flex items-center space-x-2 flex-grow ml-6 max-w-full">
                <input type="search"
                    class="p-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Search..." />
                <div>
                    <button class="p-2 text-white rounded-full hover:bg-blue-600 transition duration-200">
                        <i class="ri-search-line text-white"></i>
                    </button>
                </div>
            </div>
            <ul>
                <li><a href="index.php">Course</a></li>
                <li><a href="about.html">Job</a></li>
                <li><a href="contact.html">Community</a></li>
                <li><a href="login.html">Connection</a></li>
                <li><a href="register.html">News</a></li>
            </ul>
        </nav>
    </header>

    <!-- Carousel -->
    <div class="relative w-full h-[384px] overflow-hidden">
        <div class="flex transition-transform duration-700 ease-in-out" id="carousel">
            <!-- Slide 1 -->
            <div class="flex-shrink-0 w-full">
                <img src="../img/header-kursus2.jpg" alt="Slide 1" class="w-full h-auto">
            </div>
            <!-- Slide 2 -->
            <div class="flex-shrink-0 w-full">
                <img src="../img/header-kursus2.jpg" alt="Slide 2" class="w-full h-auto">
            </div>
            <!-- Slide 3 -->
            <div class="flex-shrink-0 w-full">
                <img src="../img/header-kursus2.jpg" alt="Slide 3" class="w-full h-auto">
            </div>
        </div>

        <!-- Navigation dots -->
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-3">
            <button class="w-3 h-3 bg-gray-300 rounded-full" data-slide="0"></button>
            <button class="w-3 h-3 bg-gray-300 rounded-full" data-slide="1"></button>
            <button class="w-3 h-3 bg-gray-300 rounded-full" data-slide="2"></button>
        </div>
    </div>

    <script>
        const carousel = document.getElementById('carousel');
        const slides = carousel.children;
        const totalSlides = slides.length;
        const dots = document.querySelectorAll('[data-slide]');

        let currentIndex = 0;

        // Function to update slide position
        function updateSlide() {
            const offset = -(currentIndex * 100);
            carousel.style.transform = `translateX(${offset}%)`;

            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-blue-500', index === currentIndex);
                dot.classList.toggle('bg-gray-300', index !== currentIndex);
            });
        }

        // Function to go to the next slide
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlide();
        }

        // Auto-slide every 3 seconds
        setInterval(nextSlide, 3000);

        // Add click event to dots for manual navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateSlide();
            });
        });

        // Initialize slide position
        updateSlide();
    </script>

<!-- Tombol Add Course dan Judul -->
<?php if ($role === 'trainers'): ?>
<h1 class="text-2xl font-bold flex items-center space-x-4 mt-4 ml-6 m">Daftar Kursus
    <a href="create_course.php">
        <button
            class="bg-green-500 text-white px-4 py-2 rounded text-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 mx-9">
            Tambah Kursus
        </button>
    </a>
</h1>
<?php endif; ?>


    <!-- Course Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
        <?php while ($row = $courses->fetch_assoc()): ?>
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                <!-- Gambar Utama -->
                <img class="w-full" src="https://via.placeholder.com/400x200" alt="Card image"
                    sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 33vw">

                <div class="px-6 py-4">
                    <!-- Informasi Profile dan Title -->
                    <div class="flex items-center space-x-3">
                        <img class="w-10 h-10 rounded-full object-cover" src="https://via.placeholder.com/100"
                            alt="Profile picture">
                        <h2 class="font-bold text-xl"><?= htmlspecialchars($row['title']) ?></h2>
                    </div>
                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-base mt-2"><?= htmlspecialchars($row['description']) ?></p>
                </div>

                <div class="px-6 pt-4 pb-2 flex justify-between items-center">
                    <!-- Tombol -->
                    <a href="course-video.php?id=<?= $row['course_id'] ?>">
                        <button
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Cek
                            sekarang</button>
                    </a>
                    <!-- Opsi Edit/Delete untuk Trainers -->
                    <?php if ($role === 'trainers'): ?>
                        <div class="flex space-x-2">
                            <a href="update_course.php?id=<?= $row['course_id'] ?>"
                                class="text-blue-500 hover:underline">Edit</a>
                            <a href="delete_course.php?id=<?= $row['course_id'] ?>" class="text-red-500 hover:underline"
                                onclick="return confirm('Are you sure?')">Delete</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

</body>

</html>
