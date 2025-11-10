<?php
include 'connection.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid User ID'); window.location='admin-manage-users.php';</script>";
    exit;
}

$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM registration WHERE id = '$id'");

if ($delete) {
    echo "<script>alert('User deleted successfully'); window.location='admin-manage-users.php';</script>";
} else {
    echo "<script>alert('Failed to delete user'); window.location='admin-manage-users.php';</script>";
}
