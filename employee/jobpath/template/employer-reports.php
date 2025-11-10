<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location='login.php';</script>";
    exit;
}

$employer_id = $_SESSION['employer_id'];

// Fetch counts
$total_jobs = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS total FROM jobs WHERE employer_id = '$employer_id'"))['total'];
$total_applications = mysqli_fetch_assoc(mysqli_query($con, "
    SELECT COUNT(*) AS total 
    FROM job_applications ja 
    JOIN jobs j ON ja.job_id = j.id 
    WHERE j.employer_id = '$employer_id'
"))['total'];

$total_interviews = mysqli_fetch_assoc(mysqli_query($con, "
    SELECT COUNT(*) AS total 
    FROM interview_schedule 
    WHERE employer_id = '$employer_id'
"))['total'];

// Recent jobs data
$recent_jobs = mysqli_query($con, "
    SELECT j.job_title, j.post_date, COUNT(ja.id) AS application_count 
    FROM jobs j 
    LEFT JOIN job_applications ja ON j.id = ja.job_id 
    WHERE j.employer_id = '$employer_id' 
    GROUP BY j.id 
    ORDER BY j.post_date DESC 
    LIMIT 5
");
?>

<div class="dashboard-body py-4 px-3" style="background-color: #f5f5f5; min-height: 100vh;">
  <div class="container">
    <h3 class="mb-4">📊 Employer Reports</h3>

    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="card shadow-sm border-left-primary p-3">
          <h5>Total Jobs Posted</h5>
          <h2><?= $total_jobs ?></h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm border-left-success p-3">
          <h5>Total Applications Received</h5>
          <h2><?= $total_applications ?></h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm border-left-warning p-3">
          <h5>Total Interviews Scheduled</h5>
          <h2><?= $total_interviews ?></h2>
        </div>
      </div>
    </div>

    <div class="card shadow-sm p-4 bg-white">
      <h5 class="mb-3">🗂 Recent Job Posts and Applications</h5>
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Job Title</th>
              <th>Post Date</th>
              <th>Total Applications</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; while ($row = mysqli_fetch_assoc($recent_jobs)): ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= htmlspecialchars($row['job_title']) ?></td>
                <td><?= date("d M Y", strtotime($row['post_date'])) ?></td>
                <td><?= $row['application_count'] ?></td>
              </tr>
            <?php endwhile; ?>
            <?php if ($i === 1): ?>
              <tr><td colspan="4" class="text-center text-muted">No jobs found.</td></tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include 'footer1.php'; ?>
