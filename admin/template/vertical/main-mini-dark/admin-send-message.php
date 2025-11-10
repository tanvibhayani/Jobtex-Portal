<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['admin_id'])) {
    echo "not_logged_in";
    exit();
}

$admin_id = $_SESSION['admin_id'];
$admin_role = 'admin';

$receiver_id = $_POST['receiver_id'] ?? 0;
$receiver_role = $_POST['receiver_role'] ?? '';
$message = trim($_POST['message'] ?? '');

if (!$receiver_id || !$receiver_role || $message == '') {
    echo "invalid_data";
    exit();
}

$sql = "INSERT INTO messages (sender_id, sender_role, receiver_id, receiver_role, message, sent_at, is_read)
        VALUES ('$admin_id', '$admin_role', '$receiver_id', '$receiver_role', '$message', NOW(), 0)";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "error: " . mysqli_error($conn);
}
?>
