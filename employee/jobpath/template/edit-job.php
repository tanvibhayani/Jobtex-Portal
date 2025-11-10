<?php
session_start();
include 'connection.php';

$employer_id = $_SESSION['employer_id'] ?? 0;
if (!$employer_id) {
    echo "<script>alert('Please login'); window.location='employer-login.php';</script>";
    exit;
}

$job_id = $_GET['id'] ?? 0;
$job = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM jobs WHERE id='$job_id' AND employer_id='$employer_id'"));

if (!$job) {
    echo "<script>alert('Job not found'); window.location='employer-jobs.php';</script>";
    exit;
}

if (isset($_POST['update_job'])) {
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $salary_min = $_POST['salary_min'];
    $salary_max = $_POST['salary_max'];
    $deadline = $_POST['deadline'];

    mysqli_query($con, "UPDATE jobs SET job_title='$job_title', job_description='$job_description', salary_min='$salary_min', salary_max='$salary_max', deadline='$deadline' WHERE id='$job_id' AND employer_id='$employer_id'");

    echo "<script>alert('Job updated successfully'); window.location='employer-jobs.php';</script>";
}
?>

<?php include 'header.php'; ?>

<!-- ✅ Styling for white card design -->
<style>
    body {
        background-color: #f8f9fa;
    }

    .edit-job-box {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
        max-width: 700px;
        margin: 50px auto;
    }

    .edit-job-box h2 {
        color: #28a745;
        font-weight: bold;
        margin-bottom: 25px;
    }

    .form-label {
        color: #333;
        font-weight: 500;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .btn-primary {
        background-color: #28a745;
        border: none;
        padding: 10px 30px;
        font-weight: bold;
        border-radius: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }
</style>

<!-- ✅ HTML Form -->
<div class="edit-job-box">
    <h2>Edit Job</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Job Title</label>
            <input type="text" name="job_title" value="<?php echo $job['job_title']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="job_description" rows="5" class="form-control" required><?php echo $job['job_description']; ?></textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Salary Min</label>
                <input type="number" name="salary_min" value="<?php echo $job['salary_min']; ?>" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Salary Max</label>
                <input type="number" name="salary_max" value="<?php echo $job['salary_max']; ?>" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Deadline</label>
            <input type="date" name="deadline" value="<?php echo $job['deadline']; ?>" class="form-control">
        </div>

        <div class="text-end">
            <button type="submit" name="update_job" class="btn btn-primary">Update Job</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>
