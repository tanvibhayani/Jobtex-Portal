<?php
include 'header.php';
include 'connection.php';

// Check login
if (!isset($_SESSION['employer_id'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

$employer_id = $_SESSION['employer_id'];

// Delete blog
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($con, "DELETE FROM blogs WHERE id = $id AND employer_id = $employer_id");
    echo "<script>window.location.href='blog-manage.php';</script>";
    exit();
}

// Fetch blogs
$query = "SELECT * FROM blogs WHERE employer_id = $employer_id ORDER BY created_at DESC";
$result = mysqli_query($con, $query);
?>

<div class="container py-5 mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark"><i class="fas fa-blog me-2 text-primary"></i> Manage Your Blogs</h2>
        <a href="blog-add.php" class="btn btn-success px-4 shadow">
            <i class="fas fa-plus me-2"></i> Add Blog
        </a>
    </div>

    <?php if (!$result): ?>
        <div class="alert alert-danger">Error: <?= mysqli_error($con) ?></div>
    <?php elseif (mysqli_num_rows($result) == 0): ?>
        <div class="alert alert-info shadow-sm p-4 rounded bg-white">
            <h5 class="mb-3">No Blogs Found</h5>
            <p>Click the <strong>"Add Blog"</strong> button above to create your first blog.</p>
        </div>
    <?php else: ?>
        <div class="table-responsive bg-white shadow-sm rounded p-3 border">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td class="text-capitalize"><?= htmlspecialchars($row['title']) ?></td>
                            <td>
                                <?php if (!empty($row['image'])): ?>
                                    <img src="../../../images/<?= $row['image'] ?>" alt="Blog Image" class="rounded" width="80">
                                <?php else: ?>
                                    <span class="text-muted">No Image</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php
        $status = $row['status'] ?? 'Pending';
        if ($status == 'Approved') {
            $badge = 'success';
        } elseif ($status == 'Rejected') {
            $badge = 'danger';
        } else {
            $badge = 'warning';
        }
    ?>
                                <span class="badge bg-<?= $badge ?> px-3 py-1"><?= $status ?></span>
                            </td>
                            <td><?= date('d M Y', strtotime($row['created_at'])) ?></td>
                            <td>
                                <a href="blog-edit.php?id=<?= $row['id'] ?>" class="btn btn-outline-primary btn-sm me-1">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure to delete this blog?')" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-trash-alt me-1"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
