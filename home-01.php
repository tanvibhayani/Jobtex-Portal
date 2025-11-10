
<?php
if(session_status()===PHP_SESSION_NONE)
{
session_start(); // make sure session is started
}
include 'connection.php'; // include DB connection

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Fetch user info from registration table
    $query = "SELECT profile_image FROM registration WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['profile_image'] = $user['profile_image']; // store image in session
    }
}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/jobtex/home-01.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 May 2025 13:27:08 GMT -->
<head>
  <!-- Basic Page Needs -->
  <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->

  <title>Jobtex Portal</title>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Font -->
  <link rel="stylesheet" href="fonts/fonts.css" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="stylesheets/bootstrap.min.css" />
  <link rel="stylesheet" href="stylesheets/boostrap-select.min.css" />
  
  <!-- swiper slider -->
  <link rel="stylesheet" href="stylesheets/swiper-bundle.min.css" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Theme Style -->
  <link rel="stylesheet" type="text/css" href="stylesheets/shortcodes.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
  
  <!-- Favicon and Touch Icons  -->
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css" />

</head>
<style>
  .job-like span.icon-heart {
  color: #ccc;
  transition: color 0.3s ease;
}
.job-like span.icon-heart.liked {
  color: red;
}

  </style>
<body class="tf-popup-auto">

  <a id="scroll-top" ></a>

  <!-- preloade -->
  <div class="preload preload-container">
    <div class="preload-logo">
      <div class="spinner"></div>
    </div>
  </div>
  <!-- /preload -->

  <div class="menu-mobile-popup">
    <div class="modal-menu__backdrop"></div>
    <div class="widget-filter">


      <div class="mobile-header">
        <div id="logo" class="logo">
          <a href="home-01.php">
            <img class="site-logo"  src="images/logo.png" alt="Image" />
          </a>
        </div>
      <a class="title-button-group"><i class="icon-close"></i></a>

      </div>

      <div class="tf-tab">
            <div class="menu-tab">
              <div class="user-tag active">Menu</div>
              <div class="user-tag">Categories</div>
            </div>
          
          <div class="content-tab">
          
            <div class="header-ct-center menu-moblie">
          <div class="nav-wrap">
            <nav class="main-nav mobile">
              <ul id="menu-primary-menu" class="menu">
                <li class="menu-item menu-item-has-children-mobile current-item">
                  <a class="iteam-menu" href="home-01.php">Home</a>
                </li>
                <li class="menu-item menu-item-has-children-mobile">
                  <a class="iteam-menu">Find jobs </a>
                  <ul class="sub-menu-mobile">
                    <li class="menu-item menu-item-mobile">
                      <a href="find-jobs-list.php">List Layout</a>
                    </li>
                    <li class="menu-item menu-item-mobile">
                      <a href="find-jobs-grid.php">Grid Layout</a>                       
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="find-jobs-list-sidebar-fullwidth.php">List Sidebar FullWidth</a> 
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="find-jobs-grid-sidebar-fullwidth.php">Grid Sidebar FullWidth</a>
                        
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="find-jobs-topmap.php">Top Map</a>
                        
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="find-jobs-topmap-sidebar.php">Top Map Sidebar</a>
                        
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="find-jobs-half-map.php">Half Map - V1</a>
 
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="find-jobs-half-map2.php">Half Map - V2</a>
 
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="jobs-single.php">Jobs Single - V1</a>
                        
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="jobs-single2.php">Jobs Single - V2</a>
                        
                      </li>
                  </ul>
                </li>
  
                <li class="menu-item menu-item-has-children-mobile">
                  <a class="iteam-menu">Employers</a>
                  <ul class="sub-menu-mobile">
                    <li class="menu-item">
                      <a href="employers-list.php">List Layout</a>
                      
                    </li>
                    <li class="menu-item">
                      <a href="employers_grid.php">Grid Layout</a>
                        
                      </li>
                      <li class="menu-item">
                        <a href="employers-grid-fullwidth.php">Grid Full Width</a>
                        
                      </li>
                      <li class="menu-item">
                        <a href="employers-topmap.php">Top Map</a>
                        
                      </li>
                      <li class="menu-item">
                        <a href="employers-half-map.php">Half Map</a>
                        
                      </li>
                      <li class="menu-item">
                        <a href="employers-single.php">Employers Single - V1</a>

                      </li>
                      <li class="menu-item">
                        <a href="employers-single2.php">Employers Single - V2</a> 
                        
                      </li>
                     
                      <li class="menu-item">
                        <a href="employers-review.php">Employers Reviews</a>
                        
                      </li>
                      <li class="menu-item">
                        <a href="employers-not-pound.php">Employers Not Found</a>
                      </li>
                      <li class="menu-item">
                        <a href="dashboard/employer-dashboard.php">Employer Dashboard</a>
                      </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children-mobile">
                  <a class="iteam-menu" href="blog.php">Blog</a>
                </li>
                <li class="menu-item menu-item-has-children-mobile">
                  <a class="iteam-menu">Pages</a>
                  <ul class="sub-menu-mobile">
                    <li class="menu-item menu-item-mobile">
                      <a href="about-us.php">About Us</a>
                    </li>
                    <li class="menu-item menu-item-mobile">
                        <a href="accordion-page.php">FAQS</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="term-of-use.php">Terms Of Use</a>
                      </li>
                   
                      <li class="menu-item menu-item-mobile">
                        <a href="contact-us.php">Contact Us</a>
                      </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-mobile">
                        <a href="create-account.php">Create Account</a>
                      </li>
                      <li>
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        echo '<span class="ps-4"><b>Welcome, ' .$_SESSION["user_name"] . '</b></span>';
                        echo '<a class="nav-item"><a href="logout.php" class="nav-link"><button class="button btn-primary rounded-pill px-3 d-none d-lg-block">Logout</button></a>';
                    } else {
                        echo '<a class="nav-item"><a href="login.php" class="nav-link"><button class="button btn-primary rounded-pill px-3 d-none d-lg-block">Login</button></a>';
                    }
                    ?>
                      </li>  
              </ul>
            </nav>
          </div>  
            </div>
          
          </div>
        
      </div>
 
        

      <div class="header-customize-item button">
        <a href="dashboard/candidates-resumes.php">Upload Resume</a>
      </div>

      <div class="mobile-footer">
        <div class="icon-infor d-flex aln-center">
          <div class="icon">
              <span class="icon-call-calling"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
          </div>
          <div class="content">
              <p>Need help? 24/7</p>
              <h6><a href="tel:0123456678">001-1234-88888</a></h6>
          </div>
      </div>
        <div class="wd-social d-flex aln-center">
          <ul class="list-social d-flex aln-center">
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-linkedin2"></i></a></li>
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-pinterest"></i></a></li>
              <li><a href="#"><i class="icon-instagram1"></i></a></li>
              <li><a href="#"><i class="icon-youtube"></i></a></li>
          </ul>
      </div>
      </div>
    </div>
    
  </div>

  <!-- Boxed -->
  <div class="boxed"> 
  <!-- HEADER -->
  <header id="header" class="header header-default style-absolute header-fixed">
    <div class="tf-container ct2">
      <div class="row">
        <div class="col-md-12">
          <div class="sticky-area-wrap">
            <div class="header-ct-left">
              <div id="logo" class="logo">
                <a href="home-01.php">
                  <img class="site-logo" id="trans-logo" src="images/logo-white.png" alt="Image" />
                </a>
              </div>

            </div>
            <div class="header-ct-center">
              <div class="nav-wrap">
                <nav id="main-nav" class="main-nav">
                  <ul id="menu-primary-menu" class="menu">
                    <li class="menu-sub">
                      <a href="home-01.php">Home </a>
                      <div class="menu-bar">
                       </div>
                      
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Jobs</a>
                        <ul class="sub-menu st1">
                          <li class="nav-sub">
                            <a href="find-jobs-list.php">Find Jobs</a>
                          </li>
                          <li class="nav-sub">
                            <a href="my-applications.php">My Applications</a>
                          </li>
                           <li class="nav-sub">
                            <a href="user-save-job.php">Save Jobs</a>
                          </li>
                        </ul>
                        </li>
<!-- 
                    <li class="menu-item menu-item-has-children">
                      <a href="#">Employers</a>
                      <ul class="sub-menu st1">
                        <li class="nav-sub">
                          <a href="employers-list.php">Employers Listing <span class="icon-keyboard_arrow_right"></span>  </a>
                          <ul class="nav-sub-menu">
                            
                              <li class="nav-menu-item">
                                <a href="employers-list.php">List Layout</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="employers_grid.php">Grid Layout</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="employers-list-sidebar.php">List Sidebar</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="employers-grid-sidebar.php">Grid Sidebar</a>
                              </li> 
                            
                            <li class="nav-menu-item">
                              <a href="employers-grid-fullwidth.php">Grid Fullwidth</a>
                            </li>
                            
                            <li class="nav-menu-item">
                              <a href="employers-topmap.php">Top Map</a>
                            </li>    
                            <li class="nav-menu-item">
                              <a href="employers-half-map.php">Half Map</a>
                            </li>
                           
                          </ul>
                        </li>
                        <li class="nav-sub">
                          <a href="employers-single.php">Employers Single - V1</a>
                          
                          
                        </li>
                        <li class="nav-sub">
                          <a href="employers-single2.php">Employers Single - V2</a> 
                        </li>
                        
                          <li class="nav-sub">
                            <a href="employers-review.php">Employers Reviews</a>
                          </li>
                          <li class="nav-sub">
                            <a href="employers-not-pound.php">Employers Not Found</a>
                          </li>
                          <li class="nav-sub">
                            <a href="dashboard/employer-dashboard.php">Employer Dashboard</a>
                          </li> 
                      </ul>
                    </li> -->
                    <!-- <li class="menu-item menu-item-has-children">
                      <a href="#">Candidates</a>
                      <ul class="sub-menu st1">
                        <li class="nav-sub">
                          <a href="candidate.php">Candidates Listing <span class="icon-keyboard_arrow_right"></span>  </a>
                          <ul class="nav-sub-menu">
                           
                              <li class="nav-menu-item">
                                <a href="candidate.php">List Layout</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="candidate-grid.php">Grid Layout</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="candidate-list-sidebar.php">List Sidebar</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="candidate-top-map.php">Top Map</a>
                              </li>
                            
                            <li class="nav-menu-item">
                              <a href="candidate-half-map.php">Half Map</a>
                            </li>
                            <li class="nav-menu-item">
                              <a href="candidate-no-available.php">No Available - V1</a>
                            </li>
                            <li class="nav-menu-item">
                              <a href="candidate-no-available2.php">No Available - V2</a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-sub">
                          <a href="#">Sample CV <span class="icon-keyboard_arrow_right"></span>  </a>
                          <ul class="nav-sub-menu">
                           
                              <li class="nav-menu-item">
                                <a href="sample-cv.php">Sample CV</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="cv-details.php">CV Details</a> 
                              </li>
                              <li class="nav-menu-item">
                                <a href="sample-cv-sidebar.php">Sample CV Sidebar</a>  
                              </li>
                          </ul>
                        </li>
                        <li class="nav-sub">
                          <a href="candidate-single.php">Candidate Single - V1</a>
                        </li>
                        <li class="nav-sub">
                          <a href="candidate-single2.php">Candidate Single - V2</a>
                        </li>
                          <li class="nav-sub">
                            <a href="dashboard/candidates-dashboard.php">Candidates Dashboard</a>
                          </li> 
                      </ul>
                    </li> -->
                    <li class="nav-menu">
                      <a href="blog.php">Blog</a>
                      <!-- <ul class="sub-menu st1">
                        <li class="nav-sub">
                          <a href="#">Blog Listing <span class="icon-keyboard_arrow_right"></span>  </a>
                          <ul class="nav-sub-menu">
                           
                              <li class="nav-menu-item">
                                <a href="blog.php">Blog List </a>
                              </li>
                              <li class="nav-menu-item">
                                  <a href="blog-grid.php">Blog Grid</a>
                                </li>
                                <li class="nav-menu-item">
                                  <a href="blog-masonry.php">Blog Masonry</a>
                                </li>
                          </ul>
                        </li>
                        <li class="nav-sub">
                          <a href="#">Blog Details <span class="icon-keyboard_arrow_right"></span>  </a>
                          <ul class="nav-sub-menu">
                            
                              <li class="nav-menu-item">
                                <a href="blog-detail.php">Blog Details - V1</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="blog-detail-01.php">Blog Details - V2</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="blog-detail-side-bar.php">Blog Details Sidebar</a>
                              </li>
                          </ul>
                        </li>
                        
                      </ul> -->
                     
                    </li>
                    <li class="menu-item menu-item-has-children">
                      <a href="#">Pages</a>
                     <ul class="sub-menu st1">
                         <!-- <li class="nav-sub">
                          <a href="#">Shop<span class="icon-keyboard_arrow_right"></span>  </a>
                          <ul class="nav-sub-menu">
                           
                              <li class="nav-menu-item">
                                <a href="shop.php">Shop List</a>
                              </li>
                              <li class="nav-menu-item">
                                <a href="shop-details.php">Shop Single</a>
                                </li>
                                <li class="nav-menu-item">
                                  <a href="shopping-cart.php">Shopping Cart</a>
                                </li>
                                <li class="nav-menu-item">
                                  <a href="checkout.php">Checkout</a>
                                </li>
                          </ul>
                        </li> -->
                        <li class="nav-sub">
                          <a href="about-us.php">About Us</a>

                        </li>
                        <li class="nav-sub">
                          <a href="accordion-page.php">FAQS</a>
                        </li>
                        <li class="nav-sub">
                          <a href="term-of-use.php">Terms Of Use</a>
                        </li>
 
                        <li class="nav-sub">
                          <a href="contact-us.php">Contact Us</a>
                        </li>

                      </ul>

                    </li>
                     <li class="nav-sub">
                          <a href="create-account.php">Sign Up</a>
                        </li>
                         <li class="nav-sub">
                           <?php
                    if (isset($_SESSION['user_name'])) {
                        echo '<a class="nav-item"><a href="logout.php" class="nav-sub">Logout</a>';
                        echo '<span class="ps-4"><b>Welcome, ' .$_SESSION["user_name"] . '&nbsp;&nbsp;&nbsp;</b></span>';
                      
                    } else {
                        echo '<a class="nav-item"><a href="login.php" class="nav-sub">Sign In</a>';
                    }
                    ?>
                        </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="header-ct-right">

              <div class="header-customize-item account">
                
                    <?php if (isset($_SESSION['user_id'])): ?>
  <a href="user_profile.php?id=<?php echo $_SESSION['user_id']; ?>" 
     style="display: flex; align-items: center; justify-content: center;
            width: 40px; height: 40px; background-color: black; border-radius: 50%;
            overflow: hidden; text-decoration: none; transition: background-color 0.3s ease;">
      
      <?php if (isset($_SESSION['profile_image']) && !empty($_SESSION['profile_image'])): ?>
          <img src="images/<?php echo htmlspecialchars($_SESSION['profile_image']); ?>" alt="User" 
               style="width: 100%; height: 100%; object-fit: cover;">
      <?php else: ?>
          <i class="fa fa-user" style="color: white; font-size: 18px;"></i>
      <?php endif; ?>
  </a>
<?php endif; ?>

                <div class="name">
                  Candidates<span class="icon-keyboard_arrow_down"></span>
                </div>
                <!-- <div class="sub-account">
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-dashboard.php"><span class="icon-dashboard"></span>Dashboard</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-profile-setting.php"><span class="icon-profile"></span> Profile</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-resumes.php"><span class="icon-resumes"></span> Resumes</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-my-applied.php"><span class="icon-my-apply"></span> My Applied</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-save-jobs.php"><span class="icon-work"></span> Saved Jobs</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-alerts-jobs.php"><span class="icon-bell1"></span> Candidate Alerts</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-messages.php"><span class="icon-chat"></span> Messages</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-following-employers.php"><span class="icon-following"></span> Following Employers</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-meetings.php"><span class="icon-meeting"></span> Meeting</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-change-passwords.php"><span class="icon-change-passwords"></span> Change
                      Passwords</a>
                  </div>
                  <div class="sub-account-item">
                    <a href="dashboard/candidates-delete-profile.php"><span class="icon-trash"></span> Delete Profile</a>
                  </div>
                </div> -->
              </div>
              <div class="header-customize-item button">
                <a href="dashboard/candidates-resumes.php">Upload Resume</a>
              </div>
            </div>
            <div class="nav-filter">
              <div class="nav-mobile"><span></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->
  <!-- SLIDER-->
  <section class="tf-slider sl1 parallax">
    <div class="tf-container">
      <div class="row">
        <div class="col-xl-8">
          <div class="content">
            <div class="heading">
              <h2 class="text-white">Find the job that fits your life</h2>
              <p class="text-white">Resume-Library is a true performance-based job board. Enjoy custom hiring products
                and access to up to 10,000 new resume registrations daily, with no subscriptions or user licences.</p>
            </div>
            <div class="form-sl">
              <form method="post">
                <div class="row-group-search home1">
                  <div class="form-group-1">
                    <input type="text" class="input-filter-search" placeholder="Job title, key words or company">
                  </div>
                  <div class="form-group-2">
                    <span class="icon-map-pin"></span>
                    <select id="select-location" class="select-location">
                      <option value="">All Location</option>
                      <option value="">Singapore</option>
                      <option value="">Japan</option>
                      <option value="">Korea</option>
                      <option value="">Italia</option>
                      <option value="">Canada</option>
                    </select>
                  </div>
                  <div class="form-group-4">
                    <button type="submit" class="btn btn-find">Find Jobs</button>
                  </div>
                </div>
              </form>
              <!-- End Job  Search Form-->
            </div>
            <ul class="list-category text-white">
              <li><a href="about-us.php">Designer</a></li>
              <li class="current"><a href="about-us.php">Developer</a></li>
              <li><a href="about-us.php">Tester</a></li>
              <li><a href="about-us.php">Writing</a></li>
              <li><a href="about-us.php">Project Manager</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- END SILDER -->
 <!-- Job-category (Dynamic Version) -->
<section class="job-category-section">
  <div class="tf-container">
    <div class="row">
      <div class="col-md-12">
        <div class="tf-title">
          <div class="group-title">
            <h1>Browse by category</h1>
            <p>Recruitment Made Easy in 100 seconds</p>
          </div>
          <a href="find-jobs-list.php" class="tf-button">
            All Categories
            <span class="icon-arrow-right2"></span>
          </a>
        </div>
      </div>

      <!-- wd-job-category -->
      <div class="col-md-12">
        <div class="group-category-job wow fadeInUp">
          <?php
            $query = "SELECT job_title, COUNT(*) as job_count FROM jobs GROUP BY job_title ORDER BY job_count DESC LIMIT 10";
            $result = mysqli_query($con, $query);
            $first = true;
            if ($result && mysqli_num_rows($result) > 0):
              while ($row = mysqli_fetch_assoc($result)):
                $jobTitle = $row['job_title'];
                $jobCount = $row['job_count'];
          ?>
          <div class="job-category-box <?php echo $first ? 'active' : ''; ?>">
            <div class="job-category-header">
              <h1><a href="find-jobs-list.php?category=<?php echo urlencode($jobTitle); ?>"><?php echo htmlspecialchars($jobTitle); ?></a></h1>
              <p><?php echo $jobCount; ?> Jobs available</p>
            </div>
            <a href="find-jobs-list.php?category=<?php echo urlencode($jobTitle); ?>" class="btn-category-job">Explore Jobs <span class="icon-keyboard_arrow_right"></span></a>
          </div>
          <?php
              $first = false;
              endwhile;
            else:
              echo "<p>No categories found.</p>";
            endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Job-category -->

<!-- WD-JOB (DYNAMIC VERSION) -->
<section class="jobs-section-three">
  <div class="tf-container">
    <div class="tf-title style-2">
      <div class="group-title">
        <h1>Featured Jobs</h1>
        <p>Find the job that’s perfect for you. about 800+ new jobs everyday</p>
      </div>
    </div>
    <div class="row wow fadeInUp">

      <?php
      include 'connection.php'; // Add this if not already included
      $query = "SELECT * FROM jobs ORDER BY post_date DESC LIMIT 6";
      $result = mysqli_query($con, $query);
      if ($result && mysqli_num_rows($result) > 0):
        while($job = mysqli_fetch_assoc($result)):
          // Calculate days left
          $deadline = strtotime($job['deadline']);
          $today = strtotime(date("Y-m-d"));
          $daysLeft = max(0, floor(($deadline - $today) / (60 * 60 * 24)));
      ?>
      <div class="col-lg-6">
        <div class="features-job">
          <div class="job-archive-header">
            <div class="inner-box">
              <div class="logo-company">
                <img src="images/<?php echo $job['image']; ?>" alt="<?php echo $job['company_name']; ?>" />
              </div>
              <div class="box-content">
                <h4><a href="jobs-single.php?id=<?php echo $job['id']; ?>"><?php echo $job['company_name']; ?></a></h4>
                <h3>
                  <a href="jobs-single.php?id=<?php echo $job['id']; ?>"><?php echo $job['job_title']; ?></a>
                  <span class="icon-bolt"></span>
                </h3>
                <ul>
                  <li><span class="icon-map-pin"></span> <?php echo $job['state'] . ', ' . $job['country']; ?></li>
                  <li><span class="icon-calendar"></span> <?php echo date("d M, Y", strtotime($job['post_date'])); ?></li>
                </ul>
                <!-- Like (Heart) Button -->
                <a href="#" class="job-like" data-jobid="<?php echo $job['id']; ?>">
                  <span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="job-archive-footer">
            <div class="job-footer-left">
              <ul class="job-tag">
                <li><a href="#"><?php echo $job['working_schedule']; ?></a></li>
                <li><a href="#"><?php echo $job['working_day']; ?></a></li>
              </ul>
              <!-- Star Ratings -->
              <!-- <div class="star">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <span class="icon-star-full"></span>
                <?php endfor; ?>
              </div> -->
            </div>
            <div class="job-footer-right">
              <div class="price">
                <span class="icon-dolar1"></span>
                <p>₹<?php echo $job['salary_min']; ?> - ₹<?php echo $job['salary_max']; ?>
                  <span class="year">/<?php echo strtolower($job['payment_type']); ?></span>
                </p>
              </div>
              <!-- <p class="days"><?php echo $daysLeft; ?> days left to apply</p> -->
            </div>
          </div>
          <a href="jobs-single.php?id=<?php echo $job['id']; ?>" class="jobtex-link-item" tabindex="0"></a>
        </div>
      </div>
      <?php endwhile; endif; ?>

      <div class="col-md-12">
        <div class="wrap-button">
          <a href="find-jobs-list.php" class="tf-button style-1">
            See more Jobs
            <span class="icon-keyboard_arrow_right"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--END WD-JOB -->

  <!-- WD-icon-box  -->
  <section class="wd-iconbox flat-row background1">
    <div class="tf-container">
      <div class="title-iconbox">
        <h1>What can I do with Jobtex?</h1>
        <p>Streamline your hiring process with strategic channels to reach qualified candidates</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 wow fadeInUp">
          <!-- tf-iconbox -->
          <div class="tf-iconbox">
            <div class="box-header">
              <div class="icon">
                <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.1242 26.6601C12.2169 26.6601 13.9133 24.9714 13.9133 22.8883C13.9133 20.8052 12.2169 19.1165 10.1242 19.1165C8.03144 19.1165 6.33496 20.8052 6.33496 22.8883C6.33496 24.9714 8.03144 26.6601 10.1242 26.6601Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M8.59724 31.9404L10.1242 35.9951C10.5767 37.1832 11.7078 37.9753 12.9897 37.9753H18.3624C19.2484 37.9753 19.9648 37.2586 19.9648 36.3723C19.9648 35.5613 19.3616 34.8824 18.5509 34.7881L14.4036 34.2789C14.1019 34.2412 13.838 34.0337 13.7626 33.732C13.5175 32.8079 12.952 30.8277 12.3676 29.6962C11.6135 28.1874 10.8594 26.6787 8.20135 26.6787C4.78919 26.6787 4.03512 28.9418 3.28106 31.9592C2.52699 34.9767 1 41.0116 1 41.0116"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M10.8778 37.221L10.1426 40.9928" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M15.4209 37.9753H39.5511" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M24.452 8.55534C25.7117 8.55534 26.733 7.54212 26.733 6.29226C26.733 5.04239 25.7117 4.02917 24.452 4.02917C23.1922 4.02917 22.1709 5.04239 22.1709 6.29226C22.1709 7.54212 23.1922 8.55534 24.452 8.55534Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M20.7002 13.8358V12.9871C20.7002 9.66792 22.4346 8.55524 24.0935 8.55524H24.8476C26.5065 8.55524 28.2409 9.66792 28.2409 12.9871V13.8358"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M11.6504 10.0641V3.2748C11.6504 2.03011 12.6684 1.01172 13.9126 1.01172H23.7155"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M11.6504 10.0641V14.5902C11.6504 15.8349 12.6684 16.8533 13.9126 16.8533H28.2399L32.7643 21.3795V16.8533H35.7806C37.0248 16.8533 38.0428 15.8349 38.0428 14.5902V3.2748C38.0428 2.03011 37.0248 1.01172 35.7806 1.01172H23.7155"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M22.208 34.2035L25.9783 24.3969H40.3056L36.5353 34.2035H22.208Z" stroke="#14A077"
                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M28.9951 37.9753V34.2035" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
            <div class="box-content">
              <h1 class="box-title">
                <a href="about-us.php">Reduce Hiring bias</a>
              </h1>
              <p>Structured digital interviews increase the predictive validity of your hires by 65%.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <!-- tf-iconbox -->
          <div class="tf-iconbox">
            <div class="box-header">
              <div class="icon">
                <svg width="38" height="43" viewBox="0 0 38 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.7024 27.3992C20.2963 27.3992 21.5883 26.1138 21.5883 24.5282C21.5883 22.9426 20.2963 21.6572 18.7024 21.6572C17.1085 21.6572 15.8164 22.9426 15.8164 24.5282C15.8164 26.1138 17.1085 27.3992 18.7024 27.3992Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M21.959 31.334V41.0114" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M15.5098 41.0114V31.334" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M7.77148 41.0114V31.334" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M18.7358 27.415H17.2848C15.2856 27.415 12.9316 28.1086 12.9316 31.3344V36.157C12.9316 37.2054 13.8023 38.0602 14.8664 38.0602H15.3501"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M10.6907 27.3992C12.2845 27.3992 13.5766 26.1138 13.5766 24.5282C13.5766 22.9426 12.2845 21.6572 10.6907 21.6572C9.09679 21.6572 7.80469 22.9426 7.80469 24.5282C7.80469 26.1138 9.09679 27.3992 10.6907 27.3992Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M10.9472 27.415H9.51231C7.52921 27.415 5.19141 28.1086 5.19141 31.3344V36.157C5.19141 37.2054 6.04592 38.0602 7.11002 38.0602H7.5937"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M29.6992 41.0114V31.334" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M26.8118 27.3992C28.4056 27.3992 29.6977 26.1138 29.6977 24.5282C29.6977 22.9426 28.4056 21.6572 26.8118 21.6572C25.2179 21.6572 23.9258 22.9426 23.9258 24.5282C23.9258 26.1138 25.2179 27.3992 26.8118 27.3992Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M26.5215 27.415H27.9564C29.9395 27.415 32.2773 28.1086 32.2773 31.3344V36.157C32.2773 37.2054 31.4228 38.0602 30.3587 38.0602H29.875"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M18.7344 27.415H20.1854C22.1846 27.415 24.5386 28.1086 24.5386 31.3344V36.157C24.5386 37.2054 23.6679 38.0602 22.6038 38.0602H22.1202"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M18.7344 41.0112V38.0596" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M27.7642 10.6895L18.7355 19.0765L13.5762 15.2056" stroke="#14A077" stroke-width="2"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M18.7344 3.59277V4.8831" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M26.475 5.67285L25.8301 6.78576" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M32.134 11.334L31.0215 11.9791" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M34.2136 19.0762H32.9238" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M3.25781 19.0762H4.54763" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M5.33789 11.334L6.45037 11.9791" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M10.9961 5.673L11.641 6.78591" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M34.745 26.3827C35.8413 24.0762 36.4701 21.4956 36.4701 18.7537C36.4701 8.9472 28.5377 1.01172 18.735 1.01172C8.9324 1.01172 1 8.9472 1 18.7537C1 21.4795 1.61266 24.0601 2.72513 26.3827"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>
            <div class="box-content">
              <h1 class="box-title">
                <a href="about-us.php">Save time & headspace</a>
              </h1>
              <p>Reduce your time-to-hire by up to 75% and free up headspace for other HR</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <!-- tf-iconbox -->
          <div class="tf-iconbox">
            <div class="box-header">
              <div class="icon">
                <svg width="40" height="43" viewBox="0 0 40 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.6145 4.3812C16.8264 4.33283 14.5863 6.49325 14.5218 9.21796C14.4896 10.6206 15.0697 11.6363 15.8433 12.6843C16.5202 13.6033 17.0198 13.7 17.3099 15.0704"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M19.6143 4.3812C22.4024 4.33283 24.6425 6.49325 24.707 9.21796C24.7392 10.6206 24.159 11.6363 23.3855 12.6843C22.7086 13.6033 22.0962 13.7 21.8222 15.0704"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M21.8226 15.0545H21.8065H17.3906" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M19.6143 18.4241H20.8069L21.8222 16.7312V15.0545" stroke="#14A077" stroke-width="2"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M21.1943 7.0412C21.8873 7.42814 22.3869 8.07304 22.532 8.8308" stroke="#14A077"
                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M17.3105 15.0543V16.731L18.4387 18.4239H19.5668" stroke="#14A077" stroke-width="2"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M19.5654 1.01172V2.1403" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.6035 3.47858L14.3932 4.26858" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M11.1211 9.44366H12.2492" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.6035 15.3929L14.3932 14.6029" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M25.5451 15.3929L24.7393 14.6029" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M28.011 9.44366H26.8828" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M25.5451 3.47858L24.7393 4.26858" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M8.73595 28.7426C10.5161 28.7426 11.9592 27.2989 11.9592 25.5181C11.9592 23.7372 10.5161 22.2935 8.73595 22.2935C6.95579 22.2935 5.5127 23.7372 5.5127 25.5181C5.5127 27.2989 6.95579 28.7426 8.73595 28.7426Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M7.44651 33.2568L8.75192 36.7231C9.13872 37.7388 10.1057 38.416 11.1855 38.416H15.7464C16.5038 38.416 17.1163 37.8033 17.1163 37.0456C17.1163 36.3523 16.6005 35.7719 15.9237 35.6913L12.3942 35.256C12.1363 35.2237 11.9268 35.0464 11.8462 34.7884C11.6367 33.9984 11.1532 32.2894 10.6698 31.3221C10.0251 30.0323 9.38046 28.7425 7.12418 28.7425C4.22325 28.7425 3.5786 30.6772 2.93395 33.2568C2.2893 35.8364 1 40.9956 1 40.9956"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M8.73645 37.1262L8.0918 40.9956" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M30.5088 37.1262L31.2985 40.9956" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M13.249 38.4161H19.6955" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M30.6539 28.7426C32.4341 28.7426 33.8772 27.2989 33.8772 25.5181C33.8772 23.7372 32.4341 22.2935 30.6539 22.2935C28.8738 22.2935 27.4307 23.7372 27.4307 25.5181C27.4307 27.2989 28.8738 28.7426 30.6539 28.7426Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M19.6949 28.7426C21.4751 28.7426 22.9182 27.2989 22.9182 25.5181C22.9182 23.7372 21.4751 22.2935 19.6949 22.2935C17.9148 22.2935 16.4717 23.7372 16.4717 25.5181C16.4717 27.2989 17.9148 28.7426 19.6949 28.7426Z"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M31.9432 33.2569L30.6378 36.7233C30.251 37.739 29.284 38.4161 28.2042 38.4161H23.6433C22.8859 38.4161 22.2734 37.8035 22.2734 37.0457C22.2734 36.3524 22.7892 35.772 23.466 35.6914L26.9955 35.2561C27.2534 35.2239 27.4629 35.0465 27.5435 34.7886C27.753 33.9986 28.2365 32.3057 28.7199 31.3383C29.3646 30.0485 30.0092 28.7587 32.2655 28.7587C35.1665 28.7587 35.8111 30.6934 36.4558 33.273C37.1004 35.8526 38.3897 41.0119 38.3897 41.0119"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M26.1418 38.4161H19.6953" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M14.5381 35.1915V33.2568C14.5381 30.7578 16.8427 28.7425 19.6953 28.7425C22.5479 28.7425 24.8525 30.7578 24.8525 33.2568V35.1915"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>
            <div class="box-content">
              <h1 class="box-title">
                <a href="about-us.php">Minimize environmental impact</a>
              </h1>
              <p>Did you know? U.S. office workers use ~10,000 sheets of paper every year.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <!-- tf-iconbox -->
          <div class="tf-iconbox">
            <div class="box-header">
              <div class="icon">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M24.6022 17.3248C26.8874 19.5926 26.8874 23.2869 24.6022 25.5547C22.317 27.8224 18.6241 27.8224 16.3389 25.5547C14.0537 23.2869 14.0537 19.5926 16.3389 17.3248C17.8563 15.8068 20.0135 15.313 21.9514 15.8251"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M29.4277 12.5338C34.3637 17.4535 34.3637 25.4273 29.4277 30.347C24.4917 35.2666 16.4661 35.2666 11.5301 30.347C6.59412 25.4273 6.59412 17.4535 11.5301 12.5338C15.7532 8.32746 22.2248 7.72393 27.106 10.7233"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path
                    d="M28.7514 3.88295C21.5302 0.517835 12.6636 1.79804 6.70384 7.72356C-0.901279 15.2951 -0.901279 27.5667 6.70384 35.1382C14.309 42.7097 26.649 42.7097 34.2541 35.1382C40.9634 28.4446 41.7496 18.0932 36.6124 10.5583"
                    stroke="#14A077" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M30.6152 11.3447L31.2368 10.7412" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M29.4279 12.5332L24.6016 17.3248" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M24.6005 17.3252L20.2129 21.6962" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M31.2383 10.7418L33.2127 8.7666" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M29.4277 12.5337L30.616 11.3449" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M30.5254 10.6494L30.6169 11.3444" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M35.8086 6.18795V5.14551" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M32.6816 4.10248L35.8078 1.01172V5.14495" stroke="#14A077" stroke-width="2"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M31.4023 5.40093L32.6821 4.10242" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M31.4022 5.40039L30.0859 6.69888L30.5247 10.6492" stroke="#14A077" stroke-width="2"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M30.6152 11.345L35.277 11.8754L36.5933 10.5586" stroke="#14A077" stroke-width="2"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M36.8507 6.1875H35.8086" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M36.5938 10.5585L40.9996 6.1875H36.8497" stroke="#14A077" stroke-width="2"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M30.5254 10.6494L31.2384 10.7409" stroke="#14A077" stroke-width="2" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
            <div class="box-content">
              <h1 class="box-title">
                <a href="about-us.php">Reduce Hiring bias</a>
              </h1>
              <p>Structured digital interviews increase the predictive validity of your hires by 65%.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End wd-icon-box  -->
 <!-- WD-employer (DYNAMIC VERSION) -->
<section class="employer-section">
  <div class="tf-container">
    <div class="wd-employer">
      <div class="tf-title">
        <div class="group-title">
          <h1>Top Employers</h1>
          <p>Showing companies based on reviews and recent job openings</p>
        </div>
        <a href="employers-list.php" class="tf-button">
          All Employers
          <span class="icon-arrow-right2"></span>
        </a>
      </div>
      <div class="row wow fadeInUp">

        <?php
        $query = "SELECT DISTINCT company_name, profile_image, address FROM company_details ORDER BY created_at DESC LIMIT 12";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0):
          while($row = mysqli_fetch_assoc($result)):
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
          <div class="employer-block">
            <div class="inner-box">
              <div class="logo-company">
                <img src="images/<?php echo $row['profile_image']; ?>" alt="<?php echo $row['company_name']; ?>" />
              </div>
              <div class="box-content">
                <!-- <div class="star">
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                  <span class="icon-star-full"></span>
                </div> -->
                <h3>
                  <a href="employers-single.php"><?php echo $row['company_name']; ?></a>
                  <span class="icon-bolt"></span>
                </h3>
                <p class="info">
                  <span class="icon-map-pin"></span>
                  <?php echo $row['address']; ?>
                </p>
              </div>
            </div>
            <a href="employers-single.php" class="jobtex-link-item" tabindex="0"></a>
          </div>
        </div>
        <?php endwhile; endif; ?>

      </div>
    </div>
  </div>
</section>
<!-- End-WD-employer -->

 <!-- WD-testimonials -->
  <!-- <section class="testimonials-section">
    <div class="wrap-testimonials over-flow-hidden">
      <div class="tf-container">
        <div class="row">
          <div class="col-lg-12">
            <div class="tf-title style-2">
              <div class="group-title">
                <h1>What our clients are saying</h1>
                <p>Showing companies based on reviews and recent job openings</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 wow fadeInUp">
              <div class="swiper-container tes-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“Jobtex is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Pete Jones</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“Jobtex is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Pete Jones</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“Jobtex is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Pete Jones</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="swiper-slide">
                  <div class="wd-testimonials">
                    <p class="description">“Jobtex is allowing us to go through a large number of candidates with
                      internal limited resources. We are able to do a first screening of candidates so much easier than
                      if we had to meet everyone. We can truly identify and assess a talent pool more efficiently and
                      have our talent ready to start in their new role faster.”</p>
                    <div class="author-group">
                      <div class="avatar">
                        <img src="images/review/testimonials.jpg" alt="images">
                      </div>
                      <div class="infor">
                        <h6>Pete Jones</h6>
                        <div class="position">Head of Marketing Build</div>
                        <ul class="rating">
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                              fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                          <li class="inactive"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                              viewBox="0 0 13 14" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.94418 8.42155L0.367213 6.2883C-0.11917 5.89933 0.094156 5.11714 0.711378 5.02896L4.36635 4.86612L5.92719 0.953019C6.03598 0.736138 6.25713 0.599609 6.49961 0.599609C6.74209 0.599609 6.96324 0.736849 7.07203 0.953019L8.63286 4.86612L12.2878 5.02896C12.9051 5.11714 13.1184 5.89933 12.632 6.2883L10.055 8.42155L10.7583 12.5864C10.8394 13.1545 10.2492 13.5798 9.73647 13.3231L6.49961 11.2659L3.26275 13.3224C2.74935 13.5791 2.15986 13.1538 2.24092 12.5857L2.94418 8.42155Z"
                                fill="#FFB321" />
                            </svg></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              <div class="swiper-pagination tes-bullet"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--End testimonials
 wd-partner -->
  <section>
    <div class="wd-partner">
      <div class="tf-container">
        <h1 class="title-partner">
          Over 100,000 recruiters use Jobtex to modernize their hiring
        </h1>
        <div class="swiper partner-type-6">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a class="logo-partner" href="#">
                <img src="images/partners/Logo.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-1.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img  src="images/partners/Logo-2.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-3.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img  src="images/partners/Logo-4.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-5.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-1.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-2.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-3.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-4.png" alt="images/partners/Logo.png">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="logo-partner">
                <img src="images/partners/Logo-5.png" alt="images/partners/Logo.png">
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--End wd-partner -->
  <?php
      include 'footer.php';
  ?>
  <script>
  document.querySelectorAll('.job-like').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      this.querySelector('span').classList.toggle('liked');
    });
  });
</script>
