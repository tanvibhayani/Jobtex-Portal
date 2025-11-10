<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login first.'); window.location='auth-login-dark.php';</script>";
    exit;
}

// Get interview ID from URL
$interview_id = $_GET['id'] ?? 0;

// Validate ID
if ($interview_id <= 0) {
    echo "<script>alert('Invalid Interview ID.'); window.location='admin-manage-interviews.php';</script>";
    exit;
}

// Delete interview
$delete = mysqli_query($conn, "DELETE FROM interview_schedule WHERE id = $interview_id");

if ($delete) {
    echo "<script>alert('Interview deleted successfully.'); window.location='admin-manage-interviews.php';</script>";
} else {
    echo "<script>alert('Failed to delete interview. Please try again.'); window.location='admin-manage-interviews.php';</script>";
}
?>
