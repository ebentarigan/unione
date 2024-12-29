<?php
include "../db_config.php"; // Pastikan file ini mendefinisikan $db
session_start();

// Set batasan ukuran file upload di runtime
ini_set('upload_max_filesize', '100G');
ini_set('post_max_size', '100G');
ini_set('max_execution_time', '3000'); // Untuk menghindari timeout
ini_set('max_input_time', '3000');

// Validasi POST Content-Length
if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST) && empty($_FILES)) {
    echo "<script>alert('Ukuran data POST terlalu besar! Maksimum 100GB.');</script>";
    exit;
}

// Menambahkan course baru
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    // Validasi dan upload foto
    $photo_new_name = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        if ($_FILES['photo']['size'] > 100 * 1024 * 1024 * 1024) { // 100GB
            echo "<script>alert('Ukuran foto terlalu besar! Maksimum 100GB.');</script>";
            exit;
        }
        $photo = $_FILES['photo'];
        $photo_ext = strtolower(pathinfo($photo['name'], PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png'];

        if (in_array($photo_ext, $allowed_ext)) {
            $photo_new_name = uniqid('photo_', true) . '.' . $photo_ext;
            move_uploaded_file($photo['tmp_name'], "../img/" . $photo_new_name);
        } else {
            echo "<script>alert('Format foto tidak valid!');</script>";
            exit;
        }
    }

    // Validasi dan upload video
    $video_new_name = null;
    if (isset($_FILES['course_video']) && $_FILES['course_video']['error'] === 0) {
        if ($_FILES['course_video']['size'] > 100 * 1024 * 1024 * 1024) { // 100GB
            echo "<script>alert('Ukuran video terlalu besar! Maksimum 100GB.');</script>";
            exit;
        }
        $video = $_FILES['course_video'];
        $video_ext = strtolower(pathinfo($video['name'], PATHINFO_EXTENSION));
        $allowed_video_ext = ['mp4', 'avi', 'mov'];

        if (in_array($video_ext, $allowed_video_ext)) {
            $video_new_name = uniqid('video_', true) . '.' . $video_ext;
            move_uploaded_file($video['tmp_name'], "../img/" . $video_new_name);
        } else {
            echo "<script>alert('Format video tidak valid!');</script>";
            exit;
        }
    }

    // Menyimpan data course ke dalam database
    $stmt = $db->prepare("INSERT INTO course (title, description, category, status, photo, course_video, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("ssssss", $title, $description, $category, $status, $photo_new_name, $video_new_name);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Course berhasil ditambahkan!'); window.location.href = 'course.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Course</title>
    <link rel="stylesheet" href="../layout/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-3xl text-center mt-6">Create New Course</h1>

    <form action="" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-8 p-6 bg-white shadow-md">
        <div>
            <label for="title" class="block text-lg mb-2">Title</label>
            <input type="text" id="title" name="title" required class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div class="mt-4">
            <label for="description" class="block text-lg mb-2">Description</label>
            <textarea id="description" name="description" rows="4" required class="w-full p-2 border border-gray-300 rounded-md"></textarea>
        </div>
        <div class="mt-4">
            <label for="category" class="block text-lg mb-2">Category</label>
            <input type="text" id="category" name="category" required class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div class="mt-4">
            <label for="status" class="block text-lg mb-2">Status</label>
            <input type="text" id="status" name="status" required class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div class="mt-4">
            <label for="photo" class="block text-lg mb-2">Course Photo</label>
            <input type="file" id="photo" name="photo" accept="image/*" class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div class="mt-4">
            <label for="course_video" class="block text-lg mb-2">Course Video</label>
            <input type="file" id="course_video" name="course_video" accept="video/*" class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <button type="submit" class="mt-6 w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Create Course</button>
    </form>
</body>
</html>
