<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? 0;
    $status = $_POST['status'] ?? '';

    $allowed = ['Accepted', 'Rejected', 'Shortlisted'];
    if ($id && in_array($status, $allowed)) {
        $query = "UPDATE job_applications SET status = '$status' WHERE id = $id";
        if (mysqli_query($conn, $query)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "invalid";
    }
}
?>
