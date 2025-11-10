<?php
session_start();
include 'header1.php';
include 'connection.php';
?>

<style>
/* Your existing CSS remains same – no change made */
</style>

<section class="bg-f5">
  <div class="tf-container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-title">
          <div class="widget-menu-link">
            <ul>
              <li><a href="home-01.php">Home</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="account-section">
  <div class="tf-container">
    <div class="row">
      <div class="wd-form-login tf-tab">
        <h3>Login to your account</h3>
        <br><br>
        <div class="content-tab">
          <div class="inner">
            <form action="" method="post">
              <div class="ip">
                <label>Email address<span>*</span></label>
                <input type="email" name="username" placeholder="Enter your email" required>
              </div>
              <div class="ip">
                <label>Password<span>*</span></label>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <input type="submit" name="login" value="Login" style="background-color: #14a077; color:#fff; height:40px; width:100%">
              <div class="sign-up">Don’t have an account? <a href="create-account.php">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM registration WHERE email='$uname' AND password='$pwd'";
    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION["user_id"] = $row['id'];
        $_SESSION["user_name"] = $row['name'];
        $_SESSION["user_email"] = $row['email'];
        $_SESSION["profile_image"] = $row['profile_image'];
        $_SESSION["role"] = $row['role']; // ✅ ADD THIS LINE

        echo "<script>alert('Welcome, {$row['name']}!'); window.location='home-01.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}

?>

<?php include 'footer.php'; ?>
