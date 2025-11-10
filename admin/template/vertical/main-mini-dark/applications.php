<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

$sql = "SELECT 
  a.id AS app_id,
  a.applied_date,
  a.status,
  a.resume,
  a.cover_letter,
  r.name AS candidate_name,
  r.email,
  r.contact_number,
  j.company_name,
  j.job_title,
  j.salary_min,
  j.salary_max,
  j.image AS logo,
  j.state,
  j.country
FROM job_applications a
JOIN registration r ON a.user_id = r.id
JOIN jobs j ON a.job_id = j.id
ORDER BY a.id DESC";

$result = mysqli_query($conn, $sql);
?>

<div class="content-wrapper">
  <div class="container-full">
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-body">
              <h4 class="box-title">All Job Applications</h4>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>ID</th>
                      <th>Candidate Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Job Title</th>
                      <th>Company</th>
                      <th>Location</th>
                      <th>Salary</th>
                      <th>Resume</th>
                      <th>Cover Letter</th>
                      <th>Applied Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                      <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                          <td><?= $row['app_id'] ?></td>
                          <td><?= htmlspecialchars($row['candidate_name']) ?></td>
                          <td><?= htmlspecialchars($row['email']) ?></td>
                          <td><?= htmlspecialchars($row['contact_number']) ?></td>
                          <td><?= htmlspecialchars($row['job_title']) ?></td>
                          <td><?= htmlspecialchars($row['company_name']) ?></td>
                          <td><?= htmlspecialchars($row['state'] . ', ' . $row['country']) ?></td>
                          <td>₹<?= htmlspecialchars($row['salary_min']) ?> - ₹<?= htmlspecialchars($row['salary_max']) ?></td>
                          <td>
                            <a href="uploads/<?= $row['resume'] ?>" target="_blank">View Resume</a>
                          </td>
                          <td><?= htmlspecialchars($row['cover_letter']) ?></td>
                          <td><?= date("d M Y", strtotime($row['applied_date'])) ?></td>
                          <td>
                            <?php
                              $status = strtolower($row['status']);
                              $badge = "badge-secondary";
                              if ($status == "shortlisted") $badge = "badge-success";
                              elseif ($status == "rejected") $badge = "badge-danger";
                              elseif ($status == "pending") $badge = "badge-warning";
                            ?>
                            <span class="badge <?= $badge ?>"><?= ucfirst($row['status']) ?></span>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    <?php else: ?>
                      <tr><td colspan="12" class="text-center">No applications found.</td></tr>
                    <?php endif; ?>
                  </tbody>
                </table>
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
