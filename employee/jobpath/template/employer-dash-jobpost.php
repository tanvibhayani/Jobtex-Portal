<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Image Upload
    $image_name = $_FILES['profile_image']['name'];
    $image_tmp = $_FILES['profile_image']['tmp_name'];
    $upload_dir = '../images/';
    $image_path = $upload_dir . basename($image_name);
    move_uploaded_file($image_tmp, $image_path);

    // Form Data
    $company_name = $_POST['cname'];
    $job_title = $_POST['jt'];
    $job_description = $_POST['jd'];
    $working_schedule = $_POST['ws'];
    $working_day = $_POST['wd'];
    $salary_type = $_POST['salary'];
    $payment_type = $_POST['hp'];
    $salary_min = $_POST['salarymin'];
    $salary_max = $_POST['sm'];
    $experience = $_POST['experience'];
    $qualification = $_POST['qf'];
    $deadline = $_POST['ad'];
    $video_url = $_POST['vurl'];
    $country = $_POST['Country'];
    $state = $_POST['State'];
    $address = $_POST['pr'];
    $postal_code = $_POST['ps'];
    $latitude = $_POST['lt'];
    $longitude = $_POST['longitude'];

    // Insert Query
    $sql = "INSERT INTO company_details 
    (company_name, job_title, job_description, working_schedule, working_day, salary_type, payment_type, salary_min, salary_max, experience, qualification, deadline, video_url, country, state, address, postal_code, latitude, longitude, profile_image)
    VALUES 
    ('$company_name', '$job_title', '$job_description', '$working_schedule', '$working_day', '$salary_type', '$payment_type', '$salary_min', '$salary_max', '$experience', '$qualification', '$deadline', '$video_url', '$country', '$state', '$address', '$postal_code', '$latitude', '$longitude', '$image_path')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Job Posted Successfully!'); window.location.href='employer-dashboard.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="my__profile__tab radius-16 bg-white">
        <nav>
            <div class="nav nav-tabs">
                <a class="nav-link active" href="#info">Company Details</a>
                <a class="nav-link" href="#address">Contact Information</a>                         
            </div>
        </nav>
        <div class="my__details" id="info">
            <div class="info__top">
                <div class="author__image">
                    <img class="p-4" src="assets/img/icon/google.svg" alt="">
                </div>
                <div class="select__image">
                    <label for="file" class="file-upload__label">Upload New Photo</label>
                    <input type="file" name="profile_image" class="file-upload__input" id="file" required>
                </div>
            </div>
            <div class="info__field">
                <div class="row row-cols-sm-2 row-cols-1 g-3">
                    <div class="rt-input-group">
                        <label for="cname">Company Name</label>
                        <input type="text" name="cname" id="cname" placeholder="Company Name" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="jt">Job Title</label>
                        <input type="text" name="jt" id="jt" placeholder="Software Engineer" required>
                    </div>
                </div>
                <div class="row row-cols-1">
                    <div class="rt-input-group">
                        <label for="jd">Job Description</label>
                        <textarea name="jd" id="jd" placeholder="Enter Job Description" required></textarea>
                    </div>
                </div>
                <div class="row row-cols-sm-2 row-cols-1 g-3">
                    <div class="rt-input-group">
                        <label for="ws">Working Schedule</label>
                        <select name="ws" id="ws" class="form-select">
                            <option value="Day Shift">Day Shift</option>
                            <option value="Night Shift">Night Shift</option>
                        </select>
                    </div>
                    <div class="rt-input-group">
                        <label for="wd">Working Day</label>
                        <select name="wd" id="wd" class="form-select">
                            <option value="Sat - Thus">Sat - Thus</option>
                            <option value="Mon - Fri">Mon - Fri</option>
                            <option value="Mon - Sun">Mon - Sun</option>
                        </select>
                    </div>
                </div>
                <div class="row row-cols-sm-2 row-cols-1 g-3">
                    <div class="rt-input-group">
                        <label for="salary">Salary</label>
                        <select name="salary" id="salary" class="form-select">
                            <option value="Hourly">Hourly</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Custom">Custom</option>
                        </select>
                    </div>
                    <div class="rt-input-group">
                        <label for="hp">How You Want To Pay?</label>
                        <select name="hp" id="hp" class="form-select">
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                        </select>
                    </div>
                </div>
                <div class="row row-cols-sm-2 row-cols-1 g-3">
                    <div class="rt-input-group">
                        <label for="salarymin">Salary Min</label>
                        <select name="salarymin" id="salarymin" class="form-select">
                            <option value="1000 - 1500">1000 - 1500</option>
                            <option value="2000 - 2500">2000 - 2500</option>
                            <option value="3000 - 3500">3000 - 3500</option>
                        </select>
                    </div>
                    <div class="rt-input-group">
                        <label for="sm">Salary Max</label>
                        <select name="sm" id="sm" class="form-select">
                            <option value="1000 - 1500">1000 - 1500</option>
                            <option value="2000 - 2500">2000 - 2500</option>
                            <option value="3000 - 3500">3000 - 3500</option>
                        </select>
                    </div>
                </div>
                <div class="row row-cols-sm-2 row-cols-1 g-3">
                    <div class="rt-input-group">
                        <label for="experience">Experience</label>
                        <input type="text" name="experience" id="experience" placeholder="Enter Experience" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="qf">Qualification</label>
                        <input type="text" name="qf" id="qf" placeholder="Enter Qualification" required>
                    </div>
                </div>
                <div class="row row-cols-sm-2 row-cols-1 g-3">
                    <div class="rt-input-group">
                        <label for="ad">Application Deadline Date</label>
                        <input type="text" name="ad" id="ad" placeholder="DD/MM/YY" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="vurl">Introduction Video URL</label>
                        <input type="text" name="vurl" id="vurl" placeholder="Link Here" required>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- address area -->
    <h6 class="fw-medium mt-30 mb-20">Address / Location</h6>
    <div class="social__links radius-16 p-30 bg-white" id="address">
        <div class="info__field">
            <div class="row row-cols-sm-2 row-cols-1 g-3">
                <div class="info__field">
                    <div class="rt-input-group">
                        <label for="Country">Country</label>
                        <select name="Country" id="Country" class="form-select">
                            <option value="India">India</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Srilanka">Srilanka</option>
                            <option value="China">China</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="rt-input-group">
                        <label for="State">State</label>
                        <input type="text" name="State" id="State" placeholder="Enter State" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="pr">Present Address</label>
                        <input type="text" name="pr" id="pr" placeholder="2715 Ash Dr. San Jose,USA" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="ps">Postal Code</label>
                        <input type="text" name="ps" id="ps" placeholder="8340" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="lt">latitude</label>
                        <input type="text" name="lt" id="lt" placeholder="0.000000" required>
                    </div>
                </div>
                <div>
                    <h6 class="font-20 fw-medium mb-20">My location</h6>
                    <div class="gmap">
                        <div class="user__location">
                            <iframe src="https://maps.google.com/maps?q=reacthemes&t=&z=14&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <div class="rt-input-group mt-30">
                        <label for="longitude">longitude</label>
                        <input type="text" name="longitude" id="longitude" placeholder="0.00.000.0000" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="rts__btn fill__btn mt-4">Post Job</button>
        </div>
    </div>
</form>

<?php include 'footer1.php'; ?>
