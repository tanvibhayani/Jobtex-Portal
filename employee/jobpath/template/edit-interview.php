<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];
$id = $_GET['id'] ?? 0;

// Fetch existing interview
$sql = "SELECT * FROM interview_schedule WHERE id = '$id' AND employer_id = '$employer_id'";
$result = mysqli_query($con, $sql);
$interview = mysqli_fetch_assoc($result);

if (!$interview) {
    echo "<script>alert('Interview not found.'); window.location.href='employer-interview-list.php';</script>";
    exit();
}

// Handle update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
    $interview_mode = $_POST['interview_mode'];
    $location       = $_POST['location'];
    $status         = $_POST['status'];

    $update_sql = "UPDATE interview_schedules SET 
                    interview_date = '$interview_date',
                    interview_time = '$interview_time',
                    interview_mode = '$interview_mode',
                    location = '$location',
                    status = '$status'
                   WHERE id = '$id' AND employer_id = '$employer_id'";

    if (mysqli_query($con, $update_sql)) {
        echo "<script>alert('Interview updated successfully.'); window.location.href='employer-interview-list.php';</script>";
    } else {
        echo "<script>alert('Failed to update.');</script>";
    }
}
?>

<div class="container py-4">
    <h3>Edit Interview Schedule</h3>
    <form method="post">
        <div class="mb-3">
            <label>Interview Date</label>
            <input type="date" name="interview_date" class="form-control" value="<?php echo $interview['interview_date']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Interview Time</label>
            <input type="time" name="interview_time" class="form-control" value="<?php echo $interview['interview_time']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Mode</label>
            <select name="interview_mode" class="form-control" required>
                <option value="online" <?php if ($interview['interview_mode'] == 'online') echo 'selected'; ?>>Online</option>
                <option value="offline" <?php if ($interview['interview_mode'] == 'offline') echo 'selected'; ?>>Offline</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Location / Link</label>
            <input type="text" name="location" class="form-control" value="<?php echo $interview['location']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="scheduled" <?php if ($interview['status'] == 'scheduled') echo 'selected'; ?>>Scheduled</option>
                <option value="completed" <?php if ($interview['status'] == 'completed') echo 'selected'; ?>>Completed</option>
                <option value="cancelled" <?php if ($interview['status'] == 'cancelled') echo 'selected'; ?>>Cancelled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Interview</button>
        <a href="employer-interview-list.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php include 'footer1.php'; ?>
