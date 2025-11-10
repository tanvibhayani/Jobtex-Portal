<?php
include 'connection.php';
session_start();

if (isset($_POST['register'])) {
    $name     = mysqli_real_escape_string($conn, $_POST['name']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $contact  = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm  = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $role     = 'admin';
    $created  = date("Y-m-d H:i:s");

    if ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        $check = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $error = "Email already exists.";
        } else {
            if (isset($_FILES['profile_image']) && $_FILES['profile_image']['name'] != '') {
                $image_name = time() . '_' . basename($_FILES['profile_image']['name']);
                $tmp_name = $_FILES['profile_image']['tmp_name'];
                move_uploaded_file($tmp_name, "../../../../images/" . $image_name);
            } else {
                $image_name = 'default.png';
            }

            // No hashing, plain password stored
            $insert = mysqli_query($conn, "INSERT INTO admins (name, email, contact_number, password, profile_image, role, created_at) 
                VALUES ('$name', '$email', '$contact', '$password', '$image_name', '$role', '$created')");

            if ($insert) {
                $admin_id = mysqli_insert_id($conn);
                $_SESSION['admin_id'] = $admin_id;
                $_SESSION['admin_name'] = $name;
                $_SESSION['admin_email'] = $email;
                $_SESSION['admin_role'] = $role;
                header("Location: index.php");
                exit;
            } else {
                $error = "Something went wrong.";
            }
        }
    }
}
?>


<!-- HTML Registration Form -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Registration</title>
  <link rel="stylesheet" href="../src/css/vendors_css.css">
  <link rel="stylesheet" href="../src/css/style.css">
  <link rel="stylesheet" href="../src/css/skin_color.css">
</head>
<body class="hold-transition theme-primary bg-img" style="background-image: url(../../../images/auth-bg/bg-16.jpg)">
<div class="container h-p100">
  <div class="row align-items-center justify-content-md-center h-p100">
    <div class="col-12">
      <div class="row justify-content-center g-0">
        <div class="col-lg-5 col-md-5 col-12">
          <div class="bg-white rounded10 shadow-lg">
            <div class="content-top-agile p-20 pb-0">
              <h2 class="text-primary fw-600">Register Admin</h2>
              <p class="mb-0 text-fade">Create a new admin account</p>
            </div>
            <div class="p-40">
              <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-user"></i></span>
                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-email"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-mobile"></i></span>
                    <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-lock"></i></span>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="text-fade">Profile Image</label>
                  <input type="file" name="profile_image" class="form-control">
                </div>
                <div class="form-group text-center mt-3">
                  <button type="submit" name="register" class="btn btn-primary w-p100 mt-10">REGISTER</button>
                </div>
              </form>
              <div class="text-center mt-2">
                <p class="text-fade">Already have an account? <a href="auth_login.php" class="text-primary">Sign In</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../src/js/vendors.min.js"></script>
<script src="../src/js/pages/chat-popup.js"></script>
<script src="../../../assets/icons/feather-icons/feather.min.js"></script>
</body>
</html>
