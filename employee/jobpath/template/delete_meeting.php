<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    mysqli_query($con, "DELETE FROM meetings WHERE id = $id");
}

header("Location: employer-dash-meeting.php");
exit();
?>
