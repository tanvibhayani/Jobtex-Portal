<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php';

// Run query
$alerts = mysqli_query($conn, "
    SELECT ja.*, u.name 
    FROM job_alerts ja 
    JOIN registration u ON ja.user_id = u.id 
    ORDER BY ja.created_at DESC
");

// Debug: Show query error
if (!$alerts) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<div class="container mt-5" style="padding-top: 100px;">
    <h3>All Job Alerts</h3>
    <?php if (mysqli_num_rows($alerts) > 0) { ?>
    <table class="table table-bordered mt-3 text-white">
        <thead>
            <tr>
                <th>User</th>
                <th>Title</th>
                <th>Type</th>
                <th>Location/Salary</th>
                <th>Jobs Found</th>
                <th>Frequency</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($alerts)) { ?>
            <tr>
                <td><?= htmlspecialchars($row['name']); ?></td>
                <td><?= htmlspecialchars($row['title']); ?></td>
                <td><?= $row['alert_type']; ?></td>
                <td><?= $row['location_salary']; ?></td>
                <td><?= $row['jobs_found']; ?></td>
                <td><?= $row['frequency']; ?></td>
                <td><?= date('d M Y, h:i A', strtotime($row['created_at'])); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <div class="alert alert-warning mt-3">No alerts found.</div>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>
