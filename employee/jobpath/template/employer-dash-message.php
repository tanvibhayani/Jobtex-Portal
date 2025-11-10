<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['employer_id'])) {
    header("Location: login.php");
    exit();
}

$employee_id = $_SESSION['employer_id'];
$employee_role = 'employee';

include 'header.php';
include 'sidebar.php';
?>

<style>
.chat-container {
    display: flex;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    background-color: #fff;
}

.chat-list {
    width: 30%;
    max-height: 600px;
    overflow-y: auto;
    border-right: 1px solid #ddd;
    background: #f5f9fc;
    padding: 10px;
}

.chat-list ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.chat-list li {
    padding: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.2s;
}

.chat-list li:hover {
    background: #e8f0fe;
}

.chat-list img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    object-fit: cover;
}

.chat-window {
    width: 70%;
    display: flex;
    flex-direction: column;
    height: 600px;
}

.chat-header {
    padding: 15px;
    border-bottom: 1px solid #ddd;
    background: #eef3f8;
    display: flex;
    align-items: center;
    gap: 10px;
}

.chat-header img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.chat-body {
    flex: 1;
    padding: 15px;
    overflow-y: auto;
    background: #fff;
    border-bottom: 1px solid #eee;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* Chat bubbles */
.chat-bubble {
    max-width: 70%;
    padding: 10px 14px;
    border-radius: 18px;
    position: relative;
    font-size: 14px;
    line-height: 1.4;
    word-wrap: break-word;
}

.bubble-left {
    align-self: flex-start;
    background-color: #f0f0f0;
    color: #000;
    border-bottom-left-radius: 0;
}

.bubble-right {
    align-self: flex-end;
    background-color: #dcf8c6;
    color: #000;
    border-bottom-right-radius: 0;
}

.chat-footer {
    padding: 15px;
    display: flex;
    gap: 10px;
    background: #f7f9fc;
}

.chat-footer input {
    flex: 1;
}

.time {
    display: block;
    font-size: 10px;
    color: #666;
    margin-top: 5px;
    text-align: right;
}
</style>

<div class="main-content">
    <h6 class="fw-semibold mb-4">Messages</h6>

    <div class="chat-container">
        <!-- Left: Chat List -->
        <div class="chat-list">
            <ul>
                <li><strong>Admins</strong></li>
                <?php
                $admin_q = mysqli_query($con, "SELECT id, name, profile_image FROM admins");
                while ($admin = mysqli_fetch_assoc($admin_q)) {
                    $img = (!empty($admin['profile_image']) && file_exists("../../../images/" . $admin['profile_image']))
                        ? "../../../images/" . $admin['profile_image']
                        : "../../../images/admin.png";
                    echo "<li class='person'
                                data-chat-id='{$admin['id']}'
                                data-chat-role='admin'
                                data-name='{$admin['name']}'
                                data-image='{$img}'>
                            <img src='{$img}'> <span>{$admin['name']}</span>
                          </li>";
                }

                echo "<li><strong style='margin-top:10px;'>Users</strong></li>";
                $user_q = mysqli_query($con, "SELECT id, name, profile_image FROM registration");
                while ($user = mysqli_fetch_assoc($user_q)) {
                    $img = (!empty($user['profile_image']) && file_exists("../../../images/" . $user['profile_image']))
                        ? "../../../images/" . $user['profile_image']
                        : "../../../images/user.png";
                    echo "<li class='person'
                                data-chat-id='{$user['id']}'
                                data-chat-role='user'
                                data-name='{$user['name']}'
                                data-image='{$img}'>
                            <img src='{$img}'> <span>{$user['name']}</span>
                          </li>";
                }
                ?>
            </ul>
        </div>

        <!-- Right: Chat Window -->
        <div class="chat-window">
            <!-- Chat Header -->
            <div class="chat-header">
                <img id="chat-profile-image" src="" style="display: none;">
                <span id="chat-name-text" style="font-weight: bold;">Select a person to chat</span>
            </div>

            <!-- Chat Messages -->
            <div class="chat-body" id="chat-box"></div>

            <!-- Hidden Fields -->
            <input type="hidden" id="receiver_id">
            <input type="hidden" id="receiver_role">

            <!-- Chat Footer (Send Message) -->
            <div class="chat-footer">
                <input type="text" id="message" class="form-control" placeholder="Type a message...">
                <button id="sendNow" class="btn btn-primary" style="background-color: #32a551;">Send</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer1.php'; ?>

<script>
let chatWith = 0;
let chatRole = '';

document.querySelectorAll('.person').forEach(person => {
    person.addEventListener('click', () => {
        chatWith = person.dataset.chatId;
        chatRole = person.dataset.chatRole;
        const name = person.dataset.name;
        const img = person.dataset.image;

        document.getElementById('receiver_id').value = chatWith;
        document.getElementById('receiver_role').value = chatRole;

        document.getElementById('chat-profile-image').src = img;
        document.getElementById('chat-profile-image').style.display = 'inline-block';
        document.getElementById('chat-name-text').innerText = name + " (" + chatRole + ")";

        loadMessages();
    });
});

function loadMessages() {
    if (!chatWith || !chatRole) return;
    fetch('message.php?user_id=' + chatWith + '&user_role=' + chatRole)
        .then(res => res.text())
        .then(data => {
            document.getElementById('chat-box').innerHTML = data;
            document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
        });
}

document.getElementById('sendNow').addEventListener('click', () => {
    const receiver_id = document.getElementById('receiver_id').value;
    const receiver_role = document.getElementById('receiver_role').value;
    const message = document.getElementById('message').value;

    if (!receiver_id || !receiver_role || !message.trim()) {
        alert("Please select a user and type a message.");
        return;
    }

    const formData = new FormData();
    formData.append('receiver_id', receiver_id);
    formData.append('receiver_role', receiver_role);
    formData.append('message', message);

    fetch('send_message.php', {
        method: 'POST',
        body: formData
    }).then(res => res.text())
      .then(resp => {
        if (resp.trim() === 'success') {
            document.getElementById('message').value = '';
            loadMessages();
        } else {
            alert("Message not sent: " + resp);
        }
    }).catch(err => alert("Error: " + err));
});

setInterval(() => {
    if (chatWith !== 0) loadMessages();
}, 5000);
</script>
