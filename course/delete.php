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

$id = $_GET['id'];
$query = "DELETE FROM course WHERE course_id=$id";
$conn->query($query);

header("Location: index.php");
?>
