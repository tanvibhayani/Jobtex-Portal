<?php
include 'connection.php';
include 'header1.php';

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'candidate') {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_role = $_SESSION['role'];
?>
<div class="left-menu">
<?php include 'sidemenu.php'; ?>
<h6 class="fw-semibold mb-4">Messages</h6>
<div class="candidate__message">
    <div class="candidate__message__content">
        <!-- LEFT USER LIST -->
        <div class="message__left">
            <div class="search__job">
                <div class="position-relative">
                    <input type="text" id="search" placeholder="Search Admin/Employer">
                    <i class="fa-light fa-magnifying-glass"></i>
                </div>
            </div>

            <div class="chat__user__list" id="userList">
                <h6 class="font-16 mb-2">Admins</h6>
                <?php
                $admin_sql = mysqli_query($con, "SELECT idPrimary AS id, name, profile_image FROM admins");
                if ($admin_sql) {
                    while ($admin = mysqli_fetch_assoc($admin_sql)) {
                        $aid = $admin['id'];
                        $aname = htmlspecialchars($admin['name'], ENT_QUOTES);
                        $aimg = !empty($admin['profile_image']) ? $admin['profile_image'] : 'assets/img/icon/admin.png';
                        echo "<div class='single__chat__person' onclick='loadMessages($aid, \"admin\", \"$aname\", \"$aimg\")'>
                                <div class='d-flex align-items-center gap-30'>
                                    <div class='avater'><img src='\$aimg'></div>
                                    <div class='chat__person__meta'><h6 class='font-20 fw-medium mb-0'>\$aname</h6></div>
                                </div>
                              </div>";
                    }
                }
                ?>

                <h6 class="font-16 mb-2 mt-3">Employees</h6>
                <?php
                $emp_sql = mysqli_query($con, "SELECT id, name, profile_image FROM e_registration");
                if ($emp_sql) {
                    while ($emp = mysqli_fetch_assoc($emp_sql)) {
                        $eid = $emp['id'];
                        $ename = htmlspecialchars($emp['name'], ENT_QUOTES);
                        $eimg = !empty($emp['profile_image']) ? $emp['profile_image'] : 'assets/img/icon/user.png';
                        echo "<div class='single__chat__person' onclick='loadMessages($eid, \"employer\", \"$ename\", \"$eimg\")'>
                                <div class='d-flex align-items-center gap-30'>
                                    <div class='avater'><img src='\$eimg'></div>
                                    <div class='chat__person__meta'><h6 class='font-20 fw-medium mb-0'>\$ename</h6></div>
                                </div>
                              </div>";
                    }
                }
                ?>
            </div>
        </div>

        <!-- RIGHT CHAT WINDOW -->
        <div class="message__content">
            <div class="chat__header">
                <div class="avatar"><img id="chatAvatar" class="rounded-5" src="assets/img/icon/upwork.svg" alt=""></div>
                <div class="content">
                    <h6 class="font-20 fw-semibold mb-0" id="chatWith">Select a user</h6>
                    <span class="status" id="userStatus">Offline</span>
                </div>
            </div>

            <div class="chat__content" id="chatBody" style="height:400px; overflow-y:auto; border:1px solid #ddd; padding:15px;"></div>

            <div class="input__msg">
                <form id="messageForm">
                    <input type="text" name="message" id="message" placeholder="Type a message" required>
                    <input type="hidden" name="receiver_id" id="receiver_id">
                    <input type="hidden" name="receiver_role" id="receiver_role">
                    <button type="submit" class="message__btn">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
let currentReceiver = null;
let currentRole = null;
let currentName = null;
let currentAvatar = null;

function loadMessages(uid, role, name, img) {
    currentReceiver = uid;
    currentRole = role;
    currentName = name;
    currentAvatar = img;

    document.getElementById("receiver_id").value = uid;
    document.getElementById("receiver_role").value = role;
    document.getElementById("chatWith").innerText = name + " (" + role + ")";
    document.getElementById("chatAvatar").src = img;

    fetch('fetch_messages.php?receiver_id=' + uid + '&receiver_role=' + role)
        .then(res => res.text())
        .then(data => {
            document.getElementById('chatBody').innerHTML = data;
            document.getElementById('chatBody').scrollTop = document.getElementById('chatBody').scrollHeight;
        });
}

document.getElementById("messageForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const message = this.message.value;

    if (currentReceiver && message.trim() !== '') {
        const form = new FormData(this);
        fetch('send_message.php', {
            method: 'POST',
            body: form
        }).then(res => res.text()).then(resp => {
            if (resp.trim() === 'success') {
                this.message.value = '';
                loadMessages(currentReceiver, currentRole, currentName, currentAvatar);
            } else {
                alert("Message not sent: " + resp);
            }
        });
    }
});

setInterval(() => {
    if (currentReceiver && currentRole && currentName && currentAvatar) {
        loadMessages(currentReceiver, currentRole, currentName, currentAvatar);
    }
}, 5000);
</script>

<?php include 'footer.php'; ?>
