
<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['admin_id'])) {
    echo "<script>alert('Please login first.'); window.location='auth_login_dark.php';</script>";
    exit;
}

$admin_id = $_SESSION['admin_id'];
$query = mysqli_query($conn, "SELECT * FROM admins WHERE id = '$admin_id'");
$admin = mysqli_fetch_assoc($query);

// Check if admin record exists
if (!$admin) {
    echo "<script>alert('Admin record not found.'); window.location='auth_login_dark.php';</script>";
    exit;
}

// On form submission
if (isset($_POST['update'])) {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $contact = $_POST['contact_number'] ?? '';

    // Handle profile image upload
    $new_image = $_FILES['profile_image']['name'] ?? '';
    $image_path = $admin['profile_image'];

    if (!empty($new_image)) {
        $target_dir = "../../../../images/";
        $target_file = $target_dir . basename($new_image);
        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_file)) {
            $image_path = $new_image;
        }
    }

    $update_query = "UPDATE admins SET name='$name', email='$email', contact_number='$contact', profile_image='$image_path' WHERE id='$admin_id'";
    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Profile updated successfully'); window.location='admin-profile.php';</script>";
    } else {
        echo "<script>alert('Failed to update profile');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Admin Profile</title>
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
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit Profile</h4>
                    </div>
                    <div class="box-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" value="<?= htmlspecialchars($admin['name'] ?? '') ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" value="<?= htmlspecialchars($admin['email'] ?? '') ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact_number" value="<?= htmlspecialchars($admin['contact_number'] ?? '') ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Profile Image</label><br>
                                        <?php if (!empty($admin['profile_image'])): ?>
                                            <img src="../../../../images/<?= htmlspecialchars($admin['profile_image']) ?>" width="80" height="80" class="mb-2 rounded">
                                        <?php endif; ?>
                                        <input type="file" name="profile_image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
                                        <a href="admin-profile.php" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
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
