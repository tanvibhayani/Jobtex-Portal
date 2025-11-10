<?php
session_start();
include 'connection.php';
include 'header.php'; // Your page header

$user_id = $_SESSION['user_id'] ?? 0;
if (!$user_id) {
    echo "<script>alert('Please login to apply for the job.');window.location='login.php';</script>";
    exit;
}

if (!isset($_POST['job_id'])) {
    echo "<script>alert('Invalid Access');window.location='find-jobs-list.php';</script>";
    exit;
}

$job_id = intval($_POST['job_id']);

// Check if already applied
$check = mysqli_query($con, "SELECT * FROM job_applications WHERE job_id='$job_id' AND user_id='$user_id'");
if (mysqli_num_rows($check) > 0) {
    echo "<script>alert('You have already applied for this job.');window.location='find-jobs-list.php';</script>";
    exit;
}

$job = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM jobs WHERE id='$job_id'"));
if (!$job) {
    echo "<script>alert('Invalid Job.');window.location='find-jobs-list.php';</script>";
    exit;
}
?>

<style>
.apply-job-wrapper {
    max-width: 800px;
    margin: 40px auto;
    background: #ffffff;
    border-radius: 10px;
    padding: 30px 40px;
    box-shadow: 0 0 15px rgba(0,0,0,0.08);
    font-family: 'Segoe UI', sans-serif;
}
.apply-job-wrapper h2 {
    color: #14a077;
    margin-bottom: 25px;
}
.apply-job-wrapper label {
    font-weight: 500;
    margin-bottom: 6px;
}
.apply-job-wrapper .form-control {
    padding: 12px;
    font-size: 15px;
    border-radius: 6px;
    border: 1px solid #ccc;
}
.apply-job-wrapper .custom-btn {
    background-color: #14a077;
    color: white;
    padding: 12px 28px;
    font-size: 16px;
    border: none;
    border-radius: 50px;
    margin-top: 10px;
    transition: 0.3s ease;
}
.apply-job-wrapper .custom-btn:hover {
    background-color: #0f7e61;
}
</style>

<div class="apply-job-wrapper">
    <h2>Apply for: <?php echo htmlspecialchars($job['job_title']); ?> at <?php echo htmlspecialchars($job['company_name']); ?></h2>

    <form method="post" enctype="multipart/form-data" action="submit_application.php">
        <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">

        <div class="mb-3">
            <label>Upload Resume (PDF only):</label>
            <input type="file" name="resume" accept=".pdf" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Cover Letter:</label>
            <textarea name="cover_letter" rows="5" class="form-control" placeholder="Write your message here..." required></textarea>
        </div>

        <button type="submit" name="submit_application" class="custom-btn">Submit Application</button>
    </form>
</div>

<?php include 'footer.php'; ?>
