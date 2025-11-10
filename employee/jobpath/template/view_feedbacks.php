<?php
session_start();
include 'connection.php';
include 'header.php';

$sql = "SELECT f.*, r.name AS user_name 
        FROM feedback f
        LEFT JOIN registration r ON f.user_id = r.id
        ORDER BY f.created_at DESC";

$result = mysqli_query($con, $sql); // Use correct $con
?>

<div class="container mt-5 mb-5">
    <h3 class="text-center mb-4">📋 All User Feedback</h3>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $count++ ?></td>
                            <td><?= htmlspecialchars($row['user_name'] ?? 'Unknown') ?></td>
                            <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
                            <td><?= date("d M Y, h:i A", strtotime($row['created_at'])) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info text-center">No feedback submitted yet.</div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
