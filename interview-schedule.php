<?php
session_start();
include 'connection.php';
include 'header.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first'); window.location='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];

// ✅ Query: show company name & job title for interviews scheduled after applying
$query = "SELECT i.*, j.company_name, j.job_title 
          FROM interview_schedule i
          JOIN jobs j ON i.employer_id = j.employer_id
          JOIN job_applications a ON a.user_id = i.candidate_id AND a.job_id = j.id
          WHERE i.candidate_id = '$user_id'
          ORDER BY i.interview_date, i.interview_time";

$result = mysqli_query($con, $query);

if (!$result) {
    echo "<div class='alert alert-danger'>Query Error: " . mysqli_error($con) . "</div>";
    exit;
}
?>

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4 text-primary py-5 mt-2">My Interview Schedules (with Company)</h3>

        <?php if (mysqli_num_rows($result) > 0): ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Company</th>
                            <th>Job Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Mode</th>
                            <th>Location</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['company_name']) ?></td>
                                <td><?= htmlspecialchars($row['job_title']) ?></td>
                                <td><?= date("d M Y", strtotime($row['interview_date'])) ?></td>
                                <td><?= date("h:i A", strtotime($row['interview_time'])) ?></td>
                                <td><?= htmlspecialchars($row['interview_mode']) ?></td>
                                <td><?= htmlspecialchars($row['location']) ?></td>
                                <td><span class="badge bg-info text-dark"><?= htmlspecialchars($row['status']) ?></span></td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-info">No interviews scheduled yet.</div>
        <?php endif ?>
    </div>
</div><br>

<?php include 'footer.php'; ?>
