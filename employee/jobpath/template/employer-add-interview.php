<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login as employer'); window.location='login.php';</script>";
    exit;
}

$employer_id = $_SESSION['employer_id'];
$candidates = mysqli_query($con, "SELECT id, name FROM registration");

if (isset($_POST['submit'])) {
    $candidate_id = $_POST['candidate_id'];
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
    $interview_mode = $_POST['interview_mode'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $query = "INSERT INTO interview_schedule 
              (candidate_id, employer_id, interview_date, interview_time, interview_mode, location, status)
              VALUES 
              ('$candidate_id', '$employer_id', '$interview_date', '$interview_time', '$interview_mode', '$location', '$status')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Interview scheduled successfully'); window.location='view-interviews.php';</script>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($con) . "</div>";
    }
}
?>

<div class="container mt-5 mb-5">
    <div class="card p-4 shadow-sm border-0 rounded-4 bg-white">
        <h3 class="text-dark mb-4">Schedule Interview</h3>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Candidate</label>
                <select name="candidate_id" class="form-select" required>
                    <option value="">-- Select Candidate --</option>
                    <?php while ($row = mysqli_fetch_assoc($candidates)) { ?>
                        <option value="<?= $row['id']; ?>"><?= htmlspecialchars($row['name']); ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Interview Date</label>
                <input type="date" name="interview_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Interview Time</label>
                <input type="time" name="interview_time" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Interview Mode</label>
                <select name="interview_mode" class="form-select" required>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                    <option value="Telephonic">Telephonic</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Location / Link</label>
                <input type="text" name="location" class="form-control" placeholder="e.g., Zoom link or office address" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="Scheduled">Scheduled</option>
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>

            <div class="text-end">
                <button type="submit" name="submit" class="btn btn-success">Schedule Interview</button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer1.php'; ?>
