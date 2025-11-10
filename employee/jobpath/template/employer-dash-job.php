<?php
session_start();
include 'connection.php'; // $con होना चाहिए इस फाइल में
include 'header.php';
include 'sidebar.php';

// Check if employer is logged in
if (!isset($_SESSION['employer_id'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];

// Fetch Jobs posted by this employer
$sql = "SELECT * FROM jobs WHERE employer_id = '$employer_id' ORDER BY post_date DESC";
$result = mysqli_query($con, $sql);
?>

<div class="dashboard-body" style="background-color: #f8f9fa; min-height: 100vh;">
  <div class="container py-4">
    <div class="row">
      <div class="col-12">
        <h3 class="mb-4">My Posted Jobs</h3>
        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
              <tr>
                <th>Job Title</th>
                <th>Company</th>
                <th>Salary</th>
                <th>Type</th>
                <th>Experience</th>
                <th>Qualification</th>
                <th>Location</th>
                <th>Post Date</th>
                <th>Deadline</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while($job = mysqli_fetch_assoc($result)): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($job['job_title']); ?></td>
                    <td><?php echo htmlspecialchars($job['company_name']); ?></td>
                    <td>
                      <?php
                      if ($job['salary_type'] === 'range') {
                          echo "₹" . number_format($job['salary_min']) . " - ₹" . number_format($job['salary_max']);
                      } else {
                          echo "₹" . number_format($job['salary_min']);
                      }
                      ?>
                    </td>
                    <td><?php echo htmlspecialchars($job['payment_type']); ?></td>
                    <td><?php echo htmlspecialchars($job['experience']); ?> yrs</td>
                    <td><?php echo htmlspecialchars($job['qualification']); ?></td>
                    <td><?php echo htmlspecialchars($job['state'] . ', ' . $job['country']); ?></td>
                    <td><?php echo date("d M Y", strtotime($job['post_date'])); ?></td>
                    <td><?php echo date("d M Y", strtotime($job['deadline'])); ?></td>
                    <td>
                      <a href="edit-job.php?id=<?php echo $job['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                      <a href="delete-job.php?id=<?php echo $job['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this job?');">Delete</a>
                    </td>
                  </tr>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="10" class="text-center">No jobs posted yet.</td>
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
