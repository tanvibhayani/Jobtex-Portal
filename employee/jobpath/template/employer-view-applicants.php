<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location='login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];

// Fetch job applications for employer's jobs
$query = "
    SELECT ja.*, 
           u.name AS user_name, u.email, u.contact_number,
           j.job_title
    FROM job_applications ja
    JOIN registration u ON ja.user_id = u.id
    JOIN jobs j ON ja.job_id = j.id
    WHERE j.employer_id = $employer_id
    ORDER BY ja.applied_date DESC
";

$result = mysqli_query($con, $query);
?>

<div class="content-wrapper">
  <div class="container-full">
    <div class="content-header">
      <h3 class="mt-3">Job Applications</h3>
    </div>

    <section class="content">
      <?php if (mysqli_num_rows($result) > 0): ?>
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped bg-white">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Candidate</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Job Title</th>
                <th>Resume</th>
                <th>Applied Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; while ($row = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= htmlspecialchars($row['user_name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['contact_number']) ?></td>
                <td><?= htmlspecialchars($row['job_title']) ?></td>
                <td>
                  <?php if (!empty($row['resume'])): ?>
                    <a href="../../../resume/<?= $row['resume'] ?>" class="btn btn-sm btn-info" download>Download</a>
                  <?php else: ?>
                    <span class="text-muted">N/A</span>
                  <?php endif; ?>
                </td>
                <td><?= date('d M Y', strtotime($row['applied_date'])) ?></td>
                <td>
                  <span class="badge badge-secondary text-muted"><?= htmlspecialchars($row['status']) ?></span>
                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      <?php else: ?>
        <div class="alert alert-warning">No applications found.</div>
      <?php endif; ?>
    </section>
  </div>
</div>

<?php include 'footer1.php'; ?>
