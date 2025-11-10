<?php
include 'connection.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: auth_login_dark.php");
    exit();
}

include 'header.php';
include 'sidebar.php';

// Get today's date
$today = date("Y-m-d");

// Fetch new job posts (last 7 days)
$new_jobs = mysqli_query($conn, "SELECT j.*, e.name as employer_name 
    FROM jobs j 
    JOIN e_registration e ON j.employer_id = e.id 
    WHERE DATE(j.post_date) >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) 
    ORDER BY j.post_date DESC");

// Fetch expired jobs
$expired_jobs = mysqli_query($conn, "SELECT j.*, e.name as employer_name 
    FROM jobs j 
    JOIN e_registration e ON j.employer_id = e.id 
    WHERE DATE(j.deadline) < CURDATE()
    ORDER BY j.deadline DESC");
?>

<style>
.alert-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
    background-color: #2a2a3b;
    color: #fff;
}
.alert-table th, .alert-table td {
    padding: 10px 15px;
    border: 1px solid #444;
}
.alert-table th {
    background-color: #3b3b4d;
    text-align: left;
}
.section-title {
    font-size: 20px;
    font-weight: bold;
    color: #4caf50;
    margin-top: 40px;
    margin-bottom: 15px;
}
.main-content
{
    margin-left: 100px;
    margin-top: 100px;
}
</style>

<div class="main-content">
    <div class="container-fluid py-4">
        <h4 class="text-white mb-4">Job Alerts Dashboard</h4>

        <!-- New Job Posts -->
        <div class="section-title">📌 New Job Posts (Last 7 Days)</div>
        <table class="alert-table">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Employer</th>
                    <th>Post Date</th>
                    <th>Deadline</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($new_jobs) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($new_jobs)): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['job_title']) ?></td>
                            <td><?= htmlspecialchars($row['employer_name']) ?></td>
                            <td><?= date("d M Y", strtotime($row['post_date'])) ?></td>
                            <td><?= date("d M Y", strtotime($row['deadline'])) ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="4">No new job posts.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Expired Jobs -->
        <div class="section-title">⚠️ Expired Jobs</div>
        <table class="alert-table">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Employer</th>
                    <th>Post Date</th>
                    <th>Deadline</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($expired_jobs) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($expired_jobs)): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['job_title']) ?></td>
                            <td><?= htmlspecialchars($row['employer_name']) ?></td>
                            <td><?= date("d M Y", strtotime($row['post_date'])) ?></td>
                            <td><?= date("d M Y", strtotime($row['deadline'])) ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="4">No expired jobs.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
