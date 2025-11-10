<?php
session_start(); // 🔑 Always first
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['admin_id']) || empty($_SESSION['admin_id'])) {
    echo "<script>alert('Please login as Admin'); window.location='auth_login_dark.php';</script>";
    exit;
}
?>

<style>
    body {
        background-color: #121212;
        color: #ffffff;
    }

    .job-card {
        background-color: #1e1e1e;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        margin-bottom: 20px;
        border: 1px solid #2c2c2c;
    }

    .job-card h5 {
        color: #2196f3; /* Blue heading */
    }

    .job-card p {
        color: #ccc;
        margin: 0;
    }

    .action-buttons a {
        margin-right: 10px;
    }

    .btn-blue {
        background-color: #2196f3;
        border: none;
        color: white;
    }

    .btn-blue:hover {
        background-color: #1976d2;
    }

    .btn-danger {
        background-color: #e53935;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c62828;
    }
</style><br><br>
<div class="container pt-4">
    <h2 class="mb-4 text-primary" style="color: #2196f3;">All Jobs (Admin View)</h2>



    <?php
    $jobs = mysqli_query($conn, "SELECT * FROM jobs ORDER BY post_date DESC");
    while ($job = mysqli_fetch_assoc($jobs)) {
    ?>
        <div class="job-card">
            <h5><?php echo $job['job_title']; ?> — <?php echo $job['company_name']; ?></h5>
            <p><strong>Posted on:</strong> <?php echo $job['post_date']; ?></p>
            <p><strong>Salary:</strong> ₹<?php echo $job['salary_min']; ?> - ₹<?php echo $job['salary_max']; ?></p>
            <p><strong>Deadline:</strong> <?php echo $job['deadline']; ?></p>
            <div class="action-buttons mt-3">
    <a href="admin-edit-job.php?id=<?php echo $job['id']; ?>" class="btn btn-sm btn-blue">Edit</a>
    <a href="admin-delete-job.php?id=<?php echo $job['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this job?');">Delete</a>
    <a href="admin-view-applications.php?job_id=<?php echo $job['id']; ?>" class="btn btn-sm btn-warning">View Applications</a>
</div>

        </div>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>
