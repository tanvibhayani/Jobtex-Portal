<?php
include 'connection.php';
include 'header.php';
include 'sidebar.php';
if(session_status()===PHP_SESSION_NONE)
{
    session_start();
}

if (!isset($_SESSION['employer_id'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

$employee_id = $_SESSION['employer_id'];
$employee_role = 'employee';
?>

<div class="main-content">
    <h6 class="fw-semibold mb-4">Messages</h6>

    <div class="candidate__message">
        <div class="candidate__message__content">
            <!-- LEFT USER LIST -->
            <div class="message__left">
                <div class="search__job">
                    <div class="position-relative">
                        <input type="text" id="search" placeholder="Search Admin/User">
                        <i class="fa-light fa-magnifying-glass"></i>
                    </div>
                </div>

                <div class="chat__user__list" id="userList">
                    <h6 class="font-16 mb-2">Admins</h6>
                    <?php
                    $admin_sql = mysqli_query($con, "SELECT id, name FROM admins");
                    while ($admin = mysqli_fetch_assoc($admin_sql)) {
                        $aid = $admin['id'];
                        $aname = htmlspecialchars($admin['name'], ENT_QUOTES);
                        echo "<div class='single__chat__person' onclick='loadMessages($aid, \"admin\", \"$aname\")'>
                                <div class='d-flex align-items-center gap-30'>
                                    <div class='avater'><img src='assets/img/icon/admin.png'></div>
                                    <div class='chat__person__meta'><h6 class='font-20 fw-medium mb-0'>$aname</h6></div>
                                </div>
                              </div>";
                    }
                    ?>

                    <h6 class="font-16 mb-2 mt-3">Users</h6>
                    <?php
                    $user_sql = mysqli_query($con, "SELECT id, name FROM registration");
                    while ($user = mysqli_fetch_assoc($user_sql)) {
                        $uid = $user['id'];
                        $uname = htmlspecialchars($user['name'], ENT_QUOTES);
                        echo "<div class='single__chat__person' onclick='loadMessages($uid, \"user\", \"$uname\")'>
                                <div class='d-flex align-items-center gap-30'>
                                    <div class='avater'><img src='assets/img/icon/user.png'></div>
                                    <div class='chat__person__meta'><h6 class='font-20 fw-medium mb-0'>$uname</h6></div>
                                </div>
                              </div>";
                    }
                    ?>
                </div>
            </div>

            <!-- RIGHT CHAT WINDOW -->
            <div class="message__content">
                <div class="chat__header">
                    <div class="avatar"><img class="rounded-5" src="assets/img/author/1.svg" alt=""></div>
                    <div class="content">
                        <h6 class="font-20 fw-semibold mb-0" id="chatWith">Select a user</h6>
                    </div>
                </div>

                <div class="chat__content" id="chatBody"></div>

                <div class="input__msg">
                    <form id="messageForm">
                        <input type="text" name="message" placeholder="Type a message" required>
                        <input type="hidden" name="receiver_id" id="receiver_id">
                        <input type="hidden" name="receiver_role" id="receiver_role">
                        <button type="submit" class="message__btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let currentReceiver = null;
let currentRole = null;
let currentName = null;

function loadMessages(uid, role, name) {
    currentReceiver = uid;
    currentRole = role;
    currentName = name;

    document.getElementById("receiver_id").value = uid;
    document.getElementById("receiver_role").value = role;
    document.getElementById("chatWith").innerText = name + " (" + role + ")";

    fetch('message.php?user_id=' + uid + '&user_role=' + role)
        .then(res => res.text())
        .then(data => {
            document.getElementById('chatBody').innerHTML = data;
        });
}

document.getElementById("messageForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const message = this.message.value;

    if (currentReceiver && message.trim() !== '') {
        fetch('send_message.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'receiver_id=' + currentReceiver + '&receiver_role=' + currentRole + '&message=' + encodeURIComponent(message)
        }).then(() => {
            this.message.value = '';
            loadMessages(currentReceiver, currentRole, currentName);
        });
    }
});

setInterval(() => {
    if (currentReceiver && currentRole && currentName) {
        loadMessages(currentReceiver, currentRole, currentName);
    }
}, 5000);
</script>

<?php include 'footer1.php'; ?>
