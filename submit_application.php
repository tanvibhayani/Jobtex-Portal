<?php
include 'connection.php';
session_start();

$user_id = $_SESSION['user_id'] ?? 0;

if (!$user_id || !isset($_POST['submit_application'])) {
    header("Location: find_jobs-list.php");
    exit;
}

$job_id = $_POST['job_id'];
$cover_letter = mysqli_real_escape_string($con, $_POST['cover_letter']);
$applied_date = date("Y-m-d");

// Handle resume upload
$resume_name = $_FILES['resume']['name'];
$resume_tmp = $_FILES['resume']['tmp_name'];
$resume_ext = strtolower(pathinfo($resume_name, PATHINFO_EXTENSION));

if ($resume_ext !== 'pdf') {
    echo "<script>alert('Only PDF files are allowed.');window.history.back();</script>";
    exit;
}

// ✅ Use original name OR use unique name - here using original
$upload_folder = 'resume/';
$new_resume_name = basename($resume_name); // original name
$target_path = $upload_folder . $new_resume_name;

// ✅ Create folder if doesn't exist
if (!is_dir($upload_folder)) {
    mkdir($upload_folder, 0777, true);
}

// ✅ Move file
if (move_uploaded_file($resume_tmp, $target_path)) {
    // Insert application
    $query = "INSERT INTO job_applications (user_id, job_id, status, applied_date, resume, cover_letter) 
              VALUES ('$user_id', '$job_id', 'Pending', '$applied_date', '$new_resume_name', '$cover_letter')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Application submitted successfully!');window.location='my-applications.php';</script>";
    } else {
        echo "<script>alert('Error: Could not submit application.');window.history.back();</script>";
    }
} else {
    echo "<script>alert('Resume upload failed.');window.history.back();</script>";
}
?>
