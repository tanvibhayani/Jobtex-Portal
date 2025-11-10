<?php
session_start();
include 'connection.php';

$admin_id = $_SESSION['admin_id'] ?? 0;
if (!$admin_id) {
    echo "<script>alert('Please login'); window.location='admin-login.php';</script>";
    exit;
}

$job_id = $_GET['id'] ?? 0;

if ($job_id) {
    mysqli_query($conn, "DELETE FROM jobs WHERE id='$job_id'");
    echo "<script>alert('Job deleted'); window.location='admin-jobs.php';</script>";
} else {
    echo "<script>alert('Invalid job ID'); window.location='admin-jobs.php';</script>";
}
