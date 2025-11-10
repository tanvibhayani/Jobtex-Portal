<?php
session_start();
include 'connection.php';
include 'header.php'; // Your top navigation bar
include 'sidebar.php'; // Sidebar menu

// Fetch interviews with candidate & employer names
$query = "SELECT i.*, u.name AS candidate_name, e.name AS employer_name 
          FROM interview_schedule i
          LEFT JOIN registration u ON i.candidate_id = u.id
          LEFT JOIN e_registration e ON i.employer_id = e.id
          ORDER BY i.created_at DESC";

$result = mysqli_query($conn, $query);

// Error check
if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!-- Main content wrapper -->
<div class="content-wrapper">
  <div class="container-fluid mt-4 px-4">
    <div class="row">
      <div class="col-12">
        <div class="card bg-dark text-white p-4 rounded-4 shadow">
          <h3 class="text-primary mb-4">All Scheduled Interviews</h3>

          <?php if (mysqli_num_rows($result) > 0) { ?>
            <div class="table-responsive">
              <table class="table table-bordered table-dark text-white">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Candidate</th>
                    <th>Employer</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Mode</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Created At</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <tr>
                      <td><?= $count++; ?></td>
                      <td><?= htmlspecialchars($row['candidate_name']); ?></td>
                      <td><?= htmlspecialchars($row['employer_name']); ?></td>
                      <td><?= htmlspecialchars($row['interview_date']); ?></td>
                      <td><?= htmlspecialchars($row['interview_time']); ?></td>
                      <td><?= htmlspecialchars($row['interview_mode']); ?></td>
                      <td><?= htmlspecialchars($row['location']); ?></td>
                      <td><?= htmlspecialchars($row['status']); ?></td>
                      <td><?= date("d M Y, h:i A", strtotime($row['created_at'])); ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          <?php } else { ?>
            <div class="alert alert-info">No interviews scheduled yet.</div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
