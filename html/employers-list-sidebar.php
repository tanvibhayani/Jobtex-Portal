<?php
    include 'header.php';
?>

  <section class="bg-f5 breadcrumb-section">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title">
            <div class="widget-menu-link">
              <ul>
                <li><a href="home-01.php">Home</a></li>
                <li><a href="#">Employers</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="inner-employer-section-two">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-12">
          <div class="group-4-8">
            <div class="cl4">
              <div class="widget-filter st2  style-scroll po-sticky">
                <form action="https://themesflat.co/html/jobtex/GET">
                  <div class="group-form">
                    <label class="title">Search Company</label>
                    <div class="group-input search-ip">
                      <button><i class="icon-search"></i></button>
                      <input type="text" placeholder="Keywork" required="">
                    </div>
                  </div>
                  <div class="group-form">
                    <label class="title">Location</label>
                    <div class="group-input has-icon">
                      <i class="icon-map-pin"></i>
                      <select>
                        <option value="0">All Location</option>
                        <option value="0">India</option>
                        <option value="0">Singapore</option>
                        <option value="0">French</option>
                      </select>
                      <div class="nice-select" tabindex="0"><span class="current">All Location</span>
                        <ul class="list">
                          <li data-value="0" class="option selected">All Location</li>
                          <li data-value="0" class="option">India</li>
                          <li data-value="0" class="option">Singapore</li>
                          <li data-value="0" class="option">French</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="group-form">
                    <label class="title">Job Title</label>
                    <div class="group-input">
                      <select>
                        <option value="0">Design &amp; Creative </option>
                        <option value="0">Design</option>
                        <option value="0">Ux/Ui</option>
                      </select>
                      <div class="nice-select" tabindex="0"><span class="current">Design &amp; Creative </span>
                        <ul class="list">
                          <li data-value="0" class="option selected">Design &amp; Creative </li>
                          <li data-value="0" class="option">Design</li>
                          <li data-value="0" class="option">Ux/Ui</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="group-form">
                    
                    <div class="group-range-title">
                      <label>Radius: </label>
                      <input class="one-range" type="text" id="amount" readonly> 
                    </div>
                    
                    <div id="slider-range-min"></div>

                  </div>
                  <div class="group-form">
                    <label class="title">Company Size</label>
                    <div class="group-input">
                      <select>
                        <option value="0">Company </option>
                        <option value="0">Website</option>
                      </select>
                      <div class="nice-select" tabindex="0"><span class="current">1-5 employees</span>
                        <ul class="list">
                          <li data-value="0" class="option selected">1-5 employees</li>
                          <li data-value="0" class="option">Website</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <button type="submit">Find Jobs</button>
                </form>
              </div>
            </div>
            <div class="cl8 tf-tab">
              <div class="wd-meta-select-job">

                <div class="wd-findjob-filer">
                  <div class="group-select-display">
                    <div class="inner menu-tab">
                      <a class="btn-display active"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                        viewBox="0 0 17 16" fill="none">
                        <path
                          d="M0.5 12.001L0.5 16.0005C0.880952 16.001 1.09693 16.001 1.83333 16.001L15.1667 16.001C15.9031 16.001 16.5 16.0005 16.5 16.0005L16.5 12.001C16.5 12.001 15.9031 12.001 15.1667 12.001L1.83333 12.001C1.09693 12.001 0.880952 12.001 0.5 12.001Z"
                          fill="#A0A0A0"></path>
                        <path
                          d="M0.5 6.00098L0.5 10.0005C0.880952 10.001 1.09693 10.001 1.83333 10.001L15.1667 10.001C15.9031 10.001 16.5 10.0005 16.5 10.0005L16.5 6.00098C16.5 6.00098 15.9031 6.00098 15.1667 6.00098L1.83333 6.00098C1.09693 6.00098 0.880952 6.00098 0.5 6.00098Z"
                          fill="#A0A0A0"></path>
                        <path
                          d="M0.5 0.000976562L0.5 4.0005C0.880952 4.00098 1.09693 4.00098 1.83333 4.00098L15.1667 4.00098C15.9031 4.00098 16.5 4.0005 16.5 4.0005L16.5 0.000975863C16.5 0.000975863 15.9031 0.000975889 15.1667 0.000975921L1.83333 0.000976504C1.09693 0.000976536 0.880952 0.000976546 0.5 0.000976562Z"
                          fill="#A0A0A0"></path>
                      </svg></a>
                      <a class="btn-display"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                          viewBox="0 0 17 16" fill="none">
                          <path
                            d="M4.5 0H0.500478C0.5 0.380952 0.5 0.596931 0.5 1.33333V14.6667C0.5 15.4031 0.500478 16 0.500478 16H4.5C4.5 16 4.5 15.4031 4.5 14.6667V1.33333C4.5 0.596931 4.5 0.380952 4.5 0Z"
                            fill="white"></path>
                          <path
                            d="M10.5 0H6.50048C6.5 0.380952 6.5 0.596931 6.5 1.33333V14.6667C6.5 15.4031 6.50048 16 6.50048 16H10.5C10.5 16 10.5 15.4031 10.5 14.6667V1.33333C10.5 0.596931 10.5 0.380952 10.5 0Z"
                            fill="white"></path>
                          <path
                            d="M16.5 0H12.5005C12.5 0.380952 12.5 0.596931 12.5 1.33333V14.6667C12.5 15.4031 12.5005 16 12.5005 16H16.5C16.5 16 16.5 15.4031 16.5 14.6667V1.33333C16.5 0.596931 16.5 0.380952 16.5 0Z"
                            fill="white"></path>
                        </svg></a>
                      

                    </div>
                    <p class="nofi-job"> <span>1249</span> employers recommended for you</p>
                  </div>
                  <div class="group-select">
                    <select>
                      <option>12 Per Page</option>
                      <option>1 Per Page</option>
                      <option>10 Per Page</option>
                    </select>
                    <div class="nice-select" tabindex="0"><span class="current">12 Per Page</span>
                      <ul class="list">
                        <li data-value="12 Per Page" class="option selected">12 Per Page</li>
                        <li data-value="1 Per Page" class="option">1 Per Page</li>
                        <li data-value="10 Per Page" class="option">10 Per Page</li>
                      </ul>
                    </div>
                    <select>
                      <option>Sort by (Defaut)</option>
                      <option>New</option>
                      <option>Last</option>
                    </select>
                    <div class="nice-select" tabindex="0"><span class="current">Sort by (Defaut)</span>
                      <ul class="list">
                        <li data-value="Sort by (Defaut)" class="option selected">Sort by (Defaut)</li>
                        <li data-value="New" class="option">New</li>
                        <li data-value="Last" class="option">Last</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="content-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="employer-block style-2">
                      <div class="inner-box">
                        <div class="logo-company">
                          <img src="images/logo-company/cty9.png" alt="images/logo-company/cty9.png" />
                        </div>
                        <div class="box-content">
                          <div class="star">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                          </div>
                          <h3>
                            <a href="employers-single.html">Bluth Company</a>
                            <span class="icon-bolt"></span>
                          </h3>
                          <p class="info">
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </p>
                        </div>
                        <div class="button-readmore">
                          <span class="icon-heart"></span>
                          <button class="btn-employer">
                            0 job openings
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="employer-block style-2">
                      <div class="inner-box">
                        <div class="logo-company">
                          <img src="images/logo-company/cty3.png" alt="images/logo-company/cty3.png" />
                        </div>
                        <div class="box-content">
                          <div class="star">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                          </div>
                          <h3>
                            <a href="employers-single.html">Genco Company</a>
                            <span class="icon-bolt"></span>
                          </h3>
                          <p class="info">
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </p>
                        </div>
                        <div class="button-readmore">
                          <span class="icon-heart"></span>
                          <button class="btn-employer">
                            7 job openings
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="employer-block style-2">
                      <div class="inner-box">
                        <div class="logo-company">
                          <img src="images/logo-company/cty6.png" alt="images/logo-company/cty6.png" />
                        </div>
                        <div class="box-content">
                          <div class="star">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                          </div>
                          <h3>
                            <a href="employers-single.html">SP-holding</a>
                            <span class="icon-bolt"></span>
                          </h3>
                          <p class="info">
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </p>
                        </div>
                        <div class="button-readmore">
                          <span class="icon-heart"></span>
                          <button class="btn-employer">
                            4 job openings
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="employer-block style-2">
                      <div class="inner-box">
                        <div class="logo-company">
                          <img src="images/logo-company/cty4.png" alt="images/logo-company/cty4.png" />
                        </div>
                        <div class="box-content">
                          <div class="star">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                          </div>
                          <h3>
                            <a href="employers-single.html">Umbrella Corporation</a>
                            <span class="icon-bolt"></span>
                          </h3>
                          <p class="info">
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </p>
                        </div>
                        <div class="button-readmore">
                          <span class="icon-heart"></span>
                          <button class="btn-employer">
                            0 job openings
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="employer-block style-2">
                      <div class="inner-box">
                        <div class="logo-company">
                          <img src="images/logo-company/cty2.png" alt="images/logo-company/cty2.png" />
                        </div>
                        <div class="box-content">
                          <div class="star">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                          </div>
                          <h3>
                            <a href="employers-single.html">Bubba Gump</a>
                            <span class="icon-bolt"></span>
                          </h3>
                          <p class="info">
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </p>
                        </div>
                        <div class="button-readmore">
                          <span class="icon-heart"></span>
                          <button class="btn-employer">
                            4 job openings
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="employer-block style-2">
                      <div class="inner-box">
                        <div class="logo-company">
                          <img src="images/logo-company/cty7.png" alt="images/logo-company/cty7.png" />
                        </div>
                        <div class="box-content">
                          <div class="star">
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                            <span class="icon-star-full"></span>
                          </div>
                          <h3>
                            <a href="employers-single.html">Acme Corporation</a>
                            <span class="icon-bolt"></span>
                          </h3>
                          <p class="info">
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </p>
                        </div>
                        <div class="button-readmore">
                          <span class="icon-heart"></span>
                          <button class="btn-employer">
                            2 job openings
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="group-col-3">
                  <!--employer-block-1-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty16.png" alt="images/logo-company/cty16.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Abstergo Ltd.</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Skyline Properties
                        </p>
                      </div>
  
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          7 job openings
                        </button>
                      </div>
                    </div>
                  </div>
                  <!--employer-block-2-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty7.png" alt="images/logo-company/cty7.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Abstergo Ltd.</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Larmier Commercial Complex
                        </p>
                      </div>
  
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          Open Job 2
                        </button>
                      </div>
                    </div>
                  </div>
                  <!--employer-block-3-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty15.png" alt="images/logo-company/cty15.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Big Kahuna Burger Ltd.</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          West Modern Locations
                        </p>
                      </div>
  
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          Open Job 2
                        </button>
                      </div>
                    </div>
                  </div>
                  <!--employer-block-4-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty13.png" alt="images/logo-company/cty13.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Aprico</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Las Vegas, NV 89107, USA
                        </p>
                      </div>
  
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          1 job openings
                        </button>
                      </div>
                    </div>
                  </div>
                  <!--employer-block-5-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty9.png" alt="images/logo-company/cty9.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Rose Microsystems</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Larmier Commercial Complex
                        </p>
                      </div>
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          1 job openings
                        </button>
                      </div>
  
  
                    </div>
                  </div>
                  <!--employer-block-6-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty17.png" alt="images/logo-company/cty17.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Tiger well</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          West Modern Locations
                        </p>
                      </div>
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          1 job openings
                        </button>
                      </div>
  
  
                    </div>
                  </div>
                  <!--employer-block-7-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty10.png" alt="images/logo-company/cty10.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Voyagetronics</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Las Vegas, NV 89107, USA
                        </p>
                      </div>
  
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          1 job openings
                        </button>
                      </div>
                    </div>
                  </div>
                  <!--employer-block-8-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty7.png" alt="images/logo-company/cty7.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Imagine Solutions</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Larmier Commercial Complex
                        </p>
                      </div>
  
                      <div class="group-btn">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          1 job openings
                        </button>
                      </div>
                    </div>
                  </div>
                  <!--employer-block-9-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty14.png" alt="images/logo-company/cty14.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Sun show.</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          West Modern Locations
                        </p>
                      </div>
                      <span class="icon-heart"></span>
                      <button class="btn-employer">
                        1 job openings
                      </button>
                      <div>
  
                      </div>
                    </div>
                  </div>
                  <!--employer-block-10-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty11.png" alt="images/logo-company/cty11.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Mermedia</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Las Vegas, NV 89107, USA
                        </p>
                      </div>
                      <span class="icon-heart"></span>
                      <button class="btn-employer">
                        1 job openings
                      </button>
                      <div>
  
                      </div>
                    </div>
                  </div>
                  <!--employer-block-11-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty12.png" alt="images/logo-company/cty12.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Sanitarium Services</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          Larmier Commercial Complex
                        </p>
                      </div>
                      <span class="icon-heart"></span>
                      <button class="btn-employer">
                        1 job openings
                      </button>
                      <div>
  
                      </div>
                    </div>
                  </div>
                  <!--employer-block-12-->
                  <div class="employer-block style-3 cl3">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty9.png" alt="images/logo-company/cty9.png" />
                      </div>
                      <div class="box-content">
                        <div class="star">
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                          <span class="icon-star-full"></span>
                        </div>
                        <h3>
                          <a href="employers-single.html">Granite Industries</a>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          West Modern Locations
                        </p>
                      </div>
                      <span class="icon-heart"></span>
                      <button class="btn-employer">
                        1 job openings
                      </button>
                      <div>
  
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <ul class="pagination-job p-top">
          <li><a href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
          <li><a href="#">1</a></li>
          <li class="current"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
        </ul>
      </div>
    </div>
  </section>

<?php
    include 'footer.php';
?>