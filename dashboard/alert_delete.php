<?php
include 'connection.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

if (!isset($_GET['id'])) {
  die("Alert ID not provided.");
}

$alert_id = intval($_GET['id']);
$user_id = $_SESSION['user_id'];

// Correct DELETE query with user_id check
$query = "DELETE FROM job_alerts WHERE id = $alert_id AND user_id = $user_id";
$result = mysqli_query($con, $query);

// Optional debugging
// echo mysqli_error($con);

if ($result && mysqli_affected_rows($con) > 0) {
  // Success
  header("Location: candidates-alerts-jobs.php?deleted=1");
  exit();
} else {
  // Failure
  header("Location: candidates-alerts-jobs.php?error=1");
  exit();
}
?>
