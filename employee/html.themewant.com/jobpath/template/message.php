<?php
include 'connection.php';
session_start();

$sender_id = $_SESSION['employer_id'];
$sender_role = 'employee';

$receiver_id = $_GET['user_id'];
$receiver_role = $_GET['user_role'];

$sql = "SELECT * FROM messages
        WHERE (sender_id = $sender_id AND receiver_id = $receiver_id AND sender_role = '$sender_role' AND receiver_role = '$receiver_role')
           OR (sender_id = $receiver_id AND receiver_id = $sender_id AND sender_role = '$receiver_role' AND receiver_role = '$sender_role')
        ORDER BY sent_at ASC";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $align = ($row['sender_id'] == $sender_id && $row['sender_role'] == $sender_role) ? 'text-end' : 'text-start';
    echo "<div class='message $align'><p>{$row['message']}</p><small>{$row['sent_at']}</small></div>";
}
?>
