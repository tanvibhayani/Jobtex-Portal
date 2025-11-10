<?php
include 'connection.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM saved_candidates WHERE id = $id";
  mysqli_query($conn, $query);
}

header("Location: saved_candidates.php");
exit();
?>