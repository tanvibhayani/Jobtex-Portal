<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    exit("Unauthorized");
}

$user_id = $_SESSION['user_id'];
$user_role = 'user';

$receiver_id = isset($_GET['receiver_id']) ? intval($_GET['receiver_id']) : 0;
$receiver_role = isset($_GET['receiver_role']) ? $_GET['receiver_role'] : '';

if ($receiver_id === 0 || $receiver_role === '') {
    exit("Missing data");
}

$query = "SELECT * FROM messages
          WHERE 
            (sender_id = '$user_id' AND sender_role = '$user_role' AND receiver_id = '$receiver_id' AND receiver_role = '$receiver_role')
            OR 
            (sender_id = '$receiver_id' AND sender_role = '$receiver_role' AND receiver_id = '$user_id' AND receiver_role = '$user_role')
          ORDER BY sent_at ASC";

$result = mysqli_query($con, $query);

if (!$result) {
    echo "Error: " . mysqli_error($con);
    exit;
}

while ($row = mysqli_fetch_assoc($result)) {
    $isSender = ($row['sender_id'] == $user_id && $row['sender_role'] == $user_role);
    $align = $isSender ? 'right' : 'left';
    $bg = $isSender ? '#d1e7dd' : '#f8d7da';
    $msg = htmlspecialchars($row['message']);
    $time = date("d M, h:i A", strtotime($row['sent_at']));

    echo "<div style='text-align:$align; margin:10px 0'>
            <div style='display:inline-block; background:$bg; padding:10px 15px; border-radius:10px; max-width:70%'>
                $msg
                <div style='font-size:11px; color:#555; text-align:right;'>$time</div>
            </div>
          </div>";
}
?>
