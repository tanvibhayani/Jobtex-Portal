<?php
if(session_status()===PHP_SESSION_NONE)
{
  session_start();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
  <title>Jobtex TF</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="../fonts/fonts.css">
  <link rel="stylesheet" href="../stylesheets/bootstrap.min.css">
  <link rel="stylesheet" href="../stylesheets/swiper-bundle.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" type="text/css" href="../stylesheets/shortcodes.css">
  <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="../stylesheets/dashboard.css">
  <link rel="stylesheet" type="text/css" href="../stylesheets/responsive.css">
  <link rel="shortcut icon" href="../images/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="../images/favicon.png">
</head>
<body class="dashboard show ">
  <a id="scroll-top"></a>
  <div class="preload preload-container">
    <div class="preload-logo">
      <div class="spinner"></div>
    </div>
  </div>
  <div class="menu-mobile-popup">
    <div class="modal-menu__backdrop"></div>
    <div class="widget-filter">
      <div class="mobile-header">
        <div id="logo" class="logo">
          <a href="../home-01.php">
            <img class="site-logo" src="../images/logo.png" alt="Image" />
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
                  <li class="menu-item menu-item-has-children-mobile">
                    <a class="iteam-menu" href="../home-01.php">Home</a>
                  </li>
                  <li class="menu-item menu-item-has-children-mobile">
                    <a class="iteam-menu">Find jobs </a>
                    <ul class="sub-menu-mobile">
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-list.php">List Layout</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-grid.php">Grid Layout</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-list-sidebar.php">List Sidebar</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-grid-sidebar.php">Grid Sidebar</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-list-sidebar-fullwidth.php">List Sidebar FullWidth</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-grid-sidebar-fullwidth.php">Grid Sidebar FullWidth</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-topmap.php">Top Map</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-topmap-sidebar.php">Top Map Sidebar</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-half-map.php">Half Map - V1</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../find-jobs-half-map2.php">Half Map - V2</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../jobs-single.php">Jobs Single - V1</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../jobs-single2.php">Jobs Single - V2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children-mobile">
                    <a class="iteam-menu">Employers</a>
                    <ul class="sub-menu-mobile">
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-list.php">List Layout</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers_grid.php">Grid Layout</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-list-sidebar.php">List Sidebar</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-grid-sidebar.php">Grid Sidebar</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-grid-fullwidth.php">Grid Fullwidth</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-topmap.php">Top Map</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-half-map.php">Half Map</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-single.php">Employers Single - V1</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-single2.php">Employers Single - V2</a>

                      </li>

                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-review.php">Employers Reviews</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../employers-not-pound.php">Employers Not Found</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="employer-dashboard.php">Employer Dashboard</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children-mobile">
                    <a class="iteam-menu">Candidates</a>
                    <ul class="sub-menu-mobile">
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate.php">List Layout</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-grid.php">Grid Layout</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-list-sidebar.php">List Sidebar</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-top-map.php">Top Map</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-half-map.php">Half Map</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-no-available.php">No Available - V1</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-no-available2.php">No Available - V2</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-single.php">Candidate Single - V1</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../candidate-single2.php">Candidate Single - V2</a>

                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../sample-cv.php">Sample CV</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../sample-cv-sidebar.php">Sample CV Sidebar</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../cv-details.php">CV Details</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="candidates-dashboard.php">Candidates Dashboard</a>

                      </li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children-mobile">
                    <a class="iteam-menu">Blog</a>
                    <ul class="sub-menu-mobile">
                      <li class="menu-item menu-item-mobile">
                        <a href="../blog.php">Blog List </a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../blog-grid.php">Blog Grid</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../blog-masonry.php">Blog Masonry</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../blog-detail.php">Blog Details- V1</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../blog-detail-01.php">Blog Details- V2</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../blog-detail-side-bar.php">Blog Details Sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children-mobile">
                    <a class="iteam-menu">Pages</a>
                    <ul class="sub-menu-mobile">
                      <li class="menu-item menu-item-mobile">
                        <a href="../about-us.php">About Us</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../accordion-page.php">FAQS</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../term-of-use.php">Terms Of Use</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../contact-us.php">Contact Us</a>
                      </li>
                      <li class="menu-item menu-item-mobile">
                        <a href="../modal.php">Modal</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="categories">
            <div class="sub-categorie-mobile">
              <ul class="pop-up">
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-1"></span>Design & Creative</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Design & Creative</a></li>
                        <li><a href="../find-jobs-list.php">Digital marketing</a></li>
                        <li><a href="../find-jobs-list.php">Development & IT</a></li>
                        <li><a href="../find-jobs-list.php">Music & Audio</a></li>
                        <li><a href="../find-jobs-list.php">Finance & Accounting</a></li>
                        <li><a href="../find-jobs-list.php">Programming & Tech</a></li>
                        <li><a href="../find-jobs-list.php">video & Animation</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">Adobe Photoshop</a></li>
                        <li><a href="../jobs-single.php">adobe XD</a></li>
                        <li><a href="../jobs-single.php">Android Developer</a></li>
                        <li><a href="../jobs-single.php">Figma</a></li>
                        <li><a href="../jobs-single.php">CSS, Html</a></li>
                        <li><a href="../jobs-single.php">BA</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-8"></span>Digital Marketing</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Digital marketing</a></li>
                        <li><a href="../find-jobs-list.php">Design & Creative</a></li>
                        <li><a href="../find-jobs-list.php">Finance & Accounting</a></li>
                        <li><a href="../find-jobs-list.php">Development & IT</a></li>
                        <li><a href="../find-jobs-list.php">Programming & Tech</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">adobe XD</a></li>
                        <li><a href="../jobs-single.php">Figma</a></li>
                        <li><a href="../jobs-single.php">BA</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-2"></span>Development & IT</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Design & Creative</a></li>
                        <li><a href="../find-jobs-list.php">Development & IT</a></li>
                        <li><a href="../find-jobs-list.php">Music & Audio</a></li>
                        <li><a href="../find-jobs-list.php">video & Animation</a></li>
                        <li><a href="../find-jobs-list.php">Finance & Accounting</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">adobe XD</a></li>
                        <li><a href="../jobs-single.php">Android Developer</a></li>
                        <li><a href="../jobs-single.php">Adobe Photoshop</a></li>
                        <li><a href="../jobs-single.php">CSS, Html</a></li>
                        <li><a href="../jobs-single.php">BA</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-3"></span>Music & Audio</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Digital marketing</a></li>
                        <li><a href="../find-jobs-list.php">Design & Creative</a></li>
                        <li><a href="../find-jobs-list.php">video & Animation</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">Android Developer</a></li>
                        <li><a href="../jobs-single.php">Adobe Photoshop</a></li>
                        <li><a href="../jobs-single.php">adobe XD</a></li>
                        <li><a href="../jobs-single.php">Figma</a></li>
                        <li><a href="../jobs-single.php">BA</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-4"></span>Finance &
                    Accounting</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Development & IT</a></li>
                        <li><a href="../find-jobs-list.php">Design & Creative</a></li>
                        <li><a href="../find-jobs-list.php">Programming & Tech</a></li>
                        <li><a href="../find-jobs-list.php">Music & Audio</a></li>
                        <li><a href="../find-jobs-list.php">Finance & Accounting</a></li>
                        <li><a href="../find-jobs-list.php">video & Animation</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">adobe XD</a></li>
                        <li><a href="../jobs-single.php">Figma</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-5"></span>Programming & Tech</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Design & Creative</a></li>
                        <li><a href="../find-jobs-list.php">Digital marketing</a></li>
                        <li><a href="../find-jobs-list.php">Music & Audio</a></li>
                        <li><a href="../find-jobs-list.php">Finance & Accounting</a></li>
                        <li><a href="../find-jobs-list.php">Programming & Tech</a></li>
                        <li><a href="../find-jobs-list.php">video & Animation</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">Adobe Photoshop</a></li>
                        <li><a href="../jobs-single.php">adobe XD</a></li>
                        <li><a href="../jobs-single.php">Figma</a></li>
                        <li><a href="../jobs-single.php">CSS, Html</a></li>
                        <li><a href="../jobs-single.php">BA</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-6"></span>Video & Animation</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Design & Creative</a></li>
                        <li><a href="../find-jobs-list.php">Digital marketing</a></li>
                        <li><a href="../find-jobs-list.php">Programming & Tech</a></li>
                        <li><a href="../find-jobs-list.php">video & Animation</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">Adobe Photoshop</a></li>
                        <li><a href="../jobs-single.php">CSS, Html</a></li>
                        <li><a href="../jobs-single.php">BA</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="categories-mobile">
                  <a href="#"><span class="icon-categorie-7"></span>Writing &
                    translation</a>
                  <div class="group-menu-category-mobile">
                    <div class="menu left">
                      <ul>
                        <li><a href="../find-jobs-list.php">Finance & Accounting</a></li>
                        <li><a href="../find-jobs-list.php">Programming & Tech</a></li>
                        <li><a href="../find-jobs-list.php">video & Animation</a></li>
                      </ul>
                    </div>
                    <div class="menu right">
                      <ul>
                        <li><a href="../jobs-single.php">Figma</a></li>
                        <li><a href="../jobs-single.php">CSS, Html</a></li>
                        <li><a href="../jobs-single.php">BA</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header-customize-item button">
        <a href="candidates-dashboard.php">Upload Resume</a>
      </div>
      <div class="mobile-footer">
        <div class="icon-infor d-flex aln-center">
          <div class="icon">
            <span class="icon-call-calling"><span class="path1"></span><span class="path2"></span><span
                class="path3"></span><span class="path4"></span></span>
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
  <header id="header" class="header header-default ">
    <div class="tf-container ct2">
      <div class="row">
        <div class="col-md-12">
          <div class="sticky-area-wrap">
            <div class="header-ct-left">
              <div id="logo" class="logo">
                <a href="../home-01.php">
                  <img class="site-logo" src="../images/logo.png" alt="Image" />
                </a>
              </div>
   
            </div>
                      <div class="header-ct-center">
                <div class="nav-wrap">
                  <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                      <li class="nav-sub">
                        <a href="../home-01.php">Home </a>
                      </li>
                         <li class="menu-item menu-item-has-children">
                        <a href="#">Jobs</a>
                        <ul class="sub-menu st1">
                          <li class="nav-sub">
                            <a href="../find-jobs-list.php">Find Jobs</a>
                          </li>
                          <li class="nav-sub">
                            <a href="../my-applications.php">My Applications</a>
                          </li>
                           <li class="nav-sub">
                            <a href="../save-jobs.php">Save Jobs</a>
                          </li>
                          <li class="nav-sub">
                            <a href="../interview-schedule.php">Interview Schedule</a>
                          </li>
                        </ul>
                        </li>
                      <li class="nav-sub">
                        <a href="../blog.php">Blog</a>
                      </li>
                      <li class="menu-item menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu st1">
                          <li class="nav-sub">
                            <a href="../about-us.php">About Us</a>
                          </li>
                          <li class="nav-sub">
                            <a href="../accordion-page.php">FAQS</a>
                          </li>
                          <li class="nav-sub">
                            <a href="../term-of-use.php">Terms Of Use</a>
                          </li>
                          <li class="nav-sub">
                            <a href="../contact-us.php">Contact Us</a>
                          </li>
                        </ul>
                      </li>
                      </li>
                      <li class="nav-sub">
                            <a href="../create-account.php">Sign Up</a>
                          </li>
                          <li class="nav-sub">
                            <?php
                      if (isset($_SESSION['user_name'])) {
                        echo '<a href="../logout.php" class="nav-sub">Logout</a>';
                          echo '<span class="ps-4"><b>Welcome, ' .$_SESSION["user_name"] . '&nbsp;&nbsp;&nbsp;</b></span>';
                        
                      } else {
                          echo '<a class="nav-item"><a href="../login.php" class="nav-sub">Sign In</a>';
                      }
                      ?>
                          </li>
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
            <img src="../images/<?php echo htmlspecialchars($_SESSION['profile_image']); ?>" alt="User" 
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
                      <a href="dashboard/candidates-following-employers.php"><span class="icon-following"></span> Following
                        Employers</a>
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
                  <a href="candidates-dashboard.php">Upload Resume</a>
                </div>
              </div>
              <div class="nav-filter">
                <div class="nav-mobile"><span></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn header-item " id="left-menu-btn">  
      </div>
    </header>
  
