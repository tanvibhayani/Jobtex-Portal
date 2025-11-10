<?php
session_start();
include 'connection.php';
include 'header.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login first.'); window.location='auth-login-dark.php';</script>";
    exit;
}

$interview_id = $_GET['id'] ?? 0;

// Fetch interview details
$result = mysqli_query($conn, "SELECT * FROM interview_schedule WHERE id = $interview_id");
if (!$result || mysqli_num_rows($result) == 0) {
    echo "<script>alert('Interview not found.'); window.location='admin-manage-interviews.php';</script>";
    exit;
}
$data = mysqli_fetch_assoc($result);

// Update on form submit
if (isset($_POST['update'])) {
    $candidate_id = $_POST['candidate_id'];
    $employer_id = $_POST['employer_id'];
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
    $interview_mode = $_POST['interview_mode'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $update = mysqli_query($conn, "UPDATE interview_schedules SET 
        candidate_id = '$candidate_id',
        employer_id = '$employer_id',
        interview_date = '$interview_date',
        interview_time = '$interview_time',
        interview_mode = '$interview_mode',
        location = '$location',
        status = '$status'
        WHERE id = $interview_id
    ");

    if ($update) {
        echo "<script>alert('Interview updated successfully.'); window.location='admin-manage-interviews.php';</script>";
    } else {
        echo "<script>alert('Failed to update interview.');</script>";
    }
}
?>

<!-- Page content -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="mb-4 text-light py-5 mt-5">Edit Interview Schedule</h4>
        <form method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label text-light">Candidate ID</label>
                    <input type="number" name="candidate_id" class="form-control bg-dark text-light" required value="<?php echo $data['candidate_id']; ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label text-light">Employer ID</label>
                    <input type="number" name="employer_id" class="form-control bg-dark text-light" required value="<?php echo $data['employer_id']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label text-light">Interview Date</label>
                    <input type="date" name="interview_date" class="form-control bg-dark text-light" required value="<?php echo $data['interview_date']; ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label text-light">Interview Time</label>
                    <input type="time" name="interview_time" class="form-control bg-dark text-light" required value="<?php echo $data['interview_time']; ?>">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label text-light">Mode (Online/Offline)</label>
                <select name="interview_mode" class="form-select bg-dark text-light" required>
                    <option value="online" <?php if ($data['interview_mode'] == 'online') echo 'selected'; ?>>Online</option>
                    <option value="offline" <?php if ($data['interview_mode'] == 'offline') echo 'selected'; ?>>Offline</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label text-light">Location</label>
                <input type="text" name="location" class="form-control bg-dark text-light" value="<?php echo $data['location']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-light">Status</label>
                <select name="status" class="form-select bg-dark text-light" required>
                    <option value="Scheduled" <?php if ($data['status'] == 'Scheduled') echo 'selected'; ?>>Scheduled</option>
                    <option value="Completed" <?php if ($data['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
                    <option value="Cancelled" <?php if ($data['status'] == 'Cancelled') echo 'selected'; ?>>Cancelled</option>
                </select>
            </div>

            <button type="submit" name="update" class="btn btn-primary">Update Interview</button>
            <a href="admin-manage-interviews.php" class="btn btn-outline-light ms-2">Back</a>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
