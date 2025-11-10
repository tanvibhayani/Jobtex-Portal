<?php
session_start();
include 'connection.php';

$admin_id = $_SESSION['admin_id'] ?? 0;
if (!$admin_id) {
    echo "<script>alert('Please login'); window.location='auth_login_dark.php';</script>";
    exit;
}

$job_id = $_GET['id'] ?? 0;
$job = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM jobs WHERE id='$job_id'"));

if (!$job) {
    echo "<script>alert('Job not found'); window.location='jobs.php';</script>";
    exit;
}

if (isset($_POST['update_job'])) {
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $salary_min = $_POST['salary_min'];
    $salary_max = $_POST['salary_max'];
    $deadline = $_POST['deadline'];

    mysqli_query($conn, "UPDATE jobs SET job_title='$job_title', job_description='$job_description', salary_min='$salary_min', salary_max='$salary_max', deadline='$deadline' WHERE id='$job_id'");

    echo "<script>alert('Job updated'); window.location='jobs.php';</script>";
}
?>

<?php include 'header.php'; ?>

<style>
    body {
        background-color: #121212;
        color: #fff;
    }

    .edit-job-box {
        background-color: #1e1e1e;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
        max-width: 700px;
        margin: 50px auto;
        border: 1px solid #2c2c2c;
    }

    .form-label {
        color: #ccc;
    }

    .form-control {
        background-color: #2c2c2c;
        color: white;
        border: 1px solid #444;
    }

    .form-control:focus {
        background-color: #333;
        color: #fff;
        border-color: #28a745;
    }

    .btn-dark-green {
        background-color: #28a745;
        border: none;
        color: white;
    }

    .btn-dark-green:hover {
        background-color: #218838;
    }
</style>

<div class="edit-job-box">
    <h3 class="text-success mb-4">Edit Job</h3>
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
            <button type="submit" name="update_job" class="btn btn-dark-green">Update Job</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>
