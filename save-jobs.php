<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to save this job.'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];
$job_id = $_POST['job_id'] ?? 0;

// Check if already saved
$check = mysqli_query($con, "SELECT * FROM saved_jobs WHERE user_id='$user_id' AND job_id='$job_id'");
if (mysqli_num_rows($check) > 0) {
    echo "<script>alert('You have already saved this job.'); window.history.back();</script>";
    exit;
}

// Save job
$save = mysqli_query($con, "INSERT INTO saved_jobs (user_id, job_id) VALUES ('$user_id', '$job_id')");
if ($save) {
    echo "<script>alert('Job saved successfully!'); window.history.back();</script>";
} else {
    echo "<script>alert('Failed to save job.'); window.history.back();</script>";
}
?>
