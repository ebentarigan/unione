<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unione";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SESSION['role'] !== 'trainers') {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $query = "SELECT * FROM course WHERE course_id=$id";
    $result = $conn->query($query);
    $course = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['course_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    $query = "UPDATE course SET title='$title', description='$description', category='$category', status='$status' WHERE course_id=$id";
    $conn->query($query);

    header("Location: index.php");
}
?>

<form method="POST">
    <input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
    <input type="text" name="title" value="<?= $course['title'] ?>" required>
    <textarea name="description"><?= $course['description'] ?></textarea>
    <input type="text" name="category" value="<?= $course['category'] ?>" required>
    <input type="text" name="status" value="<?= $course['status'] ?>" required>
    <button type="submit">Save</button>
</form>
