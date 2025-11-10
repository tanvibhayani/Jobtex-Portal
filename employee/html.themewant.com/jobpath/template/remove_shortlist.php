<?php
include 'connection.php';

if (isset($_GET['user_id'])) {
    $user_id = intval($_GET['user_id']);

    $sql = "UPDATE e_job_applications SET status = 'applied' WHERE user_id = $user_id AND status = 'shortlisted'";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Candidate removed from shortlist'); window.location.href='employer-dash-shortlist.php';</script>";
    } else {
        echo "<script>alert('Error removing candidate'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request'); window.history.back();</script>";
}
?>
