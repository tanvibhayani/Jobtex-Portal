<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login as admin.'); window.location.href='auth_login_dark.php';</script>";
    exit;
}

// Delete review
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM reviews WHERE id = $delete_id");
    echo "<script>alert('Review deleted successfully.'); window.location.href='admin-manage-reviews.php';</script>";
}
?>


<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
<div class="wrapper">

  <?php include("header.php"); ?>
  <?php include("sidebar.php"); ?>

  <div class="content-wrapper">
    <div class="container-full">

      <div class="content-header d-flex justify-content-between align-items-center">
        <h3 class="page-title mb-0">Manage Reviews</h3>
      </div>

      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">All Candidate Reviews</h4>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover text-white">
                <thead class="bg-dark">
                  <tr>
                    <th>#</th>
                    <th>Candidate</th>
                    <th>Job Title</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $query = mysqli_query($conn, "
                    SELECT reviews.*, 
                           registration.name AS candidate_name,
                           jobs.job_title 
                    FROM reviews 
                    JOIN registration ON reviews.user_id = registration.id
                    JOIN jobs ON reviews.job_id = jobs.id
                    ORDER BY reviews.created_at DESC
                ");
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<tr>
                            <td>{$i}</td>
                            <td>{$row['candidate_name']}</td>
                            <td>{$row['job_title']}</td>
                            <td><span class='badge bg-success'>{$row['rating']} / 5</span></td>
                            <td>" . htmlspecialchars($row['comment']) . "</td>
                            <td>" . date('d M Y, h:i A', strtotime($row['created_at'])) . "</td>
                            <td>
                              <a href='admin-manage-reviews.php?delete={$row['id']}' 
                                 onclick=\"return confirm('Are you sure you want to delete this review?');\" 
                                 class='btn btn-danger btn-sm'><i class='bi bi-trash'></i></a>
                            </td>
                          </tr>";
                    $i++;
                }
                if ($i == 1) {
                    echo "<tr><td colspan='7' class='text-center text-muted'>No reviews found.</td></tr>";
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>

  <?php include("footer.php"); ?>
</div>

