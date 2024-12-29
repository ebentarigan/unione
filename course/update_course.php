<?php
include "../db_config.php"; // Pastikan file ini mendefinisikan $db
session_start();

// Debugging session (hapus ini jika sudah selesai debugging)
// var_dump($_SESSION); exit;




// Koneksi database dan handling request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        echo "<script>alert('ID course tidak ditemukan!'); window.location.href = 'course.php';</script>";
        exit;
    }

    $id = $_GET['id'];
    $stmt = $db->prepare("SELECT * FROM course WHERE course_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $course = $result->fetch_assoc();

    if (!$course) {
        echo "<script>alert('Course tidak ditemukan!'); window.location.href = 'course.php';</script>";
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['course_id']) || empty($_POST['course_id'])) {
        echo "<script>alert('ID course tidak valid!'); window.location.href = 'course.php';</script>";
        exit;
    }

    $id = $_POST['course_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    // Update course di database
    $stmt = $db->prepare("UPDATE course SET title = ?, description = ?, category = ?, status = ? WHERE course_id = ?");
    $stmt->bind_param("ssssi", $title, $description, $category, $status, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Course berhasil diperbarui!'); window.location.href = 'course.php';</script>";
    } else {
        echo "<script>alert('Tidak ada perubahan atau terjadi kesalahan!'); window.location.href = 'course.php';</script>";
    }

    $stmt->close();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Course</title>
    <link rel="stylesheet" href="../layout/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-3xl text-center mt-6">Edit Course</h1>

    <form action="" method="POST" class="max-w-lg mx-auto mt-8 p-6 bg-white shadow-md">
        <input type="hidden" name="course_id" value="<?= htmlspecialchars($course['course_id']) ?>" />
        <div>
            <label for="title" class="block text-lg mb-2">Title</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($course['title']) ?>" required class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div class="mt-4">
            <label for="description" class="block text-lg mb-2">Description</label>
            <textarea id="description" name="description" rows="4" required class="w-full p-2 border border-gray-300 rounded-md"><?= htmlspecialchars($course['description']) ?></textarea>
        </div>
        <div class="mt-4">
            <label for="category" class="block text-lg mb-2">Category</label>
            <input type="text" id="category" name="category" value="<?= htmlspecialchars($course['category']) ?>" required class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div class="mt-4">
            <label for="status" class="block text-lg mb-2">Status</label>
            <input type="text" id="status" name="status" value="<?= htmlspecialchars($course['status']) ?>" required class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <button type="submit" class="mt-6 w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update Course</button>
    </form>
</body>

</html>
