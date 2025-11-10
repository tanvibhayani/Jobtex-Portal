<?php
if(session_status()=== PHP_SESSION_NONE)
{
session_start(); // 🔑 Always first
}

include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['admin_id']) || empty($_SESSION['admin_id'])) {
    echo "<script>alert('Please login as Admin'); window.location='auth_login_dark.php';</script>";
    exit;
}


// ✅ Sanitize and Validate job_id from URL
$job_id = isset($_GET['job_id']) ? intval($_GET['job_id']) : 0;
if ($job_id <= 0) {
    echo "<p>Invalid Job ID</p>";
    exit;
}

// ✅ Fetch job details
$sql_job = "SELECT * FROM jobs WHERE id = $job_id";
$result_job = mysqli_query($conn, $sql_job);
if (!$result_job || mysqli_num_rows($result_job) == 0) {
    echo "<p>Job not found.</p>";
    exit;
}
$job = mysqli_fetch_assoc($result_job);

// ✅ Fetch candidate stats
$getCount = function($status = null) use ($conn, $job_id) {
    $where = ($status !== null) ? "AND status = '$status'" : "AND status != 'rejected'";
    $query = "SELECT COUNT(*) as total FROM job_applications WHERE job_id = $job_id $where";

    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);
    return $row['total'] ?? 0;
};

$total_candidates     = $getCount(); // excluding rejected
$awaiting_candidates  = $getCount('awaiting_review');
$rejected_candidates  = $getCount('rejected');

// Dummy clicks count
$clicks_this_week = 122;
?>

<!-- Content Wrapper -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Page Header -->
    <div class="content-header">
      <div class="d-md-flex align-items-center justify-content-between">
        <div>
          <a href="jobs_details.php" class="btn btn-outline btn-primary">Jobs</a>
          <a href="candidates.php" class="btn btn-outline btn-primary mx-lg-10">Candidates</a>
          <a href="mailbox.php" class="btn btn-outline btn-primary">Messages</a>
        </div>
        <a href="post_job.php" class="btn btn-danger mt-10 mt-md-0">Post A Job</a>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- Left column -->
        <div class="col-lg-8 col-12">
          <div class="box">
            <div class="box-body">
              <a href="jobs_details.php" class="mb-15 d-block"><i class="fa fa-angle-left"></i> Back to all jobs</a>
              <div class="d-md-flex justify-content-between align-items-center">
                <div>
                  <h4><?php echo htmlspecialchars($job['job_title']); ?></h4>
                  <p class="text-fade"><?php echo htmlspecialchars($job['company_name']); ?> - <?php echo htmlspecialchars($job['address']); ?></p>
                </div>
                <a href="#" class="btn btn-outline btn-success mt-10 mt-md-0">Sponsor this job</a>
              </div>

              <hr>

              <!-- Clicks -->
              <div class="row">
                <div class="col-12"><h4>Clicks</h4></div>
                <div class="col-xl-8"><p>Clicks graph placeholder</p></div>
                <div class="col-xl-4">
                  <h5>Clicks This Week</h5>
                  <h1><?php echo $clicks_this_week; ?></h1>
                  <a href="#" class="btn btn-outline btn-primary w-100 mt-3">Sponsor Job</a>
                  <a href="#" class="btn btn-outline btn-warning w-100 mt-2">Improve Job Description</a>
                </div>
              </div>

              <hr>

              <!-- Candidates -->
              <div class="row">
                <div class="col-12"><h4>Candidates</h4></div>
                <div class="col-md-6">
                  <div class="text-center bg-light p-30 mb-2">
                    <h6>Awaiting Review</h6>
                    <h1><?php echo $awaiting_candidates; ?></h1>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text-center bg-light p-30 mb-2">
                    <h6>Total (Excluding Rejected)</h6>
                    <h1><?php echo $total_candidates; ?></h1>
                  </div>
                </div>
                <div class="col-12 text-end">
                  <p class="text-fade mt-2"><?php echo $rejected_candidates; ?> Rejected</p>
                </div>

                <div class="col-12">
                  <div class="bg-primary-light p-15">
                    <h4 class="text-primary">Discover top applicants faster by sending a free assessment</h4>
                    <p>Use assessments to filter top talent efficiently.</p>
                    <a href="#" class="btn btn-primary">Choose Assessment</a>
                  </div>
                </div>
              </div>

              <hr>

              <!-- Job Description -->
              <div class="row">
                <div class="col-12">
                  <h4>Job Description</h4>
                  <ul class="text-fade">
                    <?php 
                    $desc_lines = preg_split("/\r\n|\n|\r/", $job['job_description']);
                    foreach ($desc_lines as $line) {
                        $line = trim($line);
                        if (!empty($line)) echo "<li>" . htmlspecialchars($line) . "</li>";
                    }
                    ?>
                  </ul>
                  <p class="text-fade">Start Date: <?php echo htmlspecialchars($job['post_date']); ?></p>
                  <p class="text-fade">Schedule: <?php echo htmlspecialchars($job['working_schedule']); ?></p>
                  <p class="text-fade">Salary: ₹<?php echo htmlspecialchars($job['salary_min']) . " - ₹" . htmlspecialchars($job['salary_max']); ?></p>
                  <h5>Contact Employer</h5>
                  <p><?php echo htmlspecialchars($job['contact_number']); ?></p>
                </div>
              </div>

              <hr>

              <!-- Application Questions -->
              <div class="row">
                <div class="col-12">
                  <h4>Application Questions</h4>
                  <ul class="text-fade">
                    <li>What is the highest level of education you have completed?</li>
                    <!-- Add more dynamic questions if available -->
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Right column -->
        <div class="col-lg-4">
          <div class="box">
            <div class="box-body">
              <a href="edit_job.php?job_id=<?php echo $job_id; ?>" class="btn btn-primary btn-block mb-3">Edit Job</a>

              <div class="media-list media-list-divided">
                <a href="close_job.php?job_id=<?php echo $job_id; ?>" class="media media-single">
                  <span class="title">Close Job</span>
                  <span class="badge"><i class="fa fa-arrow-right"></i></span>
                </a>
                <a href="job_performance.php?job_id=<?php echo $job_id; ?>" class="media media-single">
                  <span class="title">View Cost & Performance</span>
                  <span class="badge"><i class="fa fa-arrow-right"></i></span>
                </a>
                <a href="find_candidates.php?job_id=<?php echo $job_id; ?>" class="media media-single">
                  <span class="title">Find Candidates</span>
                  <span class="badge"><i class="fa fa-arrow-right"></i></span>
                </a>
              </div>

              <a href="add_candidate.php?job_id=<?php echo $job_id; ?>" class="btn btn-outline btn-success btn-block my-3">Add Candidate</a>

              <p><strong>Views:</strong> <?php echo intval($job['views']); ?></p>
              <p><strong>Candidates:</strong> <?php echo $total_candidates; ?></p>
              <p><strong>Status:</strong> 
                <?php 
                  $status = htmlspecialchars($job['status']);
                  echo ucfirst($status); 
                ?>
              </p>
              <p><strong>Posted On:</strong> <?php echo date('d M, Y', strtotime($job['post_date'])); ?></p>

              <a href="public_job_page.php?job_id=<?php echo $job_id; ?>" class="btn btn-outline btn-danger btn-block my-3">View Public Job Page</a>

              <p>Promote this job:</p>
              <a href="#" class="btn bg-facebook text-white btn-block mb-2"><i class="fa fa-facebook-f"></i> Share</a>
              <a href="#" class="btn bg-twitter text-white btn-block mb-2"><i class="fa fa-twitter"></i> Tweet</a>
              <a href="#" class="btn bg-linkedin text-white btn-block"><i class="fa fa-linkedin"></i> Share</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php include 'footer.php'; ?>
