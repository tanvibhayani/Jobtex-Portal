<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['employer_id'])) exit("Unauthorized");

$sender_id = $_SESSION['employer_id'];
$sender_role = 'employee';
$receiver_id = $_POST['receiver_id'];
$receiver_role = $_POST['receiver_role'];
$message = trim($_POST['message']);

if ($message == '') exit("Empty message");

$sql = "INSERT INTO messages (sender_id, sender_role, receiver_id, receiver_role, message, is_read, sent_at)
        VALUES ('$sender_id', '$sender_role', '$receiver_id', '$receiver_role', '$message', 0, NOW())";

if (mysqli_query($con, $sql)) {
    echo "success";
} else {
    echo "error";
}
?>
