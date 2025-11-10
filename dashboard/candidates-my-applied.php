<?php
session_start();
include 'connection.php';
include 'header1.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first'); window.location.href='login.php';</script>";
    exit;
}

$user_id = $_SESSION['user_id'];
?>

<div class="left-menu">
<?php include 'sidemenu.php'; ?>
<div class="dashboard__content">

<section class="page-title-dashboard">
  <div class="themes-container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="title-dashboard">
          <div class="title-dash flex2">My Applied Jobs</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="flat-dashboard-save flat-dashboard-candidates flat-dashboard-applicants">
  <div class="themes-container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="applicants bg-white p-4 rounded shadow-sm">
          <div class="table-content">
            <div class="wrap-applicants table-responsive">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>Job</th>
                    <th>Status</th>
                    <th class="text-center">Applied Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

<?php
$query = "
  SELECT j.id AS job_id, j.job_title, j.company_name, j.state, j.address, j.qualification, j.image,
         a.status, a.applied_date
  FROM job_applications a
  JOIN jobs j ON a.job_id = j.id
  WHERE a.user_id = $user_id
  ORDER BY a.applied_date DESC
";

$result = mysqli_query($con, $query);

if (!$result) {
    echo "<tr><td colspan='4' class='text-danger'>Error: " . mysqli_error($con) . "</td></tr>";
} elseif (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['job_title'];
        $company = $row['company_name'];
        $location = $row['state'] . ', ' . $row['address'];
        $category = $row['qualification'];
        $logo = $row['image'];
        $status = $row['status'];
        $applied_date = date('F d, Y', strtotime($row['applied_date']));

        // status button class logic
        $status_class = 'style';
        if ($status == 'Seen') $status_class = 'style-2';
        elseif ($status == 'Responded') $status_class = 'color-3';

        echo "
        <tr>
          <td>
            <div class='candidates-wrap flex2'>
              <div class='images'>
                <img src='../images/$logo' alt='$title' style='width:80px; height:60px; object-fit:cover;'>
              </div>
              <div class='content'>
                <h5 class='mb-1'>$title</h5>
                <div class='text-muted small'>$company</div>
                <div class='now-box flex2 mt-1'>
                  <div class='map color-4'>$location</div>
                  <div class='briefcase flex2 color-4'>$category</div>
                </div>
              </div>
            </div>
          </td>
          <td><div class='button-status $status_class'>$status</div></td>
          <td class='text-center'><div class='title-day color-1'>$applied_date</div></td>
          <td>
            <div class='dropdown titles-dropdown'>
              <a class='btn-selector nolink flex'>
                <span class='more-icon'></span>
                <span class='more-icon'></span>
                <span class='more-icon'></span>
              </a>
              <ul>
                <li><a href='../jobs-details.php?id={$row['job_id']}'><span class='icon-eye more-ic'></span> <span>View Job</span></a></li>
              </ul>
            </div>
          </td>
        </tr>
        ";
    }
} else {
    echo "<tr><td colspan='4' class='text-center text-muted'>No applications found.</td></tr>";
}
?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
