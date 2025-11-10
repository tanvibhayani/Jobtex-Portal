<?php
session_start();
include 'connection.php';
include 'header.php';
include 'sidebar.php'; // Use your admin theme's header

// Check if admin is logged in (optional security)
if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Access denied. Please login as admin.'); location.href='login.php';</script>";
    exit;
}

// Fetch feedbacks with user names
$sql = "SELECT f.*, r.name AS user_name 
        FROM feedback f
        LEFT JOIN registration r ON f.user_id = r.id
        ORDER BY f.created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<div class="container-fluid mt-5 mb-5 px-4">
    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">📋 All User Feedback</h4>
        </div>
        <div class="card-body">

            <?php if (mysqli_num_rows($result) > 0): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
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
                                    <td><?= htmlspecialchars($row['user_name']) ?></td>
                                    <td class="text-start"><?= nl2br(htmlspecialchars($row['message'])) ?></td>
                                    <td><?= date("d M Y, h:i A", strtotime($row['created_at'])) ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-info text-center">No feedback found.</div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
