<?php
include 'header.php';
include 'connection.php';
include 'sidebar.php';

// Add funfact
if (isset($_POST['add'])) {
    $number = $_POST['number'];
    $label = $_POST['label'];
    $suffix = $_POST['suffix'];
    $status = $_POST['status'];

    mysqli_query($conn, "INSERT INTO funfacts (number, label, suffix, status)
                        VALUES ('$number', '$label', '$suffix', '$status')");
    header("Location: funfacts.php");
    exit();
}

// Update funfact
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $number = $_POST['number'];
    $label = $_POST['label'];
    $suffix = $_POST['suffix'];
    $status = $_POST['status'];

    mysqli_query($conn, "UPDATE funfacts SET 
        number='$number', 
        label='$label', 
        suffix='$suffix', 
        status='$status' 
        WHERE id=$id");
    header("Location: funfacts.php");
    exit();
}

// Delete funfact
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM funfacts WHERE id=$id");
    header("Location: funfacts.php");
    exit();
}

// Get all funfacts
$funfacts = mysqli_query($conn, "SELECT * FROM funfacts");
?>
<style>
    .fun
    {
        margin-top: 100px;
    }
</style>
<div class="fun">
<div class="container mt-5 py-5" >
    <h2 class="mb-4 py-5 mt-5">Manage Funfacts</h2>

    <!-- Add Form -->
    <form method="post" class="row g-3 mb-4">
        <div class="col-md-2">
            <input type="text" name="number" class="form-control" placeholder="Number" required>
        </div>
        <div class="col-md-3">
            <input type="text" name="label" class="form-control" placeholder="Label" required>
        </div>
        <div class="col-md-2">
            <input type="text" name="suffix" class="form-control" placeholder="K / M / +" maxlength="5">
        </div>
        <div class="col-md-2">
            <select name="status" class="form-control">
                <option value="active" selected>Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div class="col-md-3">
            <button type="submit" name="add" class="btn btn-success w-100">Add Funfact</button>
        </div>
    </form>

    <!-- Display Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Number</th>
                <th>Label</th>
                <th>Suffix</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($funfacts)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['number'] ?></td>
                <td><?= $row['label'] ?></td>
                <td><?= $row['suffix'] ?></td>
                <td><?= ucfirst($row['status']) ?></td>
                <td>
                    <!-- Edit Button triggers modal -->
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">Edit</button>
                    <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this funfact?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <form method="post" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Funfact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="mb-3">
                            <label>Number</label>
                            <input type="text" name="number" value="<?= $row['number'] ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Label</label>
                            <input type="text" name="label" value="<?= $row['label'] ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Suffix</label>
                            <input type="text" name="suffix" value="<?= $row['suffix'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="active" <?= $row['status']=='active' ? 'selected' : '' ?>>Active</option>
                                <option value="inactive" <?= $row['status']=='inactive' ? 'selected' : '' ?>>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
              </div>
            </div>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</div>
<?php include 'footer.php'; ?>
