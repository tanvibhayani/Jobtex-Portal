<?php
include 'header.php';
include 'connection.php';

// ✅ Blog ID from URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
  echo "<p style='padding:20px;'>No blog found.</p>";
  include 'footer.php';
  exit;
}

$blog_id = intval($_GET['id']); // security

// ✅ Fetch blog from DB
$query = "SELECT * FROM blogs WHERE id = $blog_id AND status = 'Approved'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 0) {
  echo "<p style='padding:20px;'>Blog not found or not approved.</p>";
  include 'footer.php';
  exit;
}

$blog = mysqli_fetch_assoc($result);
?>

<!-- Blog Detail Section -->
<center><section class="py-5 mt-5 bg-light">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-8">
        <div class="bg-white p-4 shadow-sm rounded">
          <h2 class="fw-bold mb-3"><?= htmlspecialchars($blog['title']) ?></h2>
          <p class="text-muted mb-2">
            <i class="fas fa-calendar-alt me-2" style="font-size: 16px;"></i><?= date('d M Y', strtotime($blog['created_at'])) ?>
            &nbsp; | &nbsp;
           
          </p>
          <?php if (!empty($blog['image'])): ?>
            <img src="images/<?= htmlspecialchars($blog['image']) ?>" alt="Blog Image" class="img-fluid rounded mb-4">
          <?php endif; ?>
          <div class="blog-content" style="font-size: 20px;">
            <?= $blog['content'] ?> <!-- Rich HTML content -->
          </div>
        </div>
      </div>

      <!-- Sidebar: Recent Blogs -->
      <div class="col-lg-4">
        <h4 class="mb-3">Recent Posts</h4>
        <?php
        $recent_query = "SELECT * FROM blogs WHERE status = 'Approved' AND id != $blog_id ORDER BY created_at DESC LIMIT 3";
        $recent_result = mysqli_query($con, $recent_query);

        if (mysqli_num_rows($recent_result) > 0) {
          while ($row = mysqli_fetch_assoc($recent_result)) {
        ?>
            <div class="card mb-3 shadow-sm">
              <?php if (!empty($row['image'])): ?>
                <img src="images/<?= htmlspecialchars($row['image']) ?>" class="card-img-top" alt="Recent Blog Image">
              <?php endif; ?>
              <div class="card-body">
                <h6 class="card-title">
                  <a href="blog-detail.php?id=<?= $row['id'] ?>" class="text-dark text-decoration-none">
                    <?= htmlspecialchars($row['title']) ?>
                  </a>
                </h6>
                <p class="text-muted mb-0">
                  <small><i class="fas fa-calendar-alt me-1"></i><?= date('d M Y', strtotime($row['created_at'])) ?></small>
                </p>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<p>No recent blogs available.</p>";
        }
        ?>
      </div>
    </div>
  </div>
</section></center>

<?php include 'footer.php'; ?>
