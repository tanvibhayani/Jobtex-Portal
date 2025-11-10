<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login as admin'); window.location='admin-login.php';</script>";
    exit;
}

// ✅ Update interview status if form is submitted
if (isset($_POST['update_status'])) {
    $interview_id = $_POST['interview_id'];
    $new_status = $_POST['new_status'];

    $update_query = "UPDATE interview_schedule SET status = '$new_status' WHERE id = $interview_id";
    mysqli_query($conn, $update_query);
    echo "<script>window.location='admin-manage-interviews.php';</script>";
    exit;
}

// ✅ Filters
$filter_date = $_GET['filter_date'] ?? '';
$filter_status = $_GET['filter_status'] ?? '';
$filter_user = $_GET['filter_user'] ?? '';

// ✅ Query with filters
$query = "SELECT i.*, u.name AS candidate_name, e.name AS employer_name
          FROM interview_schedule i
          JOIN registration u ON i.candidate_id = u.id
          JOIN e_registration e ON i.employer_id = e.id
          WHERE 1";

if ($filter_date) {
    $query .= " AND i.interview_date = '$filter_date'";
}
if ($filter_status) {
    $query .= " AND i.status = '$filter_status'";
}
if ($filter_user) {
    $query .= " AND u.name LIKE '%$filter_user%'";
}

$query .= " ORDER BY i.interview_date DESC";
$result = mysqli_query($conn, $query);
?>

<!-- ✅ Layout starts -->
<div class="content-wrapper py-4"> <!-- Add vertical padding -->
  <div class="container-fluid px-3"> <!-- Add horizontal padding -->

    <div class="card bg-dark text-white shadow rounded-4 p-4"> <!-- Clean padding on card -->
      <h3 class="text-primary mb-4">Manage Interviews</h3>

      <!-- ✅ Filter Form -->
      <form class="row g-3 mb-4" method="GET">
        <div class="col-md-3">
          <label class="form-label">Filter by Date</label>
          <input type="date" name="filter_date" value="<?= $filter_date ?>" class="form-control bg-dark text-white border-secondary">
        </div>
        <div class="col-md-3">
          <label class="form-label">Status</label>
          <select name="filter_status" class="form-select bg-dark text-white border-secondary">
            <option value="">All</option>
            <option value="Scheduled" <?= $filter_status == 'Scheduled' ? 'selected' : '' ?>>Scheduled</option>
            <option value="Completed" <?= $filter_status == 'Completed' ? 'selected' : '' ?>>Completed</option>
            <option value="Canceled" <?= $filter_status == 'Canceled' ? 'selected' : '' ?>>Canceled</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Candidate Name</label>
          <input type="text" name="filter_user" value="<?= $filter_user ?>" class="form-control bg-dark text-white border-secondary">
        </div>
        <div class="col-md-3 d-flex align-items-end">
          <button type="submit" class="btn btn-primary me-2">Filter</button>
          <a href="admin-manage-interviews.php" class="btn btn-secondary">Reset</a>
        </div>
      </form>

      <!-- ✅ Table Section -->
      <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
          <thead>
            <tr>
              <th>Candidate</th>
              <th>Employer</th>
              <th>Date</th>
              <th>Time</th>
              <th>Mode</th>
              <th>Location</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?= htmlspecialchars($row['candidate_name']) ?></td>
                  <td><?= htmlspecialchars($row['employer_name']) ?></td>
                  <td><?= $row['interview_date'] ?></td>
                  <td><?= $row['interview_time'] ?></td>
                  <td><?= $row['interview_mode'] ?></td>
                  <td><?= htmlspecialchars($row['location']) ?></td>
                  <td>
                    <form method="POST" class="d-flex">
                      <input type="hidden" name="interview_id" value="<?= $row['id'] ?>">
                    <select name="new_status" class="form-select form-select-sm bg-dark text-white border-secondary me-2">
  <option value="Pending" <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
  <option value="Scheduled" <?= $row['status'] == 'Scheduled' ? 'selected' : '' ?>>Scheduled</option>
  <option value="Completed" <?= $row['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
  <option value="Canceled" <?= $row['status'] == 'Canceled' ? 'selected' : '' ?>>Canceled</option>
</select>
                      <button type="submit" name="update_status" class="btn btn-sm btn-success">Update</button>
                    </form>
                  </td>
                  <td>
                    <a href="admin-edit-interview.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="admin-delete-interview.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                  </td>
                </tr>
            <?php }
            } else {
              echo "<tr><td colspan='8' class='text-center'>No interviews found.</td></tr>";
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
