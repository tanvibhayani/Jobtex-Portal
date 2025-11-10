<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_SESSION['employer_id'])) {
    echo "<script>alert('Please login as employer'); window.location='employer-login.php';</script>";
    exit;
}

$employer_id = $_SESSION['employer_id'];

$query = "SELECT i.*, u.name AS candidate_name 
          FROM interview_schedule i 
          JOIN registration u ON i.candidate_id = u.id 
          WHERE i.employer_id = '$employer_id' 
          ORDER BY i.interview_date DESC";

$result = mysqli_query($con, $query);
?>

<div class="container mt-5 mb-5">
    <div class="card p-4 shadow-sm border-0 rounded-4 bg-white">
        <h3 class="text-dark mb-4">Scheduled Interviews</h3>
        
        <?php if (mysqli_num_rows($result) > 0) { ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Candidate</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Mode</th>
                        <th>Location / Link</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= htmlspecialchars($row['candidate_name']); ?></td>
                        <td><?= date('d M Y', strtotime($row['interview_date'])); ?></td>
                        <td><?= date('h:i A', strtotime($row['interview_time'])); ?></td>
                        <td><?= htmlspecialchars($row['interview_mode']); ?></td>
                        <td><?= htmlspecialchars($row['location']); ?></td>
                        <td>
                            <span class="badge bg-<?=
                                $row['status'] == 'Scheduled' ? 'primary' :
                                ($row['status'] == 'Completed' ? 'success' :
                                ($row['status'] == 'Cancelled' ? 'danger' : 'warning'));
                            ?>">
                                <?= $row['status']; ?>
                            </span>
                        </td>
                        <td><?= date('d M Y, h:i A', strtotime($row['created_at'])); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
            <div class="alert alert-info">No interviews scheduled yet.</div>
        <?php } ?>
    </div>
</div>

<?php include 'footer1.php'; ?>
