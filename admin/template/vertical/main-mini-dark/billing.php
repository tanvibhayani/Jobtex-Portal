<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

// Handle search/filter
$filter = '';
$search = '';
if (isset($_GET['search']) && $_GET['search'] !== '') {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $filter = "WHERE u.name LIKE '%$search%' OR u.email LIKE '%$search%' OR bh.plan LIKE '%$search%'";
}

// SQL query with join
$sql = "SELECT bh.*, u.name AS user_name, u.email AS user_email
        FROM billing_history bh
        JOIN users u ON bh.user_id = u.id
        $filter
        ORDER BY bh.start_date DESC";
$result = mysqli_query($conn, $sql);
?>

<div class="content-wrapper">
  <div class="container-full">
    <section class="content">
      <div class="row mb-20">
        <div class="col-md-6">
          <h4 class="box-title">Billing History</h4>
        </div>
        <div class="col-md-6 text-end">
          <form method="get" class="d-inline-block me-10">
            <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search user or plan" class="form-control inline-search">
          </form>
          <a href="export_billing.php?search=<?= urlencode($search) ?>" class="btn btn-primary">
            <i class="fa fa-download me-10"></i>Download CSV
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-body table-responsive">
              <table class="table mb-0">
                <thead class="thead-light">
                  <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Plan</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody class="text-fade">
                  <?php if ($result && mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                      <?php
                        $start = date("d/m/Y", strtotime($row['start_date']));
                        $end = date("d/m/Y", strtotime($row['end_date']));
                        $badge = ($row['status'] === 'Paid') ? 'badge-success-light' : 'badge-danger-light';
                      ?>
                      <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td>
                          <strong><?= htmlspecialchars($row['user_name']) ?></strong><br>
                          <small><?= htmlspecialchars($row['user_email']) ?></small>
                        </td>
                        <td><?= htmlspecialchars($row['plan']) ?></td>
                        <td><?= $start ?></td>
                        <td><?= $end ?></td>
                        <td>$<?= number_format($row['amount'], 2) ?></td>
                        <td><span class="badge badge-sm <?= $badge ?>"><?= htmlspecialchars($row['status']) ?></span></td>
                      </tr>
                    <?php endwhile; ?>
                  <?php else: ?>
                    <tr><td colspan="7" class="text-center">No billing history found.</td></tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php
mysqli_close($conn);
include 'footer.php';
?>
