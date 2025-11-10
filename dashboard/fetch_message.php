<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(session_status()===PHP_SESSION_NONE)
    {
        session_start();
    }
    include 'connection.php';

    if (!isset($_SESSION['user_id'])) {
        echo "unauthorized";
        exit();
    }

    $sender_id = $_SESSION['user_id'];
    $sender_role = 'user';
    $receiver_id = mysqli_real_escape_string($con, $_POST['receiver_id']);
    $receiver_role = mysqli_real_escape_string($con, $_POST['receiver_role']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    if (empty($message) || empty($receiver_id) || empty($receiver_role)) {
        echo "invalid";
        exit();
    }

    $query = "INSERT INTO messages (sender_id, sender_role, receiver_id, receiver_role, message, is_read) 
              VALUES ('$sender_id', '$sender_role', '$receiver_id', '$receiver_role', '$message', 0)";

    if (mysqli_query($con, $query)) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($con);
    }
}
?>
