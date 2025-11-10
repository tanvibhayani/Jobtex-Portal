<?php
session_start();
include 'connection.php'; // Ensure this file contains the correct DB connection as $con
?>

<!-- Login Modal -->
<div class="modal similar__modal fade" id="loginModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="max-content similar__form form__padding">
        <div class="d-flex mb-3 align-items-center justify-content-between">
          <h6 class="mb-0">Login To Jobpath</h6>
          <button type="button" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-regular fa-xmark text-primary"></i>
          </button>
        </div>

        <div class="tab__switch flex-wrap flex-sm-nowrap nav-tab mt-30 mb-30">
          <button class="rts__btn nav-link"><i class="rt-briefcase"></i> Employer</button>
        </div>

        <form method="post" class="d-flex flex-column gap-3">
          <div class="form-group">
            <label for="email" class="fw-medium text-dark mb-3">Your Email</label>
            <div class="position-relative">
              <input type="email" name="email" id="email" placeholder="Enter your email" required>
              <i class="fa-light fa-user icon"></i>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="fw-medium text-dark mb-3">Password</label>
            <div class="position-relative">
              <input type="password" name="password" id="password" placeholder="Enter your password" required>
              <i class="fa-light fa-lock icon"></i>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-between align-items-center fw-medium">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">Remember me</label>
            </div>
            <a href="#" class="forgot__password text-para" data-bs-toggle="modal" data-bs-target="#forgotModal">Forgot Password?</a>
          </div>
          <div class="form-group my-3">
            <button class="rts__btn w-100 fill__btn" name="login_btn">Login</button>
          </div>
        </form>

        <div class="d-block has__line text-center"><p>Or</p></div>
        <div class="d-flex gap-4 flex-wrap justify-content-center mt-20 mb-20">
          <div class="is__social google">
            <button><img src="assets/img/icon/google-small.svg" alt="">Continue with Google</button>
          </div>
          <div class="is__social facebook">
            <button><img src="assets/img/icon/facebook-small.svg" alt="">Continue with Facebook</button>
          </div>
        </div>
        <span class="d-block text-center fw-medium">Don't have an account? <a href="#" data-bs-target="#signupModal" data-bs-toggle="modal" class="text-primary">Sign Up</a></span>
      </div>
    </div>
  </div>
</div>

<!-- Signup Modal -->
<div class="modal similar__modal fade" id="signupModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="max-content similar__form form__padding">
        <div class="d-flex mb-3 align-items-center justify-content-between">
          <h6 class="mb-0">Create A Free Account</h6>
          <button type="button" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-regular fa-xmark text-primary"></i>
          </button>
        </div>

        <div class="tab__switch flex-wrap flex-sm-nowrap nav-tab mt-30 mb-30">
          <button class="rts__btn nav-link"><i class="rt-briefcase"></i> Employer</button>
        </div>

        <form method="post" class="d-flex flex-column gap-3">
          <div class="form-group">
            <label for="sname" class="fw-medium text-dark mb-3">Your Name</label>
            <div class="position-relative">
              <input type="text" name="sname" id="sname" placeholder="Candidate" required>
              <i class="fa-light fa-user icon"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="signemail" class="fw-medium text-dark mb-3">Your Email</label>
            <div class="position-relative">
              <input type="email" name="signemail" id="signemail" placeholder="Enter your email" required>
              <i class="fa-sharp fa-light fa-envelope icon"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="spassword" class="fw-medium text-dark mb-3">Password</label>
            <div class="position-relative">
              <input type="password" name="spassword" id="spassword" placeholder="Enter your password" required>
              <i class="fa-light fa-lock icon"></i>
            </div>
          </div>

          <div class="form-group my-3">
            <button class="rts__btn w-100 fill__btn" type="submit" name="signup_btn">Sign Up</button>
          </div>
        </form>

        <div class="d-block has__line text-center"><p>Or</p></div>
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-20 mb-20">
          <div class="is__social google">
            <button><img src="assets/img/icon/google-small.svg" alt="">Continue with Google</button>
          </div>
          <div class="is__social facebook">
            <button><img src="assets/img/icon/facebook-small.svg" alt="">Continue with Facebook</button>
          </div>
        </div>
        <span class="d-block text-center fw-medium">Have an account? <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a></span>
      </div>
    </div>
  </div>
</div>

<!-- Forgot Password Modal -->
<div class="modal similar__modal fade" id="forgotModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="max-content similar__form form__padding">
        <div class="d-flex mb-3 align-items-center justify-content-between">
          <h6 class="mb-0">Forgot Password</h6>
          <button type="button" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-regular fa-xmark text-primary"></i>
          </button>
        </div>

        <form method="post" class="d-flex flex-column gap-3">
          <div class="form-group">
            <label for="fmail" class="fw-medium text-dark mb-3">Your Email</label>
            <div class="position-relative">
              <input type="email" name="femail" id="fmail" placeholder="Enter your email" required>
              <i class="fa-sharp fa-light fa-envelope icon"></i>
            </div>
          </div>

          <div class="form-group my-3">
            <button class="rts__btn w-100 fill__btn" name="forgot_btn">Reset Password</button>
          </div>
        </form>

        <span class="d-block text-center fw-medium">Remember Your Password? <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a></span>
      </div>
    </div>
  </div>
</div>

<?php

// PHP Logic at the bottom for POST actions

// Signup
if (isset($_POST['signup_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['sname']);
    $email = mysqli_real_escape_string($con, $_POST['signemail']);
    $password = mysqli_real_escape_string($con, $_POST['spassword']);

    $check_query = "SELECT * FROM e_registration WHERE email='$email'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Email already registered!');</script>";
    } else {
        $qry = "INSERT INTO e_registration(name, email, password) VALUES('$name','$email','$password')";
        if (mysqli_query($con, $qry)) {
            $_SESSION['employer_id'] = mysqli_insert_id($con);
            $_SESSION['employer_name'] = $name;
            $_SESSION['employer_email'] = $email;
            echo "<script>alert('Registration successful!'); window.location='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Registration error!');</script>";
        }
    }
}

// Login
if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM e_registration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['employer_id'] = $row['id'];
        $_SESSION['employer_name'] = $row['name'];
        $_SESSION['employer_email'] = $row['email'];
        echo "<script>alert('Login successful!'); window.location='index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Invalid email or password!');</script>";
    }
}

// Forgot Password
if (isset($_POST['forgot_btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['femail']);
    $sql = "SELECT * FROM e_registration WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "<script>alert('Reset link sent to $email (simulation)'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Email not found');</script>";
    }
}
?>

