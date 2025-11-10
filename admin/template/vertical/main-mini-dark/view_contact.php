<?php
session_start();
include 'connection.php';
include 'header.php'; // Top navigation
include 'sidebar.php'; // Sidebar menu

// Fetch contacts
$query = "SELECT * FROM contact ORDER BY id DESC";
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
          <h3 class="text-primary mb-4">All Contact Messages</h3>

          <?php if (mysqli_num_rows($result) > 0) { ?>
            <div class="table-responsive">
              <table class="table table-bordered table-dark text-white align-middle">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Question</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <tr>
                      <td><?= $count++; ?></td>
                      <td><?= htmlspecialchars($row['name']); ?></td>
                      <td><?= htmlspecialchars($row['subject']); ?></td>
                      <td><?= htmlspecialchars($row['email']); ?></td>
                      <td><?= nl2br(htmlspecialchars($row['question'])); ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          <?php } else { ?>
            <div class="alert alert-info">No contact messages yet.</div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
