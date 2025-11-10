<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: auth_login_dark.php");
    exit();
}

$admin_id = $_SESSION['admin_id'];
$admin_role = 'admin';

include 'header.php';
include 'sidebar.php';
?>

<style>
.chat-container {
    display: flex;
    border: 1px solid #2d2d2d;
    border-radius: 8px;
    overflow: hidden;
    background-color: #1e1e2f;
    color: #fff;
	margin-left: 80px;
	margin-top: 80px;
}

.chat-list {
    width: 30%;
    max-height: 600px;
    overflow-y: auto;
    border-right: 1px solid #2d2d2d;
    background: #252536;
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
    color: #fff;
}

.chat-list li:hover {
    background: #3c3c5c;
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
    border-bottom: 1px solid #2d2d2d;
    background: #2b2b44;
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
    background: #1e1e2f;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

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
    background-color: #3a3a5a;
    color: #fff;
    border-bottom-left-radius: 0;
}

.bubble-right {
    align-self: flex-end;
    background-color: #4caf50;
    color: #fff;
    border-bottom-right-radius: 0;
}

.chat-footer {
    padding: 15px;
    display: flex;
    gap: 10px;
    background: #2d2d2d;
}

.chat-footer input {
    flex: 1;
    background: #1e1e2f;
    color: #fff;
    border: 1px solid #555;
}

.time {
    display: block;
    font-size: 10px;
    color: #bbb;
    margin-top: 5px;
    text-align: right;
}
</style>

<div class="main-content">
    <h6 class="fw-semibold mb-4 text-white py-5 mt-5">Admin Messages</h6>

    <div class="chat-container">
        <div class="chat-list">
            <ul>
                <li><strong>Employers</strong></li>
                <?php
                $emp_q = mysqli_query($conn, "SELECT id, name, profile_image FROM e_registration");
                while ($emp = mysqli_fetch_assoc($emp_q)) {
                    $img = (!empty($emp['profile_image']) && file_exists("../../../../images/" . $emp['profile_image']))
                        ? "../../../../images/" . $emp['profile_image']
                        : "../../../../images/employer.png";
                    echo "<li class='person'
                                data-chat-id='{$emp['id']}'
                                data-chat-role='employee'
                                data-name='{$emp['name']}'
                                data-image='{$img}'>
                            <img src='{$img}'> <span>{$emp['name']}</span>
                          </li>";
                }

                echo "<li><strong style='margin-top:10px;'>Users</strong></li>";
                $user_q = mysqli_query($conn, "SELECT id, name, profile_image FROM registration");
                while ($user = mysqli_fetch_assoc($user_q)) {
                    $img = (!empty($user['profile_image']) && file_exists("../../../../images/" . $user['profile_image']))
                        ? "../../../../images/" . $user['profile_image']
                        : "../../../../images/user.png";
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

        <div class="chat-window">
            <div class="chat-header">
                <img id="chat-profile-image" src="" style="display: none;">
                <span id="chat-name-text" style="font-weight: bold;">Select a person to chat</span>
            </div>

            <div class="chat-body" id="chat-box"></div>

            <input type="hidden" id="receiver_id">
            <input type="hidden" id="receiver_role">

            <div class="chat-footer">
                <input type="text" id="message" class="form-control" placeholder="Type a message...">
                <button id="sendNow" class="btn btn-success">Send</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

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
    fetch('admin-message.php?user_id=' + chatWith + '&user_role=' + chatRole)
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

    fetch('admin-send-message.php', {
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
