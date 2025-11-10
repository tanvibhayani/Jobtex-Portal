<?php
if (session_status() === PHP_SESSION_NONE) {session_start();}
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_role = 'user';
include 'header1.php';
?>

<div class="left-menu">
<?php include 'sidemenu.php'; ?>
<div class="dashboard__content">
<section class="page-title-dashboard">
    <div class="themes-container">
        <div class="row"><div class="col-lg-12">
            <div class="title-dashboard"><div class="title-dash flex2">Messages</div></div>
        </div></div>
    </div>
</section>

<section class="flat-dashboard-messages">
    <div class="themes-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper-messages">
                    <div class="content flex">

                        <!-- LEFT USER LIST -->
                        <div class="left" style="width:30%; max-height:500px; overflow-y:auto; border-right:1px solid #ddd;">
                            <ul class="people" style="padding:10px;">
                                <li><strong>Admins</strong></li>
                                <?php
                                $admin_q = mysqli_query($con, "SELECT id, name, profile_image FROM admins");
                                while ($admin = mysqli_fetch_assoc($admin_q)) {
                                    $img = (!empty($admin['profile_image']) && file_exists("../images/" . $admin['profile_image']))
                                        ? $admin['profile_image'] : 'default.png';
                                    echo "<li class='person flex' 
                                            data-chat-id='{$admin['id']}' 
                                            data-chat-role='admin' 
                                            data-name='{$admin['name']}' 
                                            data-image='../images/{$img}'
                                            style='cursor:pointer; padding:8px;'>
                                        <img src='../images/{$img}' width='35' height='35' style='border-radius:50%; margin-right:10px;'>
                                        {$admin['name']}
                                    </li>";
                                }

                                echo "<li><strong style='margin-top:10px;'>Employees</strong></li>";
                                $emp_q = mysqli_query($con, "SELECT id, name, profile_image FROM e_registration");
                                while ($emp = mysqli_fetch_assoc($emp_q)) {
                                    $img = (!empty($emp['profile_image']) && file_exists("../images/" . $emp['profile_image']))
                                        ? $emp['profile_image'] : 'default.png';
                                    echo "<li class='person flex' 
                                            data-chat-id='{$emp['id']}' 
                                            data-chat-role='employee' 
                                            data-name='{$emp['name']}' 
                                            data-image='../images/{$img}'
                                            style='cursor:pointer; padding:8px;'>
                                        <img src='../images/{$img}' width='35' height='35' style='border-radius:50%; margin-right:10px;'>
                                        {$emp['name']}
                                    </li>";
                                }
                                ?>
                            </ul>
                        </div>

                        <!-- RIGHT CHAT PANEL -->
                        <div class="right" style="width:70%; padding:10px;">
                            <div id="chat-header" style="font-weight:bold; font-size:16px; display:flex; align-items:center; gap:10px;">
                                <img id="chat-profile-image" src="" style="width:40px; height:40px; border-radius:50%; display:none;">
                                <span id="chat-name-text">Select a person to chat</span>
                            </div>

                            <div id="chat-box" style="height:360px; overflow-y:auto; border:1px solid #ddd; margin-top:10px; padding:10px;"></div>

                            <!-- Send Message UI -->
                            <input type="hidden" id="receiver_id">
                            <input type="hidden" id="receiver_role">
                            <div style="margin-top:10px; display:flex; gap:10px;">
                                <input type="text" id="message" placeholder="Type your message..." required
                                       style="flex:1; padding:10px; border-radius:5px; border:1px solid #ccc;">
                                <button id="sendNow"
                                        style="padding:10px 20px; background-color:#007bff; color:white; border:none; border-radius:5px; cursor:pointer;">
                                    Send Now
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>

<?php include 'footer.php'; ?>

<script>
let chatWith = 0;
let chatRole = '';

// Click to select user
document.querySelectorAll('.person').forEach(person => {
    person.addEventListener('click', () => {
        chatWith = person.dataset.chatId;
        chatRole = person.dataset.chatRole;
        const chatName = person.dataset.name;
        const chatImage = person.dataset.image;

        document.getElementById('receiver_id').value = chatWith;
        document.getElementById('receiver_role').value = chatRole;

        const imgTag = document.getElementById('chat-profile-image');
        imgTag.src = chatImage;
        imgTag.style.display = 'inline-block';
        document.getElementById('chat-name-text').innerText = chatName;

        loadMessages();
    });
});

// Load messages
function loadMessages() {
    if (!chatWith || !chatRole) return;
    fetch('messages.php?receiver_id=' + chatWith + '&receiver_role=' + chatRole)
        .then(res => res.text())
        .then(data => {
            document.getElementById('chat-box').innerHTML = data;
            document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
        });
}

// Send Now button click
document.getElementById('sendNow').addEventListener('click', function () {
    const receiver_id = document.getElementById('receiver_id').value;
    const receiver_role = document.getElementById('receiver_role').value;
    const message = document.getElementById('message').value;

    if (!receiver_id || !receiver_role || !message.trim()) {
        alert("Please select a person and enter a message.");
        return;
    }

    const formData = new FormData();
    formData.append('receiver_id', receiver_id);
    formData.append('receiver_role', receiver_role);
    formData.append('message', message);

    fetch('send_messages.php', {
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
    }).catch(err => {
        alert("Error: " + err);
    });
});

setInterval(() => {
    if (chatWith !== 0) loadMessages();
}, 5000);
</script>
