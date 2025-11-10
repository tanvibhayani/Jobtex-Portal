<?php
include 'connection.php';
session_start();

if (!isset($_SESSION['employer_id'])) {
    http_response_code(403);
    exit("Unauthorized");
}

$sender_id = $_SESSION['employer_id'];
$sender_role = 'employee';

$receiver_id = $_POST['receiver_id'];
$receiver_role = $_POST['receiver_role'];
$message = mysqli_real_escape_string($con, $_POST['message']);

$sql = "INSERT INTO messages (sender_id, sender_role, receiver_id, receiver_role, message)
        VALUES ($sender_id, '$sender_role', $receiver_id, '$receiver_role', '$message')";

mysqli_query($con, $sql);
?>
