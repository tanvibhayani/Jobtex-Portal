<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='employer-login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];

// Total Jobs
$job_query = mysqli_query($con, "SELECT COUNT(*) AS total_jobs FROM jobs WHERE employer_id = $employer_id");
$job_data = mysqli_fetch_assoc($job_query);
$total_jobs = $job_data['total_jobs'];

// Total Applications
$app_query = mysqli_query($con, "SELECT COUNT(*) AS total_apps FROM job_applications WHERE job_id IN (SELECT id FROM jobs WHERE employer_id = $employer_id)");
$app_data = mysqli_fetch_assoc($app_query);
$total_applications = $app_data['total_apps'];

// Total Interviews
$interview_query = mysqli_query($con, "SELECT COUNT(*) AS total_interviews FROM interview_schedule WHERE employer_id = $employer_id");
$interview_data = mysqli_fetch_assoc($interview_query);
$total_interviews = $interview_data['total_interviews'];
?>

<div class="dashboard__content">
    <section class="page-title-dashboard">
        <div class="themes-container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mb-2">Employer Dashboard</h3>
                    <p>Welcome back! Here's an overview of your activities.</p>
                </div>
            </div>
        </div>
    </section><br>

    <section class="dashboard-stats section-padding">
        <div class="themes-container">
            <div class="row g-4">
                <!-- Total Jobs -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow border-0 p-4 rounded-4 h-100">
                        <h5>Total Posted Jobs</h5>
                        <h2><?= $total_jobs ?></h2>
                    </div>
                </div>
                <!-- Total Applications -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow border-0 p-4 rounded-4 h-100">
                        <h5>Total Applications</h5>
                        <h2><?= $total_applications ?></h2>
                    </div>
                </div>
                <!-- Total Interviews -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow border-0 p-4 rounded-4 h-100">
                        <h5>Scheduled Interviews</h5>
                        <h2><?= $total_interviews ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br>
    <!-- Add more sections here if needed -->

    <section class="section-padding">
        <div class="themes-container">
            <div class="card p-4 rounded-4 shadow">
                <h4>Quick Actions</h4>
                <div class="row g-3 mt-3">
                    <div class="col-md-3">
                        <a href="employer-dash-jobpost.php" class="btn btn-success w-100">Post New Job</a>
                    </div>
                    <div class="col-md-3">
                        <a href="employer-dash-job.php" class="btn btn-outline-primary w-100">Manage Jobs</a>
                    </div>
                    <div class="col-md-3">
                        <a href="employer-view-applicants.php" class="btn btn-outline-success w-100">View Applications</a>
                    </div>
                    <!-- <div class="col-md-3">
                        <a href="employer-profile.php" class="btn btn-outline-dark w-100">Edit Profile</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer1.php'; ?>
