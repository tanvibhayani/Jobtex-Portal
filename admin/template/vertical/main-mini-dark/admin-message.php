<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['admin_id'])) {
    echo "Not logged in.";
    exit();
}

$admin_id = $_SESSION['admin_id'];
$admin_role = 'admin';

$receiver_id = $_GET['user_id'] ?? 0;
$receiver_role = $_GET['user_role'] ?? '';

if (!$receiver_id || !$receiver_role) {
    echo "Invalid request.";
    exit();
}

$sql = "SELECT * FROM messages
        WHERE 
        (sender_id = '$admin_id' AND sender_role = '$admin_role' AND receiver_id = '$receiver_id' AND receiver_role = '$receiver_role')
        OR
        (sender_id = '$receiver_id' AND sender_role = '$receiver_role' AND receiver_id = '$admin_id' AND receiver_role = '$admin_role')
        ORDER BY sent_at ASC";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $bubble_class = ($row['sender_id'] == $admin_id && $row['sender_role'] == $admin_role) ? 'bubble-right' : 'bubble-left';
    $time = date("d M Y, h:i A", strtotime($row['sent_at']));
    echo "<div class='chat-bubble $bubble_class'>{$row['message']}<span class='time'>{$time}</span></div>";
}
?>
