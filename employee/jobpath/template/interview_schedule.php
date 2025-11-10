<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

$company_id = $_SESSION['employer_id']; // Logged-in company

// Handle schedule creation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['schedule'])) {
    $candidate_id = $_POST['candidate_id'];
    $job_id = $_POST['job_id'];
    $date = $_POST['interview_date'];
    $time = $_POST['interview_time'];
    $duration = $_POST['duration'];
    $mode = $_POST['mode'];
    $notes = $_POST['notes'];
    $con->query("INSERT INTO interview_schedule (company_id, candidate_id, job_id, interview_date, interview_time, duration, mode, notes)
                   VALUES ($company_id, $candidate_id, $job_id, '$date', '$time', '$duration', '$mode', '$notes')");
    header("Location: interview_schedule.php?msg=scheduled");
    exit;
}

// Handle deletion
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $con->query("DELETE FROM interview_schedule WHERE id = $id AND company_id = $company_id");
    header("Location: interview_schedule.php?msg=deleted");
    exit;
}

// Fetch schedules
$result = $con->query("SELECT s.*, c.name AS candidate_name, j.title AS job_title
    FROM interview_schedule s
    JOIN candidates c ON s.candidate_id = c.id
    JOIN jobs j ON s.job_id = j.id
    WHERE s.company_id = $company_id
    ORDER BY s.interview_date ASC, s.interview_time ASC");
?>
<div class="meeting-schedule">
    <h4>Interview Schedule</h4>

    <!-- New Schedule Form -->
    <form method="post" class="schedule-form">
        <select name="candidate_id" required>
            <option value="">Select Candidate</option>
            <?php
            $candidates = $con->query("SELECT id, name FROM candidates WHERE company_id = $company_id");
            while ($c = $candidates->fetch_assoc()) {
                echo "<option value='{$c['id']}'>{$c['name']}</option>";
            }
            ?>
        </select>
        <select name="job_id" required>
            <option value="">Select Job</option>
            <?php
            $jobs = $con->query("SELECT id, title FROM jobs WHERE company_id = $company_id");
            while ($j = $jobs->fetch_assoc()) {
                echo "<option value='{$j['id']}'>{$j['title']}</option>";
            }
            ?>
        </select>
        <input type="date" name="interview_date" required>
        <input type="time" name="interview_time" required>
        <input type="text" name="duration" placeholder="Duration (e.g. 1h 30m)">
        <input type="text" name="mode" placeholder="Mode (e.g. Zoom)">
        <textarea name="notes" placeholder="Notes (optional)"></textarea>
        <button type="submit" name="schedule">Schedule</button>
    </form>

    <!-- Scheduled Interviews Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Candidate</th>
                <th>Job</th>
                <th>Date & Time</th>
                <th>Duration</th>
                <th>Mode</th>
                <th>Notes</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['candidate_name']) ?></td>
                <td><?= htmlspecialchars($row['job_title']) ?></td>
                <td><?= htmlspecialchars($row['interview_date'] . ' ' . $row['interview_time']) ?></td>
                <td><?= htmlspecialchars($row['duration']) ?></td>
                <td><?= htmlspecialchars($row['mode']) ?></td>
                <td><?= htmlspecialchars($row['notes']) ?></td>
                <td><?= htmlspecialchars($row['status']) ?></td>
                <td>
                    <?php if ($row['status'] == 'Scheduled'): ?>
                    <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php include 'footer1.php'; ?>
