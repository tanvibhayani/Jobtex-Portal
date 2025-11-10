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

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact_number'];
    $city = $_POST['city'];

    $profile = $user['profile_image'];
    if ($_FILES['profile_image']['name']) {
        $profile = time() . '_' . $_FILES['profile_image']['name'];
        move_uploaded_file($_FILES['profile_image']['tmp_name'], 'uploads/' . $profile);
    }

    $update = mysqli_query($conn, "UPDATE registration SET 
        name = '$name', 
        contact_number = '$contact',
        city = '$city',
        profile_image = '$profile'
        WHERE id = '$id'");

    if ($update) {
        echo "<script>alert('User updated successfully'); window.location='admin-manage-users.php';</script>";
    } else {
        echo "<script>alert('Update failed');</script>";
    }
}
?>

<div class="main-content p-4">
    <h4 class="mb-4 text-white">Edit User</h4>

    <div class="card bg-dark text-white">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="contact_number" value="<?= htmlspecialchars($user['contact_number']) ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" name="city" value="<?= htmlspecialchars($user['city']) ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profile Image</label><br>
                    <img src="uploads/<?= $user['profile_image'] ?>" width="80" class="mb-2">
                    <input type="file" name="profile_image" class="form-control">
                </div>
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a href="admin-manage-users.php" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
