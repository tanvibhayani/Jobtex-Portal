<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'connection.php';

$admin_id = $_SESSION['admin_id'] ?? 0;
if (!$admin_id) {
    echo "<script>alert('Please login'); window.location='auth_login_dark.php';</script>";
    exit;
}

$job_id = $_GET['job_id'] ?? 0;

// Job and Applications
$job = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM jobs WHERE id='$job_id'"));

$applications = mysqli_query($conn, "
    SELECT ja.*, u.name 
    FROM job_applications ja 
    JOIN registration u ON ja.user_id = u.id 
    WHERE ja.job_id = '$job_id'
");
?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="container pt-4"><br><br>
    <h2 class="text-primary py-5 mt-5">Applications for: <?= htmlspecialchars($job['job_title']) ?></h2>

    <table class="table table-dark table-bordered mb-4">
        <thead>
            <tr>
                <th>User</th>
                <th>Status</th>
                <th>Applied Date</th>
                <th>Resume</th>
                <th>Cover Letter</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($applications)) { ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td>
                    <?php
                        $status = $row['status'];
                        $badge = 'secondary';
                        if ($status == 'Accepted') $badge = 'success';
                        elseif ($status == 'Rejected') $badge = 'danger';
                        elseif ($status == 'Shortlisted') $badge = 'warning';
                    ?>
                    <span class="badge bg-<?= $badge ?>"><?= htmlspecialchars($status) ?></span>
                </td>
                <td><?= htmlspecialchars($row['applied_date']) ?></td>
                <td>
                    <a href="download.php?file=<?= urlencode($row['resume']) ?>" class="btn btn-sm btn-info">Download</a>
                </td>
                <td><?= nl2br(htmlspecialchars($row['cover_letter'])) ?></td>
                <td>
                    <button class="btn btn-warning btn-sm update-status" data-id="<?= $row['id'] ?>" data-status="Shortlisted">Shortlist</button>
                    <button class="btn btn-success btn-sm update-status" data-id="<?= $row['id'] ?>" data-status="Accepted">Accept</button>
                    <button class="btn btn-danger btn-sm update-status" data-id="<?= $row['id'] ?>" data-status="Rejected">Reject</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script>
document.querySelectorAll('.update-status').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.dataset.id;
        const status = this.dataset.status;
        const row = this.closest('tr');

        fetch('admin-update-status.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${id}&status=${status}`
        })
        .then(res => res.text())
        .then(result => {
            if (result === 'success') {
                row.querySelector('td:nth-child(2) .badge').textContent = status;

                if (status === 'Accepted') row.querySelector('td:nth-child(2) .badge').className = 'badge bg-success';
                else if (status === 'Rejected') row.querySelector('td:nth-child(2) .badge').className = 'badge bg-danger';
                else if (status === 'Shortlisted') row.querySelector('td:nth-child(2) .badge').className = 'badge bg-warning';
            } else {
                alert('Status update failed.');
            }
        });
    });
});
</script>

<?php include 'footer.php'; ?>
