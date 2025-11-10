<?php
session_start();
include 'connection.php'; // this defines $con

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first'); window.location.href='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $job_id = $_POST['job_id'];
    $rating = $_POST['rating'];
    $comment = mysqli_real_escape_string($con, $_POST['comment']);

    // Check if already reviewed
    $check = mysqli_query($con, "SELECT * FROM reviews WHERE user_id = $user_id AND job_id = $job_id");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('You have already reviewed this job.');</script>";
    } else {
        $insert = mysqli_query($con, "INSERT INTO reviews (user_id, job_id, rating, comment) VALUES ($user_id, $job_id, $rating, '$comment')");
        if ($insert) {
            echo "<script>alert('Review submitted successfully'); window.location.href='user-my-reviews.php';</script>";
        } else {
            echo "<script>alert('Error submitting review');</script>";
        }
    }
}
?>

<?php include 'header1.php'; ?>
<?php include 'sidemenu.php'; ?>

<div class="container mt-5 mb-5">
  <h3 class="mb-4 text-center">Add a Review</h3>
  <form method="POST" class="border p-4 bg-white rounded shadow-sm">
    <div class="mb-3">
      <label for="job_id" class="form-label">Select Job</label>
      <select name="job_id" id="job_id" class="form-select" required>
        <option value="">-- Select Job --</option>
        <?php
        $query = "
          SELECT j.id, j.job_title 
          FROM job_applications ja
          JOIN jobs j ON ja.job_id = j.id
          WHERE ja.user_id = $user_id
            AND ja.status = 'Shortlisted'
            AND j.id NOT IN (
              SELECT job_id FROM reviews WHERE user_id = $user_id
            )
          ORDER BY ja.applied_date DESC
        ";
        $jobs = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($jobs)) {
            echo "<option value='{$row['id']}'>{$row['job_title']}</option>";
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="rating" class="form-label">Rating (1 to 5)</label>
      <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
    </div>

    <div class="mb-3">
      <label for="comment" class="form-label">Comment</label>
      <textarea name="comment" id="comment" rows="4" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit Review</button>
    <a href="user-dashboard.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include 'footer.php'; ?>
