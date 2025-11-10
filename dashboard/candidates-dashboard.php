<?php
session_start();
include 'connection.php';
include 'header1.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first.'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch counts
$application_count = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS total FROM job_applications WHERE user_id = $user_id"))['total'];
$saved_jobs_count = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS total FROM saved_jobs WHERE user_id = $user_id"))['total'];
$review_count = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS total FROM reviews WHERE user_id = $user_id"))['total'];
$posted_jobs_count = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(DISTINCT job_id) AS total FROM job_applications WHERE user_id = $user_id"))['total'];

?>

<div class="left-menu">
  <?php include 'sidemenu.php'; ?>
  <div class="dashboard__content">

    <!-- Dashboard Title -->
    <section class="page-title-dashboard">
      <div class="themes-container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-dashboard">
              <div class="title-dash flex2">Dashboard</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Counters -->
    <section class="flat-icon-dashboard">
      <div class="themes-container">
        <div class="row">
          <div class="col-lg-12">
            <div class="wrap-icon widget-counter">

              <!-- Posted Jobs -->
              <div class="box-icon wrap-counter flex">
                <div class="icon style1"><span class="icon-bag"></span></div>
                <div class="content">
                  <div class="count-dash"><?php echo $posted_jobs_count; ?></div>
                  <h4 class="title-count">Posted Jobs</h4>
                </div>
              </div>

              <!-- Applications -->
              <div class="box-icon wrap-counter flex">
                <div class="icon style2"><span class="icon-bag"></span></div>
                <div class="content">
                  <div class="count-dash"><?php echo $application_count; ?></div>
                  <h4 class="title-count">Applications</h4>
                </div>
              </div>

             

              <!-- Wishlist / Saved Jobs -->
              <div class="box-icon wrap-counter flex">
                <div class="icon style4"><span class="icon-bag"></span></div>
                <div class="content">
                  <div class="count-dash"><?php echo $saved_jobs_count; ?></div>
                  <h4 class="title-count">Wishlist</h4>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


    <?php include 'footer.php'; ?>
  </div>
</div>
