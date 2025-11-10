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

// Fetch interviews for this employer
$sql = "SELECT i.*, r.name AS candidate_name, r.email AS candidate_email
        FROM interview_schedule i
        JOIN registration r ON i.candidate_id = r.id
        WHERE i.employer_id = '$employer_id'
        ORDER BY i.interview_date DESC";

$result = mysqli_query($con, $sql);
?>

<div class="dashboard-body" style="background-color: #f9f9f9; min-height: 100vh;">
  <div class="container py-4">
    <div class="row">
      <div class="col-12">
        <h3 class="mb-4">Interview Schedule List</h3>
        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
              <tr>
                <th>Candidate</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>Mode</th>
                <th>Location</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($row['candidate_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['candidate_email']); ?></td>
                    <td><?php echo date('d M Y', strtotime($row['interview_date'])); ?></td>
                    <td><?php echo htmlspecialchars($row['interview_time']); ?></td>
                    <td><?php echo htmlspecialchars($row['interview_mode']); ?></td>
                    <td><?php echo htmlspecialchars($row['location']); ?></td>
                    <td><?php echo ucfirst($row['status']); ?></td>
                    <td>
                      <a href="edit-interview.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                      <a href="delete-interview.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this interview?');">Delete</a>
                    </td>
                  </tr>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="8" class="text-center">No interviews scheduled yet.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer1.php'; ?>
