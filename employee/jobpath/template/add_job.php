<?php
include 'connection.php';
session_start();

// Check if employer is logged in
if (!isset($_SESSION['employer_id'])) {
    header("Location: login.php");
    exit();
}

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $employer_id     = $_SESSION['employer_id'];
    $company_name    = $_POST['company_name'];
    $job_title       = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $working_schedule = $_POST['working_schedule'];
    $working_day     = $_POST['working_day'];
    $salary_type     = $_POST['salary_type'];
    $payment_type    = $_POST['payment_type'];
    $salary_min      = $_POST['salary_min'];
    $salary_max      = $_POST['salary_max'];
    $experience      = $_POST['experience'];
    $qualification   = $_POST['qualification'];
    $deadline        = $_POST['deadline'];
    $video_url       = $_POST['video_url'];
    $country         = $_POST['country'];
    $state           = $_POST['state'];
    $address         = $_POST['address'];
    $postal_code     = $_POST['postal_code'];
    $latitude        = $_POST['latitude'];
    $longitude       = $_POST['longitude'];

    $sql = "INSERT INTO jobs (employer_id, company_name, job_title, job_description, working_schedule, working_day, salary_type, payment_type, salary_min, salary_max, experience, qualification, deadline, video_url, country, state, address, postal_code, latitude, longitude)
            VALUES ('$employer_id', '$company_name', '$job_title', '$job_description', '$working_schedule', '$working_day', '$salary_type', '$payment_type', '$salary_min', '$salary_max', '$experience', '$qualification', '$deadline', '$video_url', '$country', '$state', '$address', '$postal_code', '$latitude', '$longitude')";

    if (mysqli_query($con, $sql)) {
        $msg = "<div class='alert alert-success'>Job posted successfully.</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Error: " . mysqli_error($con) . "</div>";
    }
}
?>

<?php include 'header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="mb-4">Post a New Job</h2>
        <?php if ($msg != "") echo $msg; ?>
        <form method="post">
            <div class="row g-3">
                <div class="col-md-6"><input type="text" name="company_name" class="form-control" placeholder="Company Name" required></div>
                <div class="col-md-6"><input type="text" name="job_title" class="form-control" placeholder="Job Title" required></div>
                <div class="col-md-12"><textarea name="job_description" class="form-control" placeholder="Job Description" required></textarea></div>
                <div class="col-md-6"><input type="text" name="working_schedule" class="form-control" placeholder="Working Schedule" required></div>
                <div class="col-md-6"><input type="text" name="working_day" class="form-control" placeholder="Working Day" required></div>
                <div class="col-md-6"><input type="text" name="salary_type" class="form-control" placeholder="Salary Type" required></div>
                <div class="col-md-6"><input type="text" name="payment_type" class="form-control" placeholder="Payment Type" required></div>
                <div class="col-md-6"><input type="number" step="0.01" name="salary_min" class="form-control" placeholder="Min Salary" required></div>
                <div class="col-md-6"><input type="number" step="0.01" name="salary_max" class="form-control" placeholder="Max Salary" required></div>
                <div class="col-md-6"><input type="text" name="experience" class="form-control" placeholder="Experience" required></div>
                <div class="col-md-6"><input type="text" name="qualification" class="form-control" placeholder="Qualification" required></div>
                <div class="col-md-6"><input type="date" name="deadline" class="form-control" required></div>
                <div class="col-md-6"><input type="url" name="video_url" class="form-control" placeholder="Video URL (optional)"></div>
                <div class="col-md-4"><input type="text" name="country" class="form-control" placeholder="Country" required></div>
                <div class="col-md-4"><input type="text" name="state" class="form-control" placeholder="State" required></div>
                <div class="col-md-4"><input type="text" name="address" class="form-control" placeholder="Address" required></div>
                <div class="col-md-4"><input type="text" name="postal_code" class="form-control" placeholder="Postal Code" required></div>
                <div class="col-md-4"><input type="text" name="latitude" class="form-control" placeholder="Latitude" required></div>
                <div class="col-md-4"><input type="text" name="longitude" class="form-control" placeholder="Longitude" required></div>
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-primary">Post Job</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>