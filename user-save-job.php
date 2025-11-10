====================
File 1: candidates-save-jobs.php
====================

<?php
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'connection.php';
include 'header.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to view your saved jobs'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "
    SELECT j.*, sj.saved_date 
    FROM saved_jobs sj
    INNER JOIN jobs j ON sj.job_id = j.id
    WHERE sj.user_id = '$user_id'
    ORDER BY sj.saved_date DESC
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

    .btn-common {
        border-radius: 5px;
        padding: 8px 16px;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
        transition: 0.3s;
        border: none;
        display: inline-block;
        color: #fff;
    }

    .btn-view {
        background-color: #0d6efd;
    }

    .btn-view:hover {
        background-color: #0b5ed7;
    }

    .btn-unsave {
        background-color: #dc3545;
        height: 40px;
    }

    .btn-unsave:hover {
        background-color: #c82333;
    }
</style>


<div class="container py-5 px-3">
    <h2 class="mb-4 py-5 mt-5">Saved Jobs</h2>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="job-card">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5><?= htmlspecialchars($row['job_title']) ?></h5>
                    <span class="text-muted" style="font-size: 13px;">
                        Saved on <?= date("d M Y", strtotime($row['saved_date'])) ?>
                    </span>
                </div>
                <p><strong>Company:</strong> <?= htmlspecialchars($row['company_name']) ?></p>
                <p><?= nl2br(substr($row['job_description'], 0, 120)) ?>...</p>
                <div class="d-flex gap-2">
    <a href="jobs-details.php?id=<?= $row['id'] ?>" class="btn-common btn-view">View Job</a>
    <form method="post" action="unsave_job.php">
        <input type="hidden" name="job_id" value="<?= $row['id'] ?>">
        <button type="submit" class="btn-common btn-unsave">Unsave</button>
    </form>
</div>

            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="alert alert-info">You haven't saved any jobs yet.</div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
