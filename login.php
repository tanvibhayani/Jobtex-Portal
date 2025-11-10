<?php
include 'header.php';
include 'connection.php';
if(session_status()===PHP_SESSION_NONE)
{
session_start();
}

?>
<style>
/* Base styling */
body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
}

/* Breadcrumb style */
.bg-f5 {
  background-color: #f5f5f5;
  padding: 20px 0;
}

.page-title .widget-menu-link ul {
  list-style: none;
  display: flex;
  gap: 10px;
  padding: 0;
}

.page-title .widget-menu-link ul li a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.page-title .widget-menu-link ul li::after {
  content: ">";
  margin: 0 10px;
  color: #888;
}

.page-title .widget-menu-link ul li:last-child::after {
  content: "";
}

/* Login form style */
.account-section {
  padding: 40px 0;
  background-color: #fff;
}

.wd-form-login {
  background-color: #ffffff;
  border-radius: 10px;
  padding: 30px;
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
  box-shadow: 0 0 15px rgba(0,0,0,0.05);
  text-align: center;
}

.wd-form-login h3 {
  font-size: 24px;
  font-weight: 600;
  color: #333;
  margin-bottom: 30px;
}

.content-tab .inner {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.ip {
  display: flex;
  flex-direction: column;
  text-align: left;
}

.ip label {
  font-weight: 600;
  margin-bottom: 6px;
  color: #333;
}

.ip input {
  padding: 10px;
  font-size: 15px;
  border: 1px solid #ccc;
  border-radius: 6px;
  outline-color: #14a077;
}

input[type="submit"] {
  cursor: pointer;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #108c64;
}

.sign-up {
  margin-top: 15px;
  text-align: center;
  font-size: 14px;
}

.sign-up a {
  color: #14a077;
  font-weight: 600;
  text-decoration: none;
}

@media (max-width: 768px) {
  .wd-form-login {
    padding: 20px;
  }
}

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

        echo "<script>alert('Welcome, {$row['name']}!'); window.location='home-01.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>

<?php include 'footer.php'; ?>
