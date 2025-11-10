<?php
session_start();
include 'connection.php';
include 'header1.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first.'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch reviews
$query = "SELECT r.*, j.job_title, e.company_name 
          FROM reviews r
          JOIN jobs j ON r.job_id = j.id
          JOIN e_registration e ON j.employer_id = e.id
          WHERE r.user_id = $user_id
          ORDER BY r.created_at DESC";
$result = mysqli_query($con, $query);
?>

<section class="page-title style2">
  <div class="container">
    <div class="content-box">
      <div class="page-title-heading">
        <h1 class="title">My Reviews</h1>
      </div>
    </div>
  </div>
</section>

<section class="candidates-reviews">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-12">

        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="card mb-4 shadow-sm rounded-4 border-0">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="mb-1"><?php echo htmlspecialchars($row['company_name']); ?></h5>
                  <small class="text-muted"><?php echo date("d M Y", strtotime($row['created_at'])); ?></small>
                </div>
                <h6 class="text-primary"><?php echo htmlspecialchars($row['job_title']); ?></h6>
                <p class="mt-2 mb-1"><?php echo nl2br(htmlspecialchars($row['review_text'])); ?></p>
                <p class="mb-0 text-warning">
                  <?php
                    $stars = intval($row['rating']);
                    for ($i = 1; $i <= 5; $i++) {
                      echo $i <= $stars ? '★' : '☆';
                    }
                  ?>
                </p>
              </div>
            </div>
          <?php } ?>
        <?php else: ?>
          <div class="alert alert-info">You have not submitted any reviews yet.</div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
