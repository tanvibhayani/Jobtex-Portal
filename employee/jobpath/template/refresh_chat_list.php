<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['employer_id'])) exit('Unauthorized');

$employee_id = $_SESSION['employer_id'];

function getImage($img_path, $default) {
    return (!empty($img_path) && file_exists("../../../images/" . $img_path))
        ? "../../../images/" . $img_path
        : "../../../images/" . $default;
}

echo "<li><strong>Admins</strong></li>";

$admin_q = mysqli_query($con, "SELECT id, name, profile_image FROM admins");
while ($admin = mysqli_fetch_assoc($admin_q)) {
    $admin_id = $admin['id'];

    // Count unread messages from admin
    $unread_q = mysqli_query($con, "SELECT COUNT(*) AS cnt FROM messages
        WHERE sender_id = '$admin_id' AND sender_role = 'admin'
        AND receiver_id = '$employee_id' AND receiver_role = 'employee'
        AND is_read = 0");
    $unread = mysqli_fetch_assoc($unread_q)['cnt'];

    // Check if employer replied to this admin
    $reply_q = mysqli_query($con, "SELECT COUNT(*) AS cnt FROM messages
        WHERE sender_id = '$employee_id' AND sender_role = 'employee'
        AND receiver_id = '$admin_id' AND receiver_role = 'admin'");
    $replied = mysqli_fetch_assoc($reply_q)['cnt'];

    $img = getImage($admin['profile_image'], 'admin.png');

    echo "<li class='person'
        data-chat-id='{$admin_id}'
        data-chat-role='admin'
        data-name='" . htmlspecialchars($admin['name']) . "'
        data-image='{$img}'>
        <img src='{$img}'> <span>{$admin['name']}</span>";

    // Show notification only if employer has NOT replied yet
    if ($unread > 0 && $replied == 0) {
        echo " <span style='color: red; font-size: 12px;'>🔔 New message</span>";
    }

    echo "</li>";
}

echo "<li><strong style='margin-top:10px;'>Users</strong></li>";

$user_q = mysqli_query($con, "SELECT id, name, profile_image FROM registration");
while ($user = mysqli_fetch_assoc($user_q)) {
    $user_id = $user['id'];

    // Count unread messages from user
    $unread_q = mysqli_query($con, "SELECT COUNT(*) AS cnt FROM messages
        WHERE sender_id = '$user_id' AND sender_role = 'user'
        AND receiver_id = '$employee_id' AND receiver_role = 'employee'
        AND is_read = 0");
    $unread = mysqli_fetch_assoc($unread_q)['cnt'];

    // Check if employer replied to this user
    $reply_q = mysqli_query($con, "SELECT COUNT(*) AS cnt FROM messages
        WHERE sender_id = '$employee_id' AND sender_role = 'employee'
        AND receiver_id = '$user_id' AND receiver_role = 'user'");
    $replied = mysqli_fetch_assoc($reply_q)['cnt'];

    $img = getImage($user['profile_image'], 'user.png');

    echo "<li class='person'
        data-chat-id='{$user_id}'
        data-chat-role='user'
        data-name='" . htmlspecialchars($user['name']) . "'
        data-image='{$img}'>
        <img src='{$img}'> <span>{$user['name']}</span>";

    if ($unread > 0 && $replied == 0) {
        echo " <span style='color: red; font-size: 12px;'>🔔 New message</span>";
    }

    echo "</li>";
}
?>
