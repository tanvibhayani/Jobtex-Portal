<?php
include 'header.php';
include 'sidebar.php';
?>

<div class="content-wrapper">
  <div class="container-full">
    <section class="content">
      <!-- Dashboard Cards -->
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="box">
            <div class="box-body text-center">
              <h4 class="mb-2">Total Jobs</h4>
              <h2 class="text-primary">150</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="box">
            <div class="box-body text-center">
              <h4 class="mb-2">Total Users</h4>
              <h2 class="text-success">80</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="box">
            <div class="box-body text-center">
              <h4 class="mb-2">Applications</h4>
              <h2 class="text-warning">350</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Feedback Section -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Recent Feedback</h4>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th>#</th>
                      <th>User</th>
                      <th>Message</th>
                      <th>Submitted At</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'connection.php';
                    $q = "SELECT f.*, r.name FROM feedback f LEFT JOIN registration r ON f.user_id = r.id ORDER BY f.created_at DESC LIMIT 5";
                    $res = mysqli_query($conn, $q);
                    $count = 1;
                    if (mysqli_num_rows($res) > 0) {
                      while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>
                                <td>{$count}</td>
                                <td>" . htmlspecialchars($row['name']) . "</td>
                                <td>" . htmlspecialchars($row['message']) . "</td>
                                <td>" . date("d M Y, h:i A", strtotime($row['created_at'])) . "</td>
                              </tr>";
                        $count++;
                      }
                    } else {
                      echo "<tr><td colspan='4' class='text-center'>No feedback found</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
                <a href="admin_feedback.php" class="btn btn-sm btn-primary mt-2">View All</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
</div>

<?php
include 'footer.php';
?>
