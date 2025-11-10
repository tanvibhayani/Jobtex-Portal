<?php
session_start();
session_unset(); // All session variables unset
session_destroy(); // Destroy the session

// Redirect to home or login page
header("Location: index.php");
exit();
?>