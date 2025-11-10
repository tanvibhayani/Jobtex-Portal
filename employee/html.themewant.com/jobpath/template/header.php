<?php
if(session_status()===PHP_SESSION_NONE)
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themewant.com/jobpath/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Jul 2025 20:31:15 GMT -->
<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Your Ultimate Job HTML Template">
    <meta name="keywords" content="Job, Resume, Employer, Agency">
    <link rel="canonical" href="https://html.themewant.com/jobpath">
    <meta name="robots" content="index, follow">
    <!-- for open graph social media -->
    <meta property="og:title" content="Your Ultimate Job HTML Template">
    <meta property="og:description" content="Your Ultimate Job HTML Template">
    <meta property="og:image" content="../../../www.example.com/image.html">
    <meta property="og:url" content="https://html.themewant.com/jobpath/">
    <!-- for twitter sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Your Ultimate Job HTML Template">
    <meta name="twitter:description" content="Your Ultimate Job HTML Template">
    <!-- fabicon -->
    <link rel="shortcut-icon" href="assets/img/favicon-16x16.png" type="image/x-icon">



    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>Jobpath - Job Seeker &amp; Job Holder HTML Template</title>
    <!-- rt icons -->
    <link rel="stylesheet" href="assets/fonts/icon/css/rt-icons.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/fontawesome.min.css">
    <!-- all plugin css -->
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<header class="rts__section rts__header absolute__header">
    <div class="container-none">
        <div class="rts__menu__background">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="rts__logo">
                        <a href="index.html">
                            <img class="logo__image" src="assets/img/logo/header__one.svg" width="160" height="40" alt="logo">
                        </a>
                    </div>
                    <div class="rts__menu d-flex gap-5 gap-lg-4 gap-xl-5 align-items-center">
                        <div class="navigation d-none d-lg-block">
    <nav class="navigation__menu" id="offcanvas__menu">
        <ul class="list-unstyled">
            <li class="sub__style">
                <a href="index.php" class="navigation__menu--item__link">Home</a>
                
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Browse Jobs</a>
                <ul class="submenu sub__style" role="menu">
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="#">Job List</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="job-list-1.html">Job List One</a></li>
                            <li role="menuitem"><a href="job-list-2.html">Job List Two</a></li>
                            <li role="menuitem"><a href="job-list-3.html">Job List Three</a></li>
                            <li role="menuitem"><a href="job-list-4.html">Job List Four</a></li>
                            <li role="menuitem"><a href="job-list-5.html">Job List Five</a></li>
                        </ul>
                    </li>
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="#">Job Details</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="job-details-1.html">Job Details One</a></li>
                            <li role="menuitem"><a href="job-details-2.html">Job Details Two</a></li>
                            <li role="menuitem"><a href="job-details-3.html">Job Details Three</a></li>
                            <li role="menuitem"><a href="job-details-4.html">Job Details Four</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Employers</a>
                <ul class="submenu sub__style" role="menu">
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="employer-1.html">Employer Style</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="employer-1.html">Employer One</a></li>
                            <li role="menuitem"><a href="employer-2.html">Employer Two</a></li>
                            <li role="menuitem"><a href="employer-3.html">Employer Three</a></li>
                        </ul>
                    </li>
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="employer-details-1.html">Employer Details</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="employer-details-1.html">Employer Details 1</a></li>
                            <li role="menuitem"><a href="employer-details-2.html">Employer Details 2</a></li>
                        </ul>
                    </li>
                    <li role="menuitem"><a href="employer-dashboard.html">Employer Dashboard</a></li>
                </ul>
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Candidates</a>
                <ul class="submenu sub__style" role="menu">
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="candidate-1.html">Candidate Style</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="candidate-1.html">Candidate One</a></li>
                            <li role="menuitem"><a href="candidate-2.html">Candidate Two</a></li>
                            <li role="menuitem"><a href="candidate-3.html">Candidate Three</a></li>
                            <li role="menuitem"><a href="candidate-4.html">Candidate Four</a></li>
                        </ul>
                    </li>
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="candidate-details-1.html">Candidate Details</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="candidate-details-1.html">Candidate Details 1</a></li>
                            <li role="menuitem"><a href="candidate-details-2.html">Candidate Details 2</a></li>
                            
                        </ul>
                    </li>
                    <li role="menuitem"><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                </ul>
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Pages</a>
                <ul class="submenu sub__style" role="menu">
                   <li role="menuitem"><a href="blog-2.php">Blog</a></li>
                        <!-- <ul class="sub__style" role="menu">
                          
                            <li role="menuitem"><a href="blog-2.php">Blog Two</a></li> -->
                            <!-- <li role="menuitem"><a href="blog-3.html">Blog Three</a></li>
                            <li role="menuitem"><a href="blog-4.html">Blog Four</a></li>
                            <li role="menuitem"><a href="blog-details.html">Blog Details</a></li>
                        </ul> -->
                    </li>
                    <li role="menuitem"><a href="about.php">About</a></li>
                    <li role="menuitem"><a href="faq.html">Faq</a></li>
                    <li role="menuitem"><a href="tos.html">Terms &amp; Conditions</a></li>
                    <li role="menuitem"><a href="privacy.html">Privacy Policy</a></li>
                    <!-- <li role="menuitem"><a href="pricing.html">Pricing</a></li> -->
                </ul>
            </li>
            &nbsp; &nbsp; &nbsp;
            <li class="sub__style">
                <a href="contact-2.php" class="navigation__menu--item__link">Contact</a>
                <!-- <ul class="submenu sub__style" role="menu">
                    <li role="menuitem"><a href="contact-2.html">Contact Two</a></li>
                </ul> -->
            </li>
        </ul>
    </nav>
</div>
 <div class="header__right__btn d-flex gap-3">
               <?php
    if (isset($_SESSION['employer_name'])) {
        echo '
            <a href="#" class="mall__btn d-none d-sm-flex no__fill__btn border-6 font-sm px-3 py-2 disabled" style="pointer-events:none;">
                👋 Welcome, ' . $_SESSION["employer_name"] . '
            </a>
            <a href="logout.php" class="mall__btn d-none d-sm-flex no__fill__btn border-6 font-sm px-4 py-2">
                <i class="rt-login"></i> Logout
            </a>';
    } else {
        echo '<a href="#" class="small__btn d-none d-sm-flex no__fill__btn border-6 font-sm" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="rt-login"></i> Sign In
              </a>';
    }
    ?>

                            <!-- <a href="#" class="small__btn d-none d-sm-flex no__fill__btn border-6 font-xs" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"> <i class="rt-login"></i>Sign In</a> -->
                            <a href="employer-dash-jobpost.php" class="small__btn d-none d-sm-flex d-xl-flex fill__btn border-6 font-xs" aria-label="Job Posting Button">Add Job</a>
                            <button class="d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><i class="fa-sharp fa-regular fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>