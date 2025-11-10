<?php
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid Employer ID'); window.location='admin-manage-employers.php';</script>";
    exit;
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM employers WHERE id = '$id'");
$employer = mysqli_fetch_assoc($query);

if (!$employer) {
    echo "<script>alert('Employer not found'); window.location='admin-manage-employers.php';</script>";
    exit;
}

if (isset($_POST['update'])) {
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $job_openings = $_POST['job_openings'];
    $status = $_POST['status'];

    // Logo upload check
    if ($_FILES['logo_image']['name'] != '') {
        $logo = time() . '_' . $_FILES['logo_image']['name'];
        move_uploaded_file($_FILES['logo_image']['tmp_name'], 'uploads/' . $logo);
    } else {
        $logo = $employer['logo_image'];
    }

    $update = mysqli_query($conn, "UPDATE employers SET 
        company_name='$company_name', 
        location='$location', 
        job_openings='$job_openings', 
        logo_image='$logo', 
        status='$status' 
        WHERE id='$id'");

    if ($update) {
        echo "<script>alert('Employer updated successfully'); window.location='admin-manage-employers.php';</script>";
    } else {
        echo "<script>alert('Update failed');</script>";
    }
}
?>

<!-- Page-specific layout fix -->
<style>
    .custom-layout {
        display: flex;
        flex-direction: row;
        min-height: 100vh;
        background-color: #1e1e1e;
        color: white;
        margin-left: 40px;
        margin-top: 80px;
    }

    .custom-main-content {
        flex-grow: 1;
        padding: 30px;
        background-color: #1e1e1e;
    }

    .card {
        background-color: #2c2c2c;
        border: none;
    }

    .form-control, .form-select {
        background-color: #333;
        color: #fff;
        border: 1px solid #555;
    }

    .btn-light {
        background-color: #f8f9fa;
        color: #000;
    }
</style>

<!-- Layout wrapper start -->
<div class="custom-layout">

    <!-- Sidebar already included -->

    <!-- Main Content -->
    <div class="custom-main-content">
        <h4 class="mb-4">Edit Employer</h4>

        <div class="card shadow">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" name="company_name" value="<?= htmlspecialchars($employer['company_name']) ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" value="<?= htmlspecialchars($employer['location']) ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Job Openings</label>
                        <input type="number" name="job_openings" value="<?= htmlspecialchars($employer['job_openings']) ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Logo</label><br>
                        <img src="../../../images/<?= htmlspecialchars($employer['logo_image']) ?>" width="100" class="mb-2">
                        <input type="file" name="logo_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="active" <?= $employer['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                            <option value="inactive" <?= $employer['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                    <a href="admin-manage-employers.php" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
