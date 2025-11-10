<?php
session_start();
include 'connection.php';

$employer_id = $_SESSION['employer_id'] ?? 0;
$job_id = $_GET['id'] ?? 0;

mysqli_query($con, "DELETE FROM jobs WHERE id='$job_id' AND employer_id='$employer_id'");
echo "<script>alert('Job deleted'); window.location='employer-jobs.php';</script>";
