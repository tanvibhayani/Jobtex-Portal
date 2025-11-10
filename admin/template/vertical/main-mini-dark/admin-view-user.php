<?php
include 'connection.php';
include 'header.php';
include 'sidebar.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid User ID'); window.location='admin-manage-users.php';</script>";
    exit;
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM registration WHERE id = '$id'");
$user = mysqli_fetch_assoc($query);

if (!$user) {
    echo "<script>alert('User not found'); window.location='admin-manage-users.php';</script>";
    exit;
}
?>

<!-- Custom CSS -->
<style>
    .user-label {
        font-weight: 600;
        color: #ccc;
    }
    .user-value {
        color: #fff;
    }
    .rounded-img {
        border-radius: 10px;
        border: 2px solid #888;
    }
    .main-content
    {
        margin-left: 60px;
    }
    .text-white
    {
        margin-top: 80px;
    }
</style>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row pt-4 pb-2">
                <div class="col-12">
                    <h4 class="text-white">User Details</h4>
                </div>
            </div>

            <!-- Card -->
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="card bg-dark text-white shadow">
                        <div class="card-body">

                            <!-- Profile Image -->
                            <div class="mb-3 text-center">
                                <img src="../../../../images/<?= htmlspecialchars($user['profile_image']) ?>" width="120" height="120" class="rounded-img">
                            </div>

                            <!-- User Details -->
                            <p><span class="user-label">Name:</span> <span class="user-value"><?= htmlspecialchars($user['name']) ?></span></p>
                            <p><span class="user-label">Email:</span> <span class="user-value"><?= htmlspecialchars($user['email']) ?></span></p>
                            <p><span class="user-label">Phone:</span> <span class="user-value"><?= htmlspecialchars($user['contact_number']) ?></span></p>
                            <p><span class="user-label">DOB:</span> <span class="user-value"><?= htmlspecialchars($user['dob']) ?></span></p>
                            <p><span class="user-label">Location:</span> 
                                <span class="user-value">
                                    <?= htmlspecialchars($user['city']) ?>, 
                                    <?= htmlspecialchars($user['state']) ?>, 
                                    <?= htmlspecialchars($user['country']) ?> - 
                                    <?= htmlspecialchars($user['pincode']) ?>
                                </span>
                            </p>
                            <p><span class="user-label">Role:</span> <span class="user-value"><?= ucfirst($user['role']) ?></span></p>

                            <!-- Back Button -->
                            <a href="admin-manage-users.php" class="btn btn-light mt-3">Back</a>

                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- page-content -->
</div> <!-- main-content -->

<?php include 'footer.php'; ?>
