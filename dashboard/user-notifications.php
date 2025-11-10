<?php
session_start();
include 'connection.php';
include 'header1.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to view notifications'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];

// Get Interview Schedules
$interviews = mysqli_query($con, "
    SELECT * FROM interview_schedule 
    WHERE candidate_id = '$user_id' 
    ORDER BY interview_date DESC, interview_time DESC
");

// Get Resume Uploads
$resumes = mysqli_query($con, "
    SELECT * FROM resumes 
    WHERE user_id = '$user_id' 
    ORDER BY uploaded_at DESC
");

// Get Messages
$messages = mysqli_query($con, "
    SELECT * FROM messages 
    WHERE receiver_id = '$user_id' AND receiver_role = 'user' 
    ORDER BY sent_at DESC
");
?>

<style>
    .notification-card {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.05);
    }
    .notification-card h5 {
        margin-bottom: 10px;
        color: #28a745;
    }
    .notification-card p {
        margin-bottom: 5px;
        color: #555;
    }
    .section-title {
        margin-top: 50px;
        margin-bottom: 20px;
        color: #333;
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
    }
</style>

<div class="container-fluid mt-5 px-4">
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="left-menu">
            <?php include 'sidemenu.php'; ?>
        </div>

        <!-- Main Content Column -->
        <div class="col-md-9 py-5 mt-5">
            <h2 class="text-success mb-5 text-center">My Notifications</h2>

            <!-- Interview Invites -->
            <h4 class="section-title">Interview Invites</h4>
            <?php if (mysqli_num_rows($interviews) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($interviews)): ?>
                    <div class="notification-card">
                        <h5>Interview Scheduled</h5>
                        <p><strong>Date:</strong> <?= date("d M Y", strtotime($row['interview_date'])) ?></p>
                        <p><strong>Time:</strong> <?= date("h:i A", strtotime($row['interview_time'])) ?></p>
                        <p><strong>Mode:</strong> <?= htmlspecialchars($row['interview_mode']) ?></p>
                        <p><strong>Location:</strong> <?= htmlspecialchars($row['location']) ?></p>
                        <p><strong>Status:</strong> <?= ucfirst($row['status']) ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="alert alert-info">No interview invites yet.</div>
            <?php endif; ?>

            <!-- Resume Uploads -->
            <h4 class="section-title">Resume Activity</h4>
            <?php if (mysqli_num_rows($resumes) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($resumes)): ?>
                    <div class="notification-card">
                        <h5>Resume Uploaded</h5>
                        <p><strong>Name:</strong> <?= htmlspecialchars($row['name']) ?></p>
                        <p><strong>File:</strong> <a href="<?= $row['file_path'] ?>" target="_blank"><?= htmlspecialchars($row['file_name']) ?></a></p>
                        <p><strong>Date:</strong> <?= date("d M Y, h:i A", strtotime($row['uploaded_at'])) ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="alert alert-info">No resumes uploaded yet.</div>
            <?php endif; ?>

            <!-- Messages -->
            <h4 class="section-title">Messages from Employers</h4>
            <?php if (mysqli_num_rows($messages) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($messages)): ?>
                    <div class="notification-card">
                        <h5>Message</h5>
                        <p><strong>From:</strong> <?= ucfirst($row['sender_role']) ?> (ID: <?= $row['sender_id'] ?>)</p>
                        <p><strong>Message:</strong> <?= nl2br(htmlspecialchars($row['message'])) ?></p>
                        <p class="text-muted" style="font-size: 13px;">Sent on <?= date("d M Y, h:i A", strtotime($row['sent_at'])) ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="alert alert-info">No messages yet.</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
