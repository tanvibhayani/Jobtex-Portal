<?php
  include 'header1.php';
?>
<div class="left-menu">
<?php
  include 'sidemenu.php';
?>

<div class="dashboard__content">
  <section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="title-dashboard">
            <div class="title-dash flex2">Profile Setting</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flat-dashboard-setting flat-dashboard-setting2">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <form method="POST">
            <div class="profile-setting bg-white">
              <div class="author-profile flex2 border-bt">
                <div class="wrap-img flex2">
                  <div class="img-box relative">
                    <img class="avatar" id="profileimg" src="../images/dashboard/image-up.jpg" alt="">
                  </div>
                  <div id="upload-profile">
                    <h5 class="fw-6">Upload a new avatar:</h5>
                    <h6>JPG 80x80px</h6>
                    <input class="up-file" id="tf-upload-img" type="file" name="profile">
                  </div>
                </div>

                <div class="tt-button button-style">
                <input type="submit" value="Save  Profile" class="btn-3" style="margin-top: 15px; background-color:#14a077; color:#fff; border:none; padding:10px 30px; border-radius:5px; cursor:pointer; text-transform: none;">
                </div>
              </div>

              <div class="form-infor-profile">
                <h3 class="title-info">Information</h3>
                <div class="form-infor flex flat-form">
                  <div class="info-box info-wd">
                  <fieldset>
                    <label class="title-user fw-7">Full Name</label>
                    <input type="text" name="full_name" class="input-form" placeholder="Enter your full name" required>
                  </fieldset>

                  <fieldset>
                    <label class="title-user fw-7">Phone Number</label>
                    <input type="tel" name="phone" class="input-form" placeholder="Enter phone number" required>
                  </fieldset>
                    <fieldset>
                    <label class="title-user fw-7">Gender</label>
                    <b><div style="display: flex; gap: 20px; margin-top: 10px;">
                      <label><input type="radio" name="gender" value="Male" required> Male</label>
                      <label><input type="radio" name="gender" value="Female"> Female</label>
                      <label><input type="radio" name="gender" value="Other"> Other</label></b>
                    </div>
                  </fieldset>
                  <fieldset>
                    <label class="title-user fw-7">Offered Salary ($)</label>
                    <input type="text" name="salary" class="input-form" placeholder="e.g. 1000" required>
                  </fieldset>

                  <fieldset>
                    <label class="title-user fw-7">Experience time</label>
                    <input type="text" name="experience" class="input-form" placeholder="e.g. 2 years" required>
                  </fieldset>

                  <fieldset>
                    <label class="title-user fw-7">Location</label>
                    <input type="text" name="location" class="input-form" placeholder="Enter location" required>
                  </fieldset>

                  <fieldset>
                    <label class="title-user fw-7">Job Title</label>
                    <input type="text" name="job_title" class="input-form" placeholder="e.g. Web Developer" required>
                  </fieldset>
                  </div>

                  <div class="info-box info-wd">
                    <fieldset>
                  <label class="title-user fw-7">Date Of Birth</label>
                  <input type="date" name="dob" class="input-form" required>
                </fieldset>

                <fieldset>
                  <label class="title-user fw-7">Email</label>
                  <input type="email" name="email" class="input-form" placeholder="Enter your email" required>
                </fieldset>

                <fieldset>
                  <label class="title-user fw-7">Age</label>
                  <input type="text" name="age" class="input-form" placeholder="Enter your age" required>
                </fieldset>

                <fieldset>
                  <label class="title-user fw-7">Salary Type</label>
                  <input type="text" name="salary_type" class="input-form" placeholder="e.g. Monthly/Yearly" required>
                </fieldset>

                <fieldset>
                  <label class="title-user fw-7">Qualification</label>
                  <input type="text" name="qualification" class="input-form" placeholder="e.g. BCA, MCA" required>
                </fieldset>

                <fieldset>
                  <label class="title-user fw-7">Language</label>
                  <input type="text" name="language" class="input-form" placeholder="e.g. English, Hindi" required>
                </fieldset>

                <fieldset>
                  <label class="title-user fw-7">Categories</label>
                  <input type="text" name="categories" class="input-form" placeholder="e.g. IT, Finance" required>
                </fieldset>
                  </div>
                </div>

                <div class="show-wrap">
                  <h5 class="fw-7">Show my profile</h5>
                  <div class="show-box flex">
                    <div class="show-inner flex2">
                      <input type="radio" id="r1" name="show_profile" value="Show" />
                      <label for="r1"><span></span>Show</label>
                    </div>
                    <div class="show-inner flex2">
                      <input type="radio" id="r2" name="show_profile" value="Hidden" />
                      <label for="r2"><span></span>Hidden</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>

<?php
    include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $experience = $_POST['experience'];
    $location = $_POST['location'];
    $job_title = $_POST['job_title'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $salary_type = $_POST['salary_type'];
    $qualification = $_POST['qualification'];
    $language = $_POST['language'];
    $categories = $_POST['categories'];
    $show_profile = $_POST['show_profile'];

    $sql = "INSERT INTO profile_data (full_name, phone, gender, salary, experience, location, job_title, dob, email, age_range, salary_type, qualification, language, categories, show_profile) 
            VALUES ('$full_name', '$phone', '$gender', '$salary', '$experience', '$location', '$job_title', '$dob', '$email', '$age', '$salary_type', '$qualification', '$language', '$categories', '$show_profile')";
if (isset($_FILES['profile']) && $_FILES['profile']['error'] == 0) {
  $image_name = time() . "_" . $_FILES['profile']['name'];
  $image_tmp = $_FILES['profile']['tmp_name'];
  move_uploaded_file($image_tmp, "../images/" . $image_name);
}
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Profile Saved Successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }
}
?>
