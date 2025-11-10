<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
session_start();

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Login first'); location.href='admin-login.php';</script>";
    exit;
}

$query = "SELECT * FROM feedback ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<div class="container mt-4">
  <h3 class="mb-4">All Feedbacks</h3>
  <table class="table table-bordered table-striped bg-white">
    <thead>
      <tr>
        <th>From</th>
        <th>To</th>
        <th>Message</th>
        <th>Rating</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                <td>{$row['from_role']} (ID: {$row['from_id']})</td>
                <td>{$row['to_role']} (ID: {$row['to_id']})</td>
                <td>{$row['message']}</td>
                <td>{$row['rating']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
          }
      } else {
          echo "<tr><td colspan='5' class='text-center'>No feedbacks found.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<?php include 'footer.php'; ?>
