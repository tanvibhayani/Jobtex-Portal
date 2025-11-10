<?php
include 'connection.php'; // Ensure this sets $conn
session_start();

if (isset($_POST['register'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];
    $role     = 'admin';
    $created  = date("Y-m-d H:i:s");

    if ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        $check = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $error = "Email already exists.";
        } else {
            $insert = mysqli_query($conn, "INSERT INTO admins (name, email, contact_number, password, profile_image, role, created_at) 
                VALUES ('$name', '$email', '', '$password', 'default.png', '$role', '$created')");

            if ($insert) {
                $admin_id = mysqli_insert_id($conn);
                $_SESSION['admin_id'] = $admin_id;
                $_SESSION['admin_name'] = $name;
                $_SESSION['admin_email'] = $email;
                $_SESSION['admin_role'] = $role;

                header("Location: index.php");
                exit;
            } else {
                $error = "Something went wrong. Try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EmployX - Registration</title>
  <link rel="stylesheet" href="../src/css/vendors_css.css">
  <link rel="stylesheet" href="../src/css/style.css">
  <link rel="stylesheet" href="../src/css/skin_color.css">
</head>

<body class="hold-transition dark-skin theme-primary bg-img" style="background-image: url(../../../images/auth-bg/bg-16.jpg)" data-overlay="5">

<div class="container h-p100">
  <div class="row align-items-center justify-content-md-center h-p100">
    <div class="col-12">
      <div class="row justify-content-center g-0">
        <div class="col-lg-5 col-md-5 col-12">
          <div class="bg-gray-800 rounded10 shadow-lg">
            <div class="content-top-agile p-20 pb-0">
              <h2 class="text-primary fw-600">Get started with Us</h2>
              <p class="mb-0 text-fade">Register a new membership</p>
            </div>
            <div class="p-40">

              <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

              <form method="POST">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-user"></i></span>
                    <input type="text" name="name" class="form-control ps-15" placeholder="Full Name" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-email"></i></span>
                    <input type="email" name="email" class="form-control ps-15" placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-lock"></i></span>
                    <input type="password" name="password" class="form-control ps-15" placeholder="Password" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="text-fade ti-lock"></i></span>
                    <input type="password" name="confirm_password" class="form-control ps-15" placeholder="Retype Password" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="checkbox">
                      <input type="checkbox" id="basic_checkbox_1" required>
                      <label for="basic_checkbox_1">I agree to the <a href="#" class="text-primary">Terms</a></label>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" name="register" class="btn btn-primary w-p100 mt-10">REGISTER</button>
                  </div>
                </div>
              </form>

              <div class="text-center">
                <p class="mt-15 mb-0 text-fade">Already have an account? <a href="auth_login.php" class="text-primary ms-5">Sign In</a></p>
              </div>

              <div class="text-center">
                <p class="mt-20 text-fade">- Register With -</p>
                <p class="gap-items-2 mb-0">
                  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook-light" href="#"><i class="fa fa-facebook"></i></a>
                  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter-light" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram-light" href="#"><i class="fa fa-instagram"></i></a>
                </p>
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
