<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];
$id = $_GET['id'] ?? 0;

// Verify & delete interview
$sql = "DELETE FROM interview_schedules WHERE id = '$id' AND employer_id = '$employer_id'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Interview deleted successfully.'); window.location.href='employer-interview-list.php';</script>";
} else {
    echo "<script>alert('Failed to delete.'); window.location.href='employer-interview-list.php';</script>";
}
