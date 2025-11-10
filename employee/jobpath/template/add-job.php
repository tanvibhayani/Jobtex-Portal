<?php
session_start();
include 'connection.php';

$employer_id = $_SESSION['employer_id'] ?? 0;
if (!$employer_id) {
    echo "<script>alert('Please login as employer'); window.location='employer-login.php';</script>";
    exit;
}

if (isset($_POST['post_job'])) {
    // (same PHP logic as yours — no change needed)
    // ... [code omitted for brevity]
}

include 'header.php';
?>

<style>
    .form-container {
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0, 128, 0, 0.1);
        color: #333;
    }

    .form-container label {
        font-weight: 500;
        color: #006400;
    }

    .form-container .form-control {
        border: 1px solid #ced4da;
        border-radius: 6px;
    }

    .form-container h2 {
        color: #006400;
    }

    .btn-green {
        background-color: #28a745;
        border: none;
        color: white;
    }

    .btn-green:hover {
        background-color: #218838;
    }
</style>

<div class="container mt-5">
    <div class="form-container">
        <h2 class="mb-4 py-5">Post a New Job</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Job Title</label>
                    <input type="text" name="job_title" class="form-control" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Job Description</label>
                    <textarea name="job_description" class="form-control" rows="4" required></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Working Schedule</label>
                    <input type="text" name="working_schedule" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Working Days</label>
                    <input type="text" name="working_day" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Salary Type</label>
                    <input type="text" name="salary_type" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Payment Type</label>
                    <input type="text" name="payment_type" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Salary Min</label>
                    <input type="number" name="salary_min" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Salary Max</label>
                    <input type="number" name="salary_max" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Experience</label>
                    <input type="text" name="experience" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Qualification</label>
                    <input type="text" name="qualification" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Deadline</label>
                    <input type="date" name="deadline" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Job Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Country</label>
                    <input type="text" name="country" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>State</label>
                    <input type="text" name="state" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Postal Code</label>
                    <input type="text" name="postal_code" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Latitude</label>
                    <input type="text" name="latitude" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Longitude</label>
                    <input type="text" name="longitude" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Video URL (optional)</label>
                    <input type="url" name="video_url" class="form-control">
                </div>
            </div>
            <div class="text-end">
                <button type="submit" name="post_job" class="btn btn-green px-4 py-2 rounded-pill shadow">
                    Post Job
                </button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
