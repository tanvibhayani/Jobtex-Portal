<?php
include 'connection.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid Employer ID'); window.location='admin-manage-employers.php';</script>";
    exit;
}

$id = $_GET['id'];

// Optional: Delete logo file from uploads folder
$check = mysqli_query($conn, "SELECT logo_image FROM employers WHERE id='$id'");
$data = mysqli_fetch_assoc($check);
if ($data && file_exists('uploads/' . $data['logo_image'])) {
    unlink('uploads/' . $data['logo_image']);
}

// Delete employer
$query = mysqli_query($conn, "DELETE FROM employers WHERE id='$id'");

if ($query) {
    echo "<script>alert('Employer deleted successfully'); window.location='admin-manage-employers.php';</script>";
} else {
    echo "<script>alert('Deletion failed'); window.location='admin-manage-employers.php';</script>";
}
