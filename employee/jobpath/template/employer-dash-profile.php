<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
?>

<form action="" method="POST" enctype="multipart/form-data">
<div class="my__profile__tab radius-16 bg-white">
    <nav>
        <div class="nav nav-tabs">
            <a class="nav-link active" href="#info">Company Details</a>
            <a class="nav-link" href="#address">Contact Information</a>                         
        </div>
    </nav>

    <!-- Company Details -->
    <div class="my__details" id="info">
        <div class="info__top">
            <div class="author__image">
                <img class="p-4" src="" alt="">
            </div>
            <div class="select__image">
                <label for="file" class="file-upload__label">Upload New Photo</label>
                <input type="file" name="profile_image" class="file-upload__input" id="file" required>
            </div>
            <!-- <div class="delete__data">
                <i class="fa-light fa-trash-can"></i>
            </div> -->
        </div>

        <div class="info__field">
            <div class="row row-cols-sm-2 row-cols-1 g-3">
                <div class="rt-input-group">
                    <label for="name">Employer name</label>
                    <input type="text" name="name" id="name" placeholder="Full Name" required>
                </div>
                <div class="rt-input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="jobpath@gmail.com" required>
                </div>
            </div>

            <div class="row row-cols-sm-2 row-cols-1 g-3">
                <div class="rt-input-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="+880171234567" required>
                </div>
                <div class="rt-input-group">
                    <label for="url">Website</label>
                    <input type="url" name="url" id="url" placeholder="jobpath.com" required>
                </div>
            </div>

            <div class="row row-cols-sm-2 row-cols-1 g-3">
                <div class="rt-input-group">
                    <label for="fd">Founded Date</label>
                    <input type="text" name="fd" placeholder="DD/MM/YY" id="fd" required>
                </div>
                <div class="rt-input-group">
                    <label for="cs">Company Size</label>
                    <select name="cs" id="cs" class="form-select">
                        <option value="10-20">10-20</option>
                        <option value="20-30">20-30</option>
                        <option value="30-40">30-40</option>
                        <option value="40-50">40-50</option>
                        <option value="50-60">50-60</option>
                    </select>
                </div>
            </div>

            <div class="row row-cols-sm-2 row-cols-1 g-3">
                <div class="rt-input-group">
                    <label for="cc">Company categories</label>
                    <select name="cc" id="cc" class="form-select">
                        <option value="Design & Development">Design & Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Writing & Translation">Writing & Translation</option>
                        <option value="Music & Audio">Music & Audio</option>
                        <option value="Video & Animation">Video & Animation</option>
                    </select>
                </div>
                <div class="rt-input-group">
                    <label for="pv">Public For Profile View</label>
                    <select name="pv" id="pv" class="form-select">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="rt-input-group">
                    <label for="pu">Profile Url</label>
                    <span class="url">https://jobpath.com/wp-demo/jobpath/employer/employer/  <a href="#">Edit</a> </span>
                    <div class="position-relative ">
                        <input type="url" name="pu" id="pu" placeholder="Employer" required>
                        <button type="submit" class="rts__btn">Save</button>
                    </div>
                </div>
            </div>

            <div class="rt-input-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="5" placeholder="Company description here..."></textarea>
            </div>
        </div>
    </div>

    <!-- Address Area -->
    <h6 class="fw-medium mt-4 mb-4">Address / Location</h6>
    <div class="social__links radius-16 p-30 bg-white" id="address">
        <div class="info__field">
            <div class="row row-cols-md-2 row-cols-1">
                <div class="info__field">
                    <div class="rt-input-group">
                        <label for="Country">Country</label>
                        <select name="Country" id="Country" class="form-select">
                            <option value="India">India</option>
                            <option value="USA">USA</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Srilanka">Srilanka</option>
                            <option value="China">China</option>
                        </select>
                    </div>
                    <div class="rt-input-group">
                        <label for="State">State</label>
                        <select name="State" id="State" class="form-select">
                            <option value="Gujarat">Gujarat</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Delhi">Delhi</option>
                        </select>
                    </div>
                    <div class="rt-input-group">
                        <label for="pr">Present Address</label>
                        <input type="text" name="pr" id="pr" placeholder="2715 Ash Dr. San Jose, USA" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="ps">Postal Code</label>
                        <input type="text" name="ps" id="ps" placeholder="8340" required>
                    </div>
                    <div class="rt-input-group">
                        <label for="lt">Latitude</label>
                        <input type="text" name="lt" id="lt" placeholder="0.000000" required>
                    </div>
                </div>
                <div>
                    <div class="info__field">
                        <h6 class="font-20 fw-medium mb-2 mt-4 mt-md-0">My location</h6>
                        <div class="gmap">
                            <div class="user__location">
                                <iframe src="https://maps.google.com/maps?q=reacthemes&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="rt-input-group">
                            <label for="longitude">Longitude</label>
                            <input type="text" name="longitude" id="longitude" placeholder="00.000000" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mt-4">
                <button type="submit" class="rts__btn fill__btn">Save Profile</button>
            </div>
        </div>
    </div>
</div>
</form>

<?php
include 'footer1.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $profile_image = '';
    if (!empty($_FILES['profile_image']['name'])) {
        $target_dir = "../images/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $profile_image = $target_dir . basename($_FILES["profile_image"]["name"]);
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], $profile_image);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['url'];
    $founded_date = $_POST['fd'];
    $company_size = $_POST['cs'];
    $company_category = $_POST['cc'];
    $profile_view = $_POST['pv'];
    $profile_url = $_POST['pu'];
    $description = $_POST['description'];
    $country = $_POST['Country'];
    $state = $_POST['State'];
    $address = $_POST['pr'];
    $postal_code = $_POST['ps'];
    $latitude = $_POST['lt'];
    $longitude = $_POST['longitude'];

    $sql = "INSERT INTO employee_profile (
        name, email, phone, website, founded_date, company_size, company_category, profile_view,
        profile_url, description, country, state, address, postal_code, latitude, longitude, profile_image
    ) VALUES (
        '$name', '$email', '$phone', '$website', '$founded_date', '$company_size', '$company_category', '$profile_view',
        '$profile_url', '$description', '$country', '$state', '$address', '$postal_code', '$latitude', '$longitude', '$profile_image'
    )";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Profile saved successfully'); window.location.href='employer-dashboard.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
