<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['employer_id'])) {
    echo "Unauthorized";
    exit();
}

$employee_id = $_SESSION['employer_id'];
$employee_role = 'employee';

$chat_id = $_GET['user_id'];
$chat_role = $_GET['user_role'];

if (!$chat_id || !$chat_role) {
    echo "Invalid user";
    exit();
}

// ✅ Mark incoming messages as read
mysqli_query($con, "UPDATE messages SET is_read = 1 
    WHERE receiver_id = '$employee_id' AND receiver_role = 'employee'
    AND sender_id = '$chat_id' AND sender_role = '$chat_role'");

// ✅ Fetch messages between employee and selected person
$query = "SELECT * FROM messages WHERE 
    (sender_id = '$employee_id' AND sender_role = 'employee' AND receiver_id = '$chat_id' AND receiver_role = '$chat_role')
    OR
    (sender_id = '$chat_id' AND sender_role = '$chat_role' AND receiver_id = '$employee_id' AND receiver_role = 'employee')
    ORDER BY sent_at ASC";

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $msg = htmlspecialchars($row['message']);
    $time = date("d M, h:i A", strtotime($row['sent_at']));

    if ($row['sender_id'] == $employee_id && $row['sender_role'] == $employee_role) {
        // Employee sent this
        echo "<div class='chat-bubble bubble-right'>{$msg}<span class='time'>{$time}</span></div>";
    } else {
        // Other person sent this
        echo "<div class='chat-bubble bubble-left'>{$msg}<span class='time'>{$time}</span></div>";
    }
}
?>
