<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location='employer-login.php';</script>";
    exit;
}

$employer_id = $_SESSION['employer_id'];

if (isset($_GET['id'])) {
    $job_id = intval($_GET['id']);

    $delete = mysqli_query($con, "DELETE FROM jobs WHERE id = $job_id AND employer_id = $employer_id");

    if ($delete) {
        echo "<script>alert('Job deleted successfully.'); window.location='employer-manage-jobs.php';</script>";
    } else {
        echo "<script>alert('Failed to delete job.'); window.location='employer-manage-jobs.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request.'); window.location='employer-manage-jobs.php';</script>";
}
?>