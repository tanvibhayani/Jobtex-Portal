<?php
session_start();
include 'connection.php';
$admin_id = $_SESSION['admin_id'] ?? 0;

if ($admin_id) {
    mysqli_query($conn, "DELETE FROM admin_notifications WHERE admin_id = $admin_id");
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
