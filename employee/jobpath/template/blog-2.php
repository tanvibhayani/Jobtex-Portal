<?php
    include 'header.php';
?>
    <!-- breadcrumb area -->
    <div class="rts__section breadcrumb__background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative d-flex justify-content-between align-items-center">
                <div class="breadcrumb__area max-content breadcrumb__padding z-2">
                    <h1 class="breadcrumb-title h3 mb-3">Blog 2</h1>
                    <nav>
                        <ul class="breadcrumb m-0 lh-1">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Blog 2</li>
                        </ul>
                    </nav>                  
                </div>
                <div class="breadcrumb__area__shape d-flex gap-4 justify-content-end align-items-center">
                    <div class="shape__one common">
                        <img src="assets/img/breadcrumb/shape-1.svg" alt="">
                    </div>
                    <div class="shape__two common">
                        <img src="assets/img/breadcrumb/shape-2.svg" alt="">
                    </div>
                    <div class="shape__three common">
                        <img src="assets/img/breadcrumb/shape-3.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- breadcrumb area end -->

    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-30">
                <div class="col-xl-4 col-lg-5">
                    <div class="job__search__section mb-40">
                        <div class="d-flex flex-column gap-3">
                            <div class="search__item">
                                <label for="search" class="mb-20 font-20 fw-medium text-dark text-capitalize">Search By Job Title</label>
                                <div class="position-relative">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Enter Type Of job" required>
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </form>
                                </div>
                            </div>
                            <!-- category item -->
                            <div class="search__item">
                                <h6 class="mb-20 font-20 fw-medium text-dark text-capitalize">Category</h6>
                                <div class="search__item__list">

                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="web" id="web">
                                            <label for="web">Web Development</label>
                                        </div>
                                        <span>(130)</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="design" id="design">
                                            <label for="design">Website Design</label>
                                        </div>
                                        <span>(80)</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="ux" id="ux">
                                            <label for="ux">UI/UX  Design</label>
                                        </div>
                                        <span>(45)</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="dev" id="dev">
                                            <label for="dev">Development</label>
                                        </div>
                                        <span>(100)</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="business" id="business">
                                            <label for="business">Business & Marketing</label>
                                        </div>
                                        <span>(80)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- category item end -->

                            <!-- Author label -->
                            <div class="search__item">
                                <h6 class="mb-20 font-20 fw-medium text-dark text-capitalize">Author</h6>
                                <div class="search__item__list">
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="jon" id="jon">
                                            <label for="jon">Jonathon Doe</label>
                                        </div>
                                        <span>(10)</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="jack" id="jack">
                                            <label for="jack">Jack Alexander</label>
                                        </div>
                                        <span>(15)</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="emma" id="emma">
                                            <label for="emma">Emma Elizabeth</label>
                                        </div>
                                        <span>(20)</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between list">
                                        <div class="d-flex gap-2 align-items-center checkbox">
                                            <input type="checkbox" name="Michael" id="Michael">
                                            <label for="Michael">Michael Roy</label>
                                        </div>
                                        <span>(45)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Author label end -->

                            <!-- tags -->
                                <div class="search__item">
                                <h6 class="mb-20 font-20 fw-medium text-dark text-capitalize">Tags</h6>
                                <div class="job__tags d-flex flex-wrap gap-3">
                                    <a href="#">Course</a>
                                    <a href="#">Design</a>
                                    <a href="#">Web Development</a>
                                    <a href="#">Business</a>
                                    <a href="#">UI/UX</a>
                                </div>
                                </div>
                            <!-- tags end -->

                            <!-- latest blog -->
                            <div class="search__item">
                                <h6 class="mb-20 font-20 fw-medium text-dark text-capitalize">Latest Blog</h6>
                                <div class="d-flex flex-column gap-4">
                                    <div class="latest__blog d-flex align-items-center gap-4 flex-wrap flex-sm-nowrap flex-xxl-nowrap flex-lg-wrap flex-md-nowrap">
                                        <div class="thumb">
                                            <img class="rounded-2" src="assets/img/pages/blog-2/r-1.webp" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="blog-details.html" class="fw-semibold ">Start an online Job and work 
                                                from home</a>
                                            <span class="d-flex mt-2 gap-2 align-items-center fw-medium"> <img class="svg" height="16" width="16" src="assets/img/icon/calender.svg" alt=""> 20 March, 2022</span>
                                        </div>
                                    </div>
                                    <div class="latest__blog d-flex align-items-center gap-4 flex-wrap flex-sm-nowrap flex-xxl-nowrap flex-lg-wrap flex-md-nowrap">
                                        <div class="thumb">
                                            <img class="rounded-2" src="assets/img/pages/blog-2/r-2.webp" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="blog-details.html" class="fw-semibold ">7 Ways Job Post Has 
                                                Improved Business Today</a>
                                            <span class="d-flex mt-2 gap-2 align-items-center fw-medium"> <img class="svg" height="16" width="16" src="assets/img/icon/calender.svg" alt=""> 20 March, 2022</span>
                                        </div>
                                    </div>
                                    <div class="latest__blog d-flex align-items-center gap-4 flex-wrap flex-sm-nowrap flex-xxl-nowrap flex-lg-wrap flex-md-nowrap">
                                        <div class="thumb">
                                            <img class="rounded-2" src="assets/img/pages/blog-2/r-3.webp" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="blog-details.html" class="fw-semibold ">Insider Strategies For Success
                                                On Job Website</a>
                                            <span class="d-flex mt-2 gap-2 align-items-center fw-medium"> <img class="svg" height="16" width="16" src="assets/img/icon/calender.svg" alt=""> 20 March, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- latest blog end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="row g-30">
                        <!-- single blog -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="rts__single__blog">
                                <a href="blog-details.html" class="blog__img">
                                    <img src="assets/img/pages/blog-2/1.webp" class="mb-2" alt="blog">
                                </a>
                                <div class="blog__meta">
                                    <div class="blog__meta__info d-flex gap-3 mt-3 mb-2 flex-wrap">
                                        <span class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/calender.svg" alt="" height="16" width="16"> 20 March, 2022</span>
                                        <a href="#" class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/user.svg" alt="" width="12" height="12"> Jon Adom</a>
                                    </div>
                                    <a href="blog-details.html" class="h6 fw-semibold">
                                        Start an online Job and work from home
                                    </a>
                                    <a href="blog-details.html" class="readmore__btn d-flex mt-3 gap-2 align-items-center">Read More <i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->
                        <!-- single blog -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="rts__single__blog">
                                <a href="blog-details.html" class="blog__img">
                                    <img src="assets/img/pages/blog-2/2.webp" class="mb-2" alt="blog">
                                </a>
                                <div class="blog__meta">
                                    <div class="blog__meta__info d-flex gap-3 mt-3 mb-2 flex-wrap">
                                        <span class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/calender.svg" alt="" width="16" height="16"> 20 March, 2022</span>
                                        <a href="#" class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/user.svg" alt="" width="12" height="12"> Jon Adom</a>
                                    </div>
                                    <a href="blog-details.html" class="h6 fw-semibold">
                                        Insider Strategies for Success on Job Websites
                                    </a>
                                    <a href="blog-details.html" class="readmore__btn d-flex mt-3 gap-2 align-items-center">Read More <i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->
                        <!-- single blog -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="rts__single__blog">
                                <a href="blog-details.html" class="blog__img">
                                    <img src="assets/img/pages/blog-2/3.webp" class="mb-2" alt="blog">
                                </a>
                                <div class="blog__meta">
                                    <div class="blog__meta__info d-flex gap-3 mt-3 mb-2 flex-wrap">
                                        <span class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/calender.svg" alt="" height="16" width="16"> 20 March, 2022</span>
                                        <a href="#" class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/user.svg" alt="" width="12" height="12"> Jon Adom</a>
                                    </div>
                                    <a href="blog-details.html" class="h6 fw-semibold">
                                        Expert Tips for Mastering Job Websites Dream Job
                                    </a>
                                    <a href="blog-details.html" class="readmore__btn d-flex mt-3 gap-2 align-items-center">Read More <i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->
                        <!-- single blog -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="rts__single__blog">
                                <a href="blog-details.html" class="blog__img">
                                    <img src="assets/img/pages/blog-2/4.webp" class="mb-2" alt="blog">
                                </a>
                                <div class="blog__meta">
                                    <div class="blog__meta__info d-flex gap-3 mt-3 mb-2 flex-wrap">
                                        <span class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/calender.svg" alt="" height="16" width="16"> 20 March, 2022</span>
                                        <a href="#" class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/user.svg" alt="" width="12" height="12"> Jon Adom</a>
                                    </div>
                                    <a href="blog-details.html" class="h6 fw-semibold">
                                        How to Negotiate Salary with Your Employer
                                    </a>
                                    <a href="blog-details.html" class="readmore__btn d-flex mt-3 gap-2 align-items-center">Read More <i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->
                        <!-- single blog -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="rts__single__blog">
                                <a href="blog-details.html" class="blog__img">
                                    <img src="assets/img/pages/blog-2/5.webp" class="mb-2" alt="blog">
                                </a>
                                <div class="blog__meta">
                                    <div class="blog__meta__info d-flex gap-3 mt-3 mb-2 flex-wrap">
                                        <span class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/calender.svg" alt="" height="16" width="16"> 20 March, 2022</span>
                                        <a href="#" class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/user.svg" alt="" width="12" height="12"> Jon Adom</a>
                                    </div>
                                    <a href="blog-details.html" class="h6 fw-semibold">
                                        Want to Work in One of The World’s New Careers
                                    </a>
                                    <a href="blog-details.html" class="readmore__btn d-flex mt-3 gap-2 align-items-center">Read More <i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->
                        <!-- single blog -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="rts__single__blog">
                                <a href="blog-details.html" class="blog__img">
                                    <img src="assets/img/pages/blog-2/6.webp" class="mb-2" alt="blog">
                                </a>
                                <div class="blog__meta">
                                    <div class="blog__meta__info d-flex gap-3 mt-3 mb-2 flex-wrap">
                                        <span class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/calender.svg" alt="" height="16" width="16"> 20 March, 2022</span>
                                        <a href="#" class="d-flex gap-2 align-items-center fw-medium"> <img class="svg" src="assets/img/icon/user.svg" alt="" width="12" height="12"> Jon Adom</a>
                                    </div>
                                    <a href="blog-details.html" class="h6 fw-semibold">
                                        7 Ways Job Post Has Improved Business Today
                                    </a>
                                    <a href="blog-details.html" class="readmore__btn d-flex mt-3 gap-2 align-items-center">Read More <i class="fa-light fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->
                    </div>
                    <div class="rts__pagination mx-auto pt-60 max-content">
                        <ul class="d-flex gap-2">
                            <li><a href="#" class="inactive"><i class="rt-chevron-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="rt-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row">
                <div class="rts__appcenter">
                    <div class="rts__appcenter__shape">
                        <img src="assets/img/home-1/app/shape.png" alt="">
                    </div>
                    <div class="rts__appcenter__content d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between justify-content-lg-center">
                        <div class="content__left align-items-end d-flex position-relative top-15px">
                            <img src="assets/img/home-1/app/app_screen.png" alt="">
                        </div>
                        <div class="content__right text-white text-center text-xl-start max-630">
                            <h3 class="l--1 mb-4 text-white wow animated fadeInUp" data-wow-delay=".1s ">Download The app Free!</h3>
                            <p class="wow animated fadeInUp" data-wow-delay=".2s">Looking for a new job can be both exciting and daunting. Navigating the job market involves exploring various avenues.</p>
                            <div class="d-flex gap-3 justify-content-center justify-content-xl-start flex-wrap mt-40 wow animated fadeInUp" data-wow-delay=".3s">
                                <div class="link">
                                    <a href="https://appstore.com/" target="_blank" title="app store">
                                        <img src="assets/img/home-1/app/app-store.svg" alt="">
                                    </a>
                                </div>
                                <div class="link">
                                    <a href="https://google.com/" target="_blank" title="play store">
                                        <img src="assets/img/home-1/app/play-store.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

    

<?php
    include 'login.php';
?>