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
?>

<!-- Custom page-only CSS -->
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

    .btn-light {
        background-color: #f8f9fa;
        color: #000;
    }
</style>

<!-- Begin layout -->
<div class="custom-layout">
    <!-- Sidebar already included -->

    <!-- Main Content -->
    <div class="custom-main-content">
        <h4 class="mb-4">Employer Details</h4>

        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <img src="../../../images/<?= htmlspecialchars($employer['logo_image']) ?>" class="img-thumbnail" style="max-width: 150px;" />
                    </div>
                    <div class="col-md-9">
                        <p><strong>Company Name:</strong> <?= htmlspecialchars($employer['company_name']) ?></p>
                        <p><strong>Location:</strong> <?= htmlspecialchars($employer['location']) ?></p>
                        <p><strong>Job Openings:</strong> <?= htmlspecialchars($employer['job_openings']) ?></p>
                        <p><strong>Status:</strong> <?= htmlspecialchars($employer['status']) ?></p>
                    </div>
                </div>
                <a href="admin-manage-employers.php" class="btn btn-info btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
