<?php
session_start();
include 'connection.php';
include 'header.php'; 
include 'sidebar.php';// Dark theme admin header

// Check admin login
if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login as admin'); window.location='admin-login.php';</script>";
    exit;
}

// Use correct connection variable
$users = mysqli_query($conn, "SELECT id, name FROM users");

if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $alert_type = $_POST['alert_type'];
    $location_salary = $_POST['location_salary'];
    $jobs_found = $_POST['jobs_found'];
    $frequency = $_POST['frequency'];

    $query = "INSERT INTO job_alerts (user_id, title, alert_type, location_salary, jobs_found, frequency)
              VALUES ('$user_id', '$title', '$alert_type', '$location_salary', '$jobs_found', '$frequency')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Alert added successfully'); window.location='view-alert.php';</script>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>

<div class="container-fluid mt-3 px-3">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="card bg-dark text-white border-0 shadow p-4 rounded-4">
    <h3 class="text-primary" style="padding-top: 50px;">Add Job Alert</h3>


                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">User</label>
                        <select name="user_id" class="form-select bg-dark text-white border-secondary" required>
                            <option value="">Select User</option>
                            <?php while ($row = mysqli_fetch_assoc($users)) { ?>
                                <option value="<?= $row['id']; ?>"><?= htmlspecialchars($row['name']); ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alert Title</label>
                        <input type="text" name="title" class="form-control bg-dark text-white border-secondary" placeholder="e.g., New React Jobs Posted" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alert Type</label>
                        <select name="alert_type" class="form-select bg-dark text-white border-secondary" required>
                            <option>Full-Time</option>
                            <option>Part-Time</option>
                            <option>Internship</option>
                            <option>Remote</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location & Salary</label>
                        <input type="text" name="location_salary" class="form-control bg-dark text-white border-secondary" placeholder="e.g., Mumbai | ₹5-7 LPA" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jobs Found</label>
                        <input type="number" name="jobs_found" class="form-control bg-dark text-white border-secondary" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Frequency</label>
                        <select name="frequency" class="form-select bg-dark text-white border-secondary" required>
                            <option>Daily</option>
                            <option>Weekly</option>
                            <option>Monthly</option>
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" name="submit" class="btn btn-primary px-4">Add Alert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
