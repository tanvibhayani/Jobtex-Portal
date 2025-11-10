<?php
if(session_status()===PHP_SESSION_NONE) {
    session_start();
}

include 'connection.php';
include 'header.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to view your applications'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "
    SELECT j.*, ja.applied_date, ja.status 
    FROM job_applications ja
    INNER JOIN jobs j ON ja.job_id = j.id
    WHERE ja.user_id = '$user_id'
    ORDER BY ja.applied_date DESC
";

$result = mysqli_query($con, $query);
?>

<style>
    .job-card {
        background: #fff;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .job-card h5 {
        margin-bottom: 10px;
    }

    .job-card p {
        margin-bottom: 5px;
    }

    .status-badge {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 13px;
        color: #fff;
    }

    .status-pending { background-color: #ffc107; }
    .status-accepted { background-color: #28a745; }
    .status-rejected { background-color: #dc3545; }

    .view-job-btn {
        padding: 6px 16px;
        border: 1px solid #007bff;
        color: #007bff;
        background-color: transparent;
        border-radius: 4px;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .view-job-btn:hover {
        background-color:rgb(147, 212, 151);
        color: #fff;
        text-decoration: none;
    }
</style>
</head>
<body class="dashboard">

<div class="container py-5">
    <h2 class="mb-4 py-5 mt-5">My Applied Jobs</h2>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="job-card">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5><?= htmlspecialchars($row['job_title']) ?></h5>
                    <span class="status-badge 
                        <?= $row['status'] == 'accepted' ? 'status-accepted' : ($row['status'] == 'rejected' ? 'status-rejected' : 'status-pending') ?>">
                        <?= ucfirst($row['status']) ?>
                    </span>
                </div>
                <p><strong>Company:</strong> <?= htmlspecialchars($row['company_name']) ?></p>
                <p><strong>Applied on:</strong> <?= date("d M Y", strtotime($row['applied_date'])) ?></p>
                <p><?= nl2br(substr($row['job_description'], 0, 120)) ?>...</p>
                <a href="jobs-details.php?id=<?= $row['id'] ?>" class="view-job-btn mt-2">View Job</a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="alert alert-info">You have not applied for any jobs yet.</div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
