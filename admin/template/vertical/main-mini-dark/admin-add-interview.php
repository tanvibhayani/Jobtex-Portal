<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login as admin'); window.location='admin-login.php';</script>";
    exit;
}

// Fetch candidates and employers for dropdowns
$candidates = mysqli_query($conn, "SELECT id, name FROM users");
$employers = mysqli_query($conn, "SELECT id, company_name FROM employers");

if (isset($_POST['submit'])) {
    $candidate_id = $_POST['candidate_id'];
    $employer_id = $_POST['employer_id'];
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
    $interview_mode = $_POST['interview_mode'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $query = "INSERT INTO interview_schedule 
        (candidate_id, employer_id, interview_date, interview_time, interview_mode, location, status, created_at) 
        VALUES ('$candidate_id', '$employer_id', '$interview_date', '$interview_time', '$interview_mode', '$location', '$status', NOW())";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Interview scheduled successfully'); window.location='view-interviews.php';</script>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>

<div class="container-fluid mt-4 px-4">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card bg-dark text-white p-4 rounded-4 shadow">
                <h3 class="text-primary mb-4">Add Interview Schedule</h3>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Select Candidate</label>
                        <select name="candidate_id" class="form-select bg-dark text-white border-secondary" required>
                            <option value="">-- Select --</option>
                            <?php while ($row = mysqli_fetch_assoc($candidates)) { ?>
                                <option value="<?= $row['id']; ?>"><?= htmlspecialchars($row['name']); ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Employer</label>
                        <select name="employer_id" class="form-select bg-dark text-white border-secondary" required>
                            <option value="">-- Select --</option>
                            <?php while ($row = mysqli_fetch_assoc($employers)) { ?>
                                <option value="<?= $row['id']; ?>"><?= htmlspecialchars($row['company_name']); ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Interview Date</label>
                        <input type="date" name="interview_date" class="form-control bg-dark text-white border-secondary" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Interview Time</label>
                        <input type="time" name="interview_time" class="form-control bg-dark text-white border-secondary" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mode</label>
                        <select name="interview_mode" class="form-select bg-dark text-white border-secondary" required>
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" class="form-control bg-dark text-white border-secondary" required placeholder="e.g., Zoom link or Office address">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select bg-dark text-white border-secondary" required>
                            <option value="Scheduled">Scheduled</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" name="submit" class="btn btn-primary px-4">Schedule Interview</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
