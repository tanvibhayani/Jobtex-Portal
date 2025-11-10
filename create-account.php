<?php
session_start();
include 'header.php';
include 'connection.php';
?>
<style>
/* Basic styling remains same as your form */
body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f5f5f5;
}
.wd-form-login {
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  margin: auto;
  width: 100%;
  max-width: 600px;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
}
.ip { margin-bottom: 15px; }
.ip label { font-weight: bold; margin-bottom: 5px; display: block; }
.ip input, .ip select {
  width: 100%; padding: 10px; border-radius: 5px;
  border: 1px solid #ccc;
}
input[type="submit"] {
  background-color: #14a077; color: white;
  border: none; padding: 10px; width: 100%;
  border-radius: 6px; font-weight: bold; cursor: pointer;
}
</style>

<section class="account-section">
  <div class="tf-container">
    <div class="wd-form-login">
      <h3>Create Your Account</h3>
      <form method="post" enctype="multipart/form-data">
        <div class="ip">
          <label>Full Name*</label>
          <input type="text" name="name" required>
        </div>
        <div class="ip">
          <label>Email*</label>
          <input type="email" name="email" required>
        </div>
        <div class="ip">
          <label>Contact Number*</label>
          <input type="text" name="number" required>
        </div>
        <div class="ip">
          <label>Date of Birth*</label>
          <input type="date" name="dob" required>
        </div>
    
       <div class="ip">
  <label>Country*</label>
  <input list="countryList" name="country" required>
  <datalist id="countryList">
    <option value="India">
    <option value="USA">
    <option value="UK">
    <option value="Canada">
    <option value="Australia">
  </datalist>
</div>
   <div class="ip">
  <label>State*</label>
  <input list="StateList" name="state" required>
  <datalist id="StateList">
    <option value="Gujarat">
    <option value="Maharastra">
    <option value="Kolkata">
    <option value="Utarprades">
    <option value="Asham">
      <option value="Hariyana">
        <option value="Bhihar">
     <option value="Chhatisgadh">
  </datalist>
</div>
<div class="ip">
  <label>City*</label>
  <input list="cityList" name="city" required>
  <datalist id="cityList">
    <option value="Mumbai">
    <option value="Delhi">
    <option value="New York">
    <option value="London">
    <option value="Toronto">
  </datalist>
</div>
<div class="ip">
          <label>Pincode*</label>
          <input type="text" name="pin" required>
        </div>
        <div class="ip">
          <label>Upload Profile Photo*</label>
          <input type="file" name="profile_image" accept="image/*" required>
        </div>
        <div class="ip">
          <input type="checkbox" required> I agree to the <a href="#">Terms</a>
        </div>
        <input type="submit" name="Sub" value="Register">
        <p class="text-center mt-2">Already have an account? <a href="login.php">Login Here</a></p>
      </form>
    </div>
  </div>
</section>

<?php
if (isset($_POST['Sub'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $number   = $_POST['number'];
    $dob      = $_POST['dob'];
    $country  = $_POST['country'];
    $state    =$_POST['state'];
    $city     = $_POST['city'];
    $pin      =$_POST['pin'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];
    $image    = $_FILES["profile_image"]["name"];

    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        $target_dir = "images/";
        $target_file = $target_dir . basename($image);
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);

        if ($check !== false) {
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO registration (name, email, contact_number, dob, country, city, password, profile_image)
                        VALUES ('$name', '$email', '$number', '$dob', '$country', '$city', '$password', '$image')";
                if (mysqli_query($con, $sql)) {
                    $_SESSION['user_name'] = $name;
                    echo "<script>alert('Registered Successfully'); window.location='home-01.php';</script>";
                } else {
                    echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
                }
            } else {
                echo "<script>alert('File upload failed');</script>";
            }
        } else {
            echo "<script>alert('Invalid image');</script>";
        }
    }
}
?>

<?php include 'footer.php'; ?>
