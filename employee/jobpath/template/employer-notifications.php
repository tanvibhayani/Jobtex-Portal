<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];

// Job Applications
$app_sql = "SELECT ja.*, j.job_title, r.name AS candidate_name, ja.applied_date
            FROM job_applications ja
            JOIN jobs j ON ja.job_id = j.id
            JOIN registration r ON ja.user_id = r.id
            WHERE j.employer_id = '$employer_id'
            ORDER BY ja.applied_date DESC
            LIMIT 10";
$applications = mysqli_query($con, $app_sql);

// Interview Schedules
$int_sql = "SELECT i.*, r.name AS candidate_name
            FROM interview_schedule i
            JOIN registration r ON i.candidate_id = r.id
            WHERE i.employer_id = '$employer_id'
            ORDER BY i.interview_date DESC
            LIMIT 10";
$interviews = mysqli_query($con, $int_sql);
?>

<style>
.notification-card {
    border: 1px solid #ddd;
    border-left: 5px solid #007bff;
    background: #fff;
    padding: 15px 20px;
    margin-bottom: 15px;
    border-radius: 6px;
    box-shadow: 0 0 5px rgba(0,0,0,0.05);
}
.notification-title {
    font-size: 16px;
    font-weight: 600;
    color: #333;
}
.notification-date {
    font-size: 14px;
    color: #666;
}
</style>

<div class="dashboard-body" style="background-color: #f9f9f9; min-height: 100vh;">
  <div class="container py-5">
    <h3 class="mb-4 text-dark">🔔 Employer Notifications</h3>

    <!-- Job Applications -->
    <h5 class="text-primary mb-3">📝 New Job Applications</h5>
    <?php if (mysqli_num_rows($applications) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($applications)): ?>
        <div class="notification-card">
          <div class="notification-title">
            <i class="fa fa-user text-info"></i>
            <strong><?= htmlspecialchars($row['candidate_name']) ?></strong> applied for 
            <strong><?= htmlspecialchars($row['job_title']) ?></strong>
          </div>
          <div class="notification-date">
            <i class="fa fa-calendar text-muted"></i>
            Applied on <?= date('d M Y', strtotime($row['applied_date'])) ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <div class="alert alert-secondary">No job applications yet.</div>
    <?php endif; ?>

    <!-- Interview Schedules -->
    <h5 class="text-success mt-5 mb-3">📅 Upcoming Interviews</h5>
    <?php if (mysqli_num_rows($interviews) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($interviews)): ?>
        <div class="notification-card border-success" style="border-left-color: #28a745;">
          <div class="notification-title">
            <i class="fa fa-video text-success"></i>
            Interview with <strong><?= htmlspecialchars($row['candidate_name']) ?></strong> via 
            <strong><?= ucfirst($row['interview_mode']) ?></strong>
          </div>
          <div class="notification-date">
            <i class="fa fa-clock text-muted"></i>
            On <?= date("d M Y", strtotime($row['interview_date'])) ?> at <?= htmlspecialchars($row['interview_time']) ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <div class="alert alert-secondary">No interviews scheduled.</div>
    <?php endif; ?>
  </div>
</div>

<?php include 'footer1.php'; ?>
