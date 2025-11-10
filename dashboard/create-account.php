<?php
session_start();
include 'header.php';
include 'connection.php';
?>
<style>
  body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background-color: #f5f5f5;
}

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

.account-section {
  padding: 40px 0;
  background-color: #fff;
}

.wd-form-login {
  background-color: #ffffff;
  border-radius: 10px;
  padding: 30px;
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  box-shadow: 0 0 15px rgba(0,0,0,0.05);
}

.menu-tab {
  list-style: none;
  padding: 0;
  margin-bottom: 20px;
  margin-left: 50px;
  text-align: center;
}

.menu-tab .ct-tab {
  font-size: 22px;
  font-weight: bold;
  color: #14a077;
}

.content-tab .inner {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.ip {
  display: flex;
  flex-direction: column;
}

.ip label {
  font-weight: 600;
  margin-bottom: 6px;
}

.ip input {
  padding: 10px;
  font-size: 15px;
  border: 1px solid #ccc;
  border-radius: 6px;
  outline-color: #14a077;
}

.group-ant-choice {
  margin: 15px 0;
}

.group-ant-choice input[type="checkbox"] {
  margin-right: 8px;
}

.group-ant-choice a {
  color: #14a077;
  text-decoration: none;
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
              <li><a href="#">Create Account</a></li>
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
        <ul class="menu-tab">
          <li class="ct-tab active">Create a free account</li>
        </ul>

        <div class="content-tab">
          <div class="inner">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="ip">
                <label>Full Name<span>*</span></label>
                <input type="text" name="name" placeholder="Enter Full Name" required>
              </div>
              <div class="ip">
                <label>Email address<span>*</span></label>
                <input type="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="ip">
                <label>Contact Number<span>*</span></label>
                <input type="number" name="number" placeholder="Enter Contact Number" required>
              </div>
              <div class="ip">
                <label>Date of Birth<span>*</span></label>
                <input type="date" name="date" required>
              </div>
              <div class="ip">
                <label>Password<span>*</span></label>
                <input type="password" name="password" placeholder="Enter password" required>
              </div>
              <div class="ip">
                <label>Confirm Password<span>*</span></label>
                <input type="password" name="confirm_password" placeholder="Confirm password" required>
              </div>
              <div class="ip">
                <label>Upload Profile Photo<span>*</span></label>
                <input type="file" name="profile_image" accept="image/*" required>
              </div>
              <div class="group-ant-choice st">
                <div class="sub-ip">
                  <input type="checkbox" required> I agree to the <a href="#">Terms of User</a>
                </div>
              </div>
              <input type="submit" name="Sub" value="Register" style="background-color: #14a077; color:#fff; height:40px; width:100%">
              <div class="sign-up">Already have an account? <a href="login.php">Login Here</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>


<?php
if (isset($_POST['Sub'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $dob = $_POST['date'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $image_name = $_FILES["profile_image"]["name"];

    if ($password != $confirm) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        $target_dir = "images/";
        $target_file = $target_dir . basename($image_name);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);

        if ($check === false) {
            echo "<script>alert('Invalid image file');</script>";
        } else {
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
                $qry = "INSERT INTO registration (name, email, contact_number, dob, password, profile_image) 
                        VALUES ('$name', '$email', '$number', '$dob', '$password', '$image_name')";

                if (mysqli_query($con, $qry)) {
                    // Set session
                    $_SESSION['user_name'] = $name;
                    $_SESSION['user_email'] = $email;
                    $_SESSION['profile_image'] = $image_name;
                    echo "<script>alert('Registered Successfully!'); window.location='home-01.php';</script>";
                } else {
                    echo "<script>alert('Database error: " . mysqli_error($con) . "');</script>";
                }
            } else {
                echo "<script>alert('Error uploading image');</script>";
            }
        }
    }
}
?>

<?php include 'footer.php'; ?>
