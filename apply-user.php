<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $employer_id = $_POST['employer_id'];

    // Check if already applied
    $check = mysqli_query($con, "SELECT * FROM employer_applications WHERE user_id='$user_id' AND employer_id='$employer_id'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Already applied to this employer.'); window.history.back();</script>";
    } else {
        $insert = mysqli_query($con, "INSERT INTO employer_applications (user_id, employer_id) VALUES ('$user_id', '$employer_id')");
        if ($insert) {
            echo "<script>alert('Applied successfully.'); window.history.back();</script>";
        } else {
            echo "<script>alert('Application failed.'); window.history.back();</script>";
        }
    }
}
?>
