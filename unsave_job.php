<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$job_id = $_POST['job_id'] ?? 0;

if ($job_id) {
    mysqli_query($con, "DELETE FROM saved_jobs WHERE user_id='$user_id' AND job_id='$job_id'");
}

header('Location: candidates-save-jobs.php');
exit;
?>