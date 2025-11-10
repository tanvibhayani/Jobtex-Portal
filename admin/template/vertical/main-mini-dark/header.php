<?php
session_start();
include 'connection.php'; // adjust path if needed

// Admin session check
$admin_id = $_SESSION['admin_id'] ?? 0;
if (!$admin_id) {
    echo "<script>alert('Please login as admin'); window.location='auth_login_dark.php';</script>";
    exit;
}

// Get admin details
$admin = mysqli_fetch_assoc(mysqli_query($conn, "SELECT name, profile_image FROM admins WHERE id = '$admin_id'"));
$admin_name = $admin['name'] ?? 'Admin';
$admin_image = (!empty($admin['profile_image'])) 
    ? '../../../../images/' . $admin['profile_image'] 
    : '../../../images/avatar/avatar-13.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://employx-admin-templates.multipurposethemes.com/html/images/favicon.ico">

  <title>EmployX - Job Portal Dashboard</title>

  <!-- Vendors Style -->
  <link rel="stylesheet" href="../src/css/vendors_css.css">
  <!-- Custom Style -->
  <link rel="stylesheet" href="../src/css/style.css">
  <link rel="stylesheet" href="../src/css/skin_color.css">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed sidebar-collapse">

<div class="wrapper">
  <div id="loader"></div>

  <header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <div class="logo-mini w-40">
          <span class="light-logo"><img src="../../../images/logo-letter.png" alt="logo"></span>
          <span class="dark-logo"><img src="../../../images/logo-letter-white.png" alt="logo"></span>
        </div>
        <div class="logo-lg">
          <span class="light-logo"><img src="../../../images/logo-light-text.png" alt="logo"></span>
          <span class="dark-logo"><img src="../../../images/logo-light-text.png" alt="logo"></span>
        </div>
      </a>  
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <div class="app-menu">
        <ul class="header-megamenu nav">
          <li class="btn-group nav-item">
            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
              <i data-feather="menu"></i>
            </a>
          </li>
          <li class="btn-group d-lg-inline-flex d-none">
            <div class="search-bx mx-5">
              <form>
                <div class="input-group">
                  <input type="search" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn" type="submit"><i class="icon-Search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </li>
        </ul>
      </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
          <!-- Theme toggle -->
          <li class="btn-group d-md-inline-flex d-none">
            <label class="switch">
              <span class="waves-effect skin-toggle waves-light">
                <input type="checkbox" data-mainsidebarskin="toggle">
                <span class="switch-on"><i data-feather="moon"></i></span>
                <span class="switch-off"><i data-feather="sun"></i></span>
              </span> 
            </label>
          </li>

         <!-- Notifications -->
<li class="dropdown notifications-menu btn-group">
  <a href="#" class="waves-effect waves-light btn-primary-light svg-bt-icon" data-bs-toggle="dropdown">
    <i data-feather="bell"></i>
    <div class="pulse-wave"></div>
  </a>
  <ul class="dropdown-menu animated bounceIn">
<?php
$notifications = [];

// 1. New User Registrations
$user_q = mysqli_query($conn, "SELECT name, created_at FROM registration ORDER BY created_at DESC LIMIT 5");
if ($user_q) {
    while ($user = mysqli_fetch_assoc($user_q)) {
        $notifications[] = [
            'icon' => 'fa fa-user text-primary',
            'type' => 'User Registered',
            'message' => htmlspecialchars($user['name']) . ' registered as a user.',
            'time' => $user['created_at']
        ];
    }
} else {
    echo '<li>Error in User Query: ' . mysqli_error($conn) . '</li>';
}

// 2. New Employer Registrations
$emp_q = mysqli_query($conn, "SELECT name, created_at FROM e_registration ORDER BY created_at DESC LIMIT 5");
if ($emp_q) {
    while ($emp = mysqli_fetch_assoc($emp_q)) {
        $notifications[] = [
            'icon' => 'fa fa-briefcase text-success',
            'type' => 'Employer Registered',
            'message' => htmlspecialchars($emp['name']) . ' registered as an employer.',
            'time' => $emp['created_at']
        ];
    }
} else {
    echo '<li>Error in Employer Query: ' . mysqli_error($conn) . '</li>';
}

// 3. New Job Applications (e.g., tanvi bhayani applied for web developer)
$app_q = mysqli_query($conn, "SELECT r.name AS user_name, j.job_title, ja.applied_date 
    FROM job_applications ja
    JOIN registration r ON ja.user_id = r.id
    JOIN jobs j ON ja.job_id = j.id
    ORDER BY ja.applied_date DESC LIMIT 5");

if ($app_q) {
    while ($app = mysqli_fetch_assoc($app_q)) {
        $notifications[] = [
            'icon' => 'fa fa-file-alt text-warning',
            'type' => 'Job Application',
            'message' => htmlspecialchars($app['user_name']) . ' applied for ' . htmlspecialchars($app['job_title']),
            'time' => $app['applied_date']
        ];
    }
} else {
    echo '<li>Error in Application Query: ' . mysqli_error($conn) . '</li>';
}

// Sort by latest date
usort($notifications, function($a, $b) {
    return strtotime($b['time']) - strtotime($a['time']);
});

// Show top 5
$notifications = array_slice($notifications, 0, 5);

// Display in HTML
if (!empty($notifications)) {
    foreach ($notifications as $noti) {
        echo '<li>
                <a href="#">
                    <i class="' . $noti['icon'] . '"></i> ' . $noti['message'] . '
                    <br><small style="color:gray;">' . date('d M Y, h:i A', strtotime($noti['time'])) . '</small>
                </a>
              </li>';
    }
} else {
    echo '<li><a href="#"><i class="fa fa-info text-muted"></i> No new activity</a></li>';
}
?>
<li class="footer"><a href="admin-all-notifications.php">View all</a></li>  </ul>
</li>

          <!-- Fullscreen -->
          <li class="btn-group d-xl-inline-flex d-none">
            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon">
              <i data-feather="maximize"></i>
            </a>
          </li>

          <!-- User Account -->
          <!-- Admin User Dropdown -->
<li class="dropdown user user-menu">
  <a href="#" class="waves-effect waves-light dropdown-toggle w-auto bg-transparent p-0 no-shadow" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="<?= $admin_image ?>" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="<?= htmlspecialchars($admin_name) ?>" />
  </a>
  <ul class="dropdown-menu dropdown-menu-end animated flipInX">
    <li class="user-body p-3">
      <div class="d-flex align-items-center">
        <img src="<?= $admin_image ?>" class="avatar rounded-circle me-3 bg-primary-light h-50 w-50" alt="<?= htmlspecialchars($admin_name) ?>">
        <div>
          <h6 class="mb-0 text-white"><?= htmlspecialchars($admin_name) ?></h6>
          <small class="text-muted">Administrator</small>
        </div>
      </div>
      <hr class="my-2 bg-secondary">
      <a class="dropdown-item text-white" href="admin-profile.php"><i class="mdi mdi-account me-2"></i> My Profile</a>
      <!-- <a class="dropdown-item text-white" href="admin-setting.php"><i class="mdi mdi-cog-outline me-2"></i> Settings</a> -->
      <div class="dropdown-divider bg-secondary"></div>
      <a class="dropdown-item text-danger" href="logout.php"><i class="mdi mdi-logout me-2"></i> Logout</a>
    </li>
  </ul>
</li>

        </ul>
      </div>
    </nav>
  </header>
