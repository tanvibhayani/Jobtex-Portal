<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

// Update status if approved/rejected
if (isset($_GET['action']) && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $status = $_GET['action'] == 'approve' ? 'Approved' : 'Rejected';
    mysqli_query($conn, "UPDATE blogs SET status = '$status' WHERE id = $id");
    echo "<script>window.location.href='admin-blog-approval.php';</script>";
}

// Fetch all pending blogs
$result = mysqli_query($conn, "SELECT b.*, e.name AS employer_name FROM blogs b 
    JOIN e_registration e ON b.employer_id = e.id
    ORDER BY b.created_at DESC");
?>

<div class="container mt-5 py-40">
    <h3 class="mb-4">Blog Approval Panel</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Employer</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['employer_name']) ?></td>
                <td><?= $row['status'] ?></td>
                <td>
                    <?php if ($row['image']) { ?>
                        <img src="../../../../images/<?= $row['image'] ?>" width="60">
                    <?php } else { echo '-'; } ?>
                </td>
                <td>
                    <?php if ($row['status'] == 'Pending') { ?>
                        <a href="?action=approve&id=<?= $row['id'] ?>" class="btn btn-success btn-sm me-2">Approve</a>
                        <a href="?action=reject&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Reject</a>
                    <?php } else { echo $row['status']; } ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
