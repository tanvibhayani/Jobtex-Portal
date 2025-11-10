<?php
include 'connection.php';
if(session_status()===PHP_SESSION_NONE)
{
session_start();
}
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email' AND role='admin'");
    $admin = mysqli_fetch_assoc($query);

    if ($admin && $admin['password'] === $password) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['name'];
        $_SESSION['admin_email'] = $admin['email'];
        $_SESSION['admin_image'] = $admin['profile_image'];
        $_SESSION['admin_role'] = $admin['role'];

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login - Dark</title>
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
                <h2 class="text-primary fw-600">Let's Get Started</h2>
                <p class="mb-0 text-fade">Sign in to continue to Admin Panel.</p>
              </div>
              <div class="p-40">
                <form method="POST" action="">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <span class="input-group-text"><i class="text-fade ti-user"></i></span>
                      <input type="text" class="form-control ps-15" name="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <span class="input-group-text"><i class="text-fade ti-lock"></i></span>
                      <input type="password" class="form-control ps-15" name="password" placeholder="Password" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="checkbox">
                        <input type="checkbox" id="basic_checkbox_1">
                        <label for="basic_checkbox_1">Remember Me</label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="fog-pwd text-end">
                        <a href="#" class="text-primary fw-500 hover-primary"><i class="ion ion-locked"></i> Forgot pwd?</a>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <button type="submit" name="login" class="btn btn-primary w-p100 mt-10">SIGN IN</button>
                    </div>
                  </div>
                </form>
                <div class="text-center">
                  <p class="mt-15 mb-0 text-fade">Don't have an account? <a href="#" class="text-primary ms-5">Sign Up</a></p>
                </div>
                <div class="text-center">
                  <p class="mt-20 text-fade">- Sign With -</p>
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
