<?php
session_start();
include 'connection.php';
include 'header1.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first.'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch job alerts
$query = "SELECT * FROM job_alerts WHERE user_id = '$user_id' ORDER BY created_at DESC";
$result = mysqli_query($con, $query);
?>

<!-- Page Content Start -->
<div class="container-fluid mt-5 px-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
             <div class="left-menu">
            <?php include 'sidemenu.php'; ?>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <h3 class="mb-4">Job Alerts</h3>
            <div class="row">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-12">
                    <div class="card border rounded-3 mb-3 p-4 shadow-sm">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="fw-bold mb-0"><?php echo htmlspecialchars($row['title']); ?></h5>
                            <span class="badge bg-primary"><?php echo htmlspecialchars($row['alert_type']); ?></span>
                        </div>

                        <p class="mb-1"><strong>Location & Salary:</strong> <?php echo htmlspecialchars($row['location_salary']); ?></p>
                        <p class="mb-1"><strong>Jobs Found:</strong> <?php echo (int)$row['jobs_found']; ?></p>
                        <p class="mb-3"><strong>Frequency:</strong> <?php echo htmlspecialchars($row['frequency']); ?></p>

                        <div class="text-end">
                            <small class="text-secondary">
                                <?php echo date("d M Y, h:i A", strtotime($row['created_at'])); ?>
                            </small>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo "<div class='col-md-12'><div class='alert alert-info'>No job alerts available.</div></div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
