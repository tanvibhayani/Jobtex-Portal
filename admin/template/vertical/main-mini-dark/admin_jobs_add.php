<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'header.php';
include 'sidebar.php';
include 'connection.php';

$message = "";
$employer_id = $_SESSION['admin_id'] ?? 0;

if (!$employer_id) {
    echo "<script>alert('Please login as admin'); window.location='auth-login-dark.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
    $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
    $job_description = mysqli_real_escape_string($conn, $_POST['job_description']);
    $working_schedule = mysqli_real_escape_string($conn, $_POST['working_schedule']);
    $working_day = mysqli_real_escape_string($conn, $_POST['working_day']);
    $salary_type = mysqli_real_escape_string($conn, $_POST['salary_type']);
    $payment_type = mysqli_real_escape_string($conn, $_POST['payment_type']);
    $salary_min = floatval($_POST['salary_min']);
    $salary_max = floatval($_POST['salary_max']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);
    $video_url = mysqli_real_escape_string($conn, $_POST['video_url']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
    $post_date = date('Y-m-d');

$image_name = $_FILES['image']['name'];   // Line 37
$image_tmp = $_FILES['image']['tmp_name']; // Line 38
$upload_dir = '../../../images/';
$image_path = $upload_dir . basename($image_name);

// ✅ Folder check
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// ✅ Move the file
move_uploaded_file($image_tmp, $image_path);


  
    // ✅ Insert Query
    $sql = "INSERT INTO jobs (
        employer_id, company_name, job_title, image, job_description,
        working_schedule, working_day, salary_type, payment_type,
        salary_min, salary_max, experience, qualification, deadline,
        video_url, country, state, address, postal_code, latitude, longitude, post_date
    ) VALUES (
        '$employer_id', '$company_name', '$job_title', '$image_name', '$job_description',
        '$working_schedule', '$working_day', '$salary_type', '$payment_type',
        '$salary_min', '$salary_max', '$experience', '$qualification', '$deadline',
        '$video_url', '$country', '$state', '$address', '$postal_code', '$latitude', '$longitude', '$post_date'
    )";

    if (mysqli_query($conn, $sql)) {
        $message = "<div class='alert alert-success'>Job added successfully.</div>";
    } else {
        $message = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>

<div class="content-wrapper" style="margin-top: 50px;">
  <div class="container-full">
    <div class="content-header"><br><br><br>
      <h4>Add New Job</h4>
      <a href="jobs.php" class="btn btn-secondary mb-3">Back to Jobs</a>
    </div>

    <section class="content">
      <?= $message ?>
      <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <label>Company Name</label>
            <input type="text" name="company_name" class="form-control" required>

            <label>Job Title</label>
            <input type="text" name="job_title" class="form-control" required>

            <label>Job Description</label>
            <textarea name="job_description" class="form-control" rows="3" required></textarea>

            <label>Working Schedule</label>
            <input type="text" name="working_schedule" class="form-control">

            <label>Working Day</label>
            <input type="text" name="working_day" class="form-control">

            <label>Salary Type</label>
            <input type="text" name="salary_type" class="form-control">

            <label>Payment Type</label>
            <input type="text" name="payment_type" class="form-control">

            <label>Salary Min</label>
            <input type="number" name="salary_min" class="form-control">

            <label>Salary Max</label>
            <input type="number" name="salary_max" class="form-control">
            <label>Experience</label>
            <input type="text" name="experience" class="form-control">

          </div>

          <div class="col-md-6">
            
            <label>Qualification</label>
            <input type="text" name="qualification" class="form-control">

            <label>Deadline</label>
            <input type="date" name="deadline" class="form-control">

            <label>Video URL</label>
            <input type="text" name="video_url" class="form-control">

            <label>Country</label>
            <input type="text" name="country" class="form-control">

            <label>State</label>
            <input type="text" name="state" class="form-control">

            <label>Address</label>
            <textarea name="address" class="form-control" rows="2"></textarea>

            <label>Postal Code</label>
            <input type="text" name="postal_code" class="form-control">

            <label>Latitude</label>
            <input type="text" name="latitude" class="form-control">

            <label>Longitude</label>
            <input type="text" name="longitude" class="form-control">

            <label>Company Logo / Image</label>
            <input type="file" name="image" class="form-control">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add Job</button>
      </form>
    </section>
  </div>
</div>

<?php include 'footer.php'; ?>
