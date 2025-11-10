<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location='employer-login.php';</script>";
    exit;
}

$employer_id = $_SESSION['employer_id'];

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid job ID'); window.location='employer-manage-jobs.php';</script>";
    exit;
}

$job_id = intval($_GET['id']);
$job = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM jobs WHERE id = $job_id AND employer_id = $employer_id"));

if (!$job) {
    echo "<script>alert('Job not found'); window.location='employer-manage-jobs.php';</script>";
    exit;
}

if (isset($_POST['update'])) {
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $salary_min = $_POST['salary_min'];
    $salary_max = $_POST['salary_max'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $deadline = $_POST['deadline'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $update = mysqli_query($con, "UPDATE jobs SET 
        job_title = '$job_title',
        job_description = '$job_description',
        salary_min = '$salary_min',
        salary_max = '$salary_max',
        qualification = '$qualification',
        experience = '$experience',
        deadline = '$deadline',
        state = '$state',
        country = '$country'
        WHERE id = $job_id AND employer_id = $employer_id");

    if ($update) {
        echo "<script>alert('Job updated successfully'); window.location='employer-manage-jobs.php';</script>";
    } else {
        echo "<script>alert('Failed to update job');</script>";
    }
}
?>

<div class="dashboard-content">
    <div class="container py-5">
        <h2>Edit Job</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Job Title</label>
                <input type="text" name="job_title" class="form-control" value="<?= htmlspecialchars($job['job_title']) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Job Description</label>
                <textarea name="job_description" class="form-control" rows="5" required><?= htmlspecialchars($job['job_description']) ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Minimum Salary</label>
                <input type="number" name="salary_min" class="form-control" value="<?= $job['salary_min'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Maximum Salary</label>
                <input type="number" name="salary_max" class="form-control" value="<?= $job['salary_max'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Qualification</label>
                <input type="text" name="qualification" class="form-control" value="<?= htmlspecialchars($job['qualification']) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Experience</label>
                <input type="text" name="experience" class="form-control" value="<?= htmlspecialchars($job['experience']) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deadline</label>
                <input type="date" name="deadline" class="form-control" value="<?= $job['deadline'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">State</label>
                <input type="text" name="state" class="form-control" value="<?= htmlspecialchars($job['state']) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Country</label>
                <input type="text" name="country" class="form-control" value="<?= htmlspecialchars($job['country']) ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-success">Update Job</button>
            <a href="employer-manage-jobs.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include 'footer1.php'; ?>
