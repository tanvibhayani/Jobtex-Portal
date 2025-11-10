<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login first.'); window.location='auth_login_dark.php';</script>";
    exit;
}

$admin_id = $_SESSION['admin_id'];
$query = "SELECT * FROM admins WHERE id = '$admin_id'";
$result = mysqli_query($conn, $query);
$admin = mysqli_fetch_assoc($result);

$admin_name = $admin['name'] ?? 'Admin';
$admin_email = $admin['email'] ?? '';
$admin_contact = $admin['contact_number'] ?? '';
$admin_role = $admin['role'] ?? 'admin';
$admin_created = date('d M, Y', strtotime($admin['created_at']));
$admin_image = (!empty($admin['profile_image']))
    ? "../../../../images/{$admin['profile_image']}"
    : "../../../images/avatar/avatar-13.png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile - EmployX</title>
    <link rel="stylesheet" href="../src/css/vendors_css.css">
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/skin_color.css">
</head>
<body class="hold-transition dark-skin sidebar-mini theme-primary fixed sidebar-collapse">
<div class="wrapper">
    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Page Title -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">Admin Profile</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Card -->
            <section class="content">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="box box-primary text-center">
                                    <div class="box-body">
                                        <img src="<?= $admin_image ?>" alt="Admin Image" class="img-fluid rounded-circle mb-3" style="width:150px; height:150px;">
                                        <h4 class="mb-0 text-white"><?= htmlspecialchars($admin_name) ?></h4>
                                        <span class="text-muted"><?= ucfirst($admin_role) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">Personal Information</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>Email:</strong>
                                                <p><?= htmlspecialchars($admin_email) ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <strong>Contact:</strong>
                                                <p><?= htmlspecialchars($admin_contact) ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <strong>Role:</strong>
                                                <p><?= htmlspecialchars($admin_role) ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <strong>Joined On:</strong>
                                                <p><?= $admin_created ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer text-end">
                                        <a href="admin-setting.php" class="btn btn-primary">Edit Profile</a>
                                        <a href="logout.php" class="btn btn-danger">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</div>

<script src="../src/js/vendors.min.js"></script>
<script src="../src/js/template.js"></script>
</body>
</html>
