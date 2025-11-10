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
                <li><a href="#">Find Jobs</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="form-sticky stc1">
    <div class="tf-container">
      <div class="job-search-form inner-form-map st1">
        <form method="post">
          <div class="row-group-search">
            <div class="form-group-1">
              <input type="text" class="input-filter-search" placeholder="Job title, key words or company">
              <span class="icon-search search-job"></span>
            </div>
            <div class="form-group-2">
              <span class="icon-map-pin"></span>
              <select class="select-location" style="display: none;">
                <option value="">All Location</option>
                <option value="">All Location 1</option>
                <option value="">All Location 2</option>
                <option value="">All Location 3</option>
              </select>
              <div class="nice-select select-location" tabindex="0">
                <span class="current">All Location</span>
                <ul class="list">
                  <li data-value="" class="option selected focus">All Location</li>
                  <li data-value="" class="option">Singapore</li>
                  <li data-value="" class="option">Japan</li>
                  <li data-value="" class="option">Korea</li>
                  <li data-value="" class="option">Italia</li>
                  <li data-value="" class="option">Canada</li>
                </ul>
              </div>
            </div>
            <div class="form-group-3">
              <span class="icon-filter"></span>
              <select id="select-location" class="select-location filter-radio" style="display: none;">
                <option value="">Filter More</option>
              </select>
            </div>
            <div class="wd-filter-radio">
              <div class="content">
                <div class="fl-cl lc1">
                  <h6>On-site/Remote</h6>
                  <ul>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-1" /><label for="checkbox-1"></label></div>
                      <label>On-site (1,675)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-2" /><label for="checkbox-2"></label></div>
                      <label>Remote (5,675)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-3" /><label for="checkbox-3"></label></div>
                      <label>Hybrid (6,675)</label>
                    </li>
                  </ul>
                </div>
                <div class="fl-cl lc2">
                  <h6>All Job Types</h6>
                  <ul>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-4" /><label for="checkbox-4"></label></div>
                      <label>All Job Types (1,675)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-5" /><label for="checkbox-5"></label></div>
                      <label>Full-time (623)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-6" /><label for="checkbox-6"></label></div>
                      <label>Part-time (45)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-7" /><label for="checkbox-7"></label></div>
                      <label>Contract (65)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-8" /><label for="checkbox-8"></label></div>
                      <label>Internship (9)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-9" /><label for="checkbox-9"></label></div>
                      <label>Temporary (4)</label>
                    </li>
                  </ul>
                </div>
                <div class="fl-cl lc3">
                  <h6>All Salary</h6>
                  <ul>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-10" /><label for="checkbox-10"></label>
                      </div><label>All Salaries (6,277)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-11" /><label for="checkbox-11"></label>
                      </div><label>$50,000+ (2,277)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-12" /><label for="checkbox-12"></label>
                      </div><label>$70,000+ (1,627)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-13" /><label for="checkbox-13"></label>
                      </div><label>$90,000+ (7,627)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-14" /><label for="checkbox-14"></label>
                      </div><label>$110,000+ (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-15" /><label for="checkbox-15"></label>
                      </div><label>$130,000+ (527)</label>
                    </li>
                  </ul>
                </div>
                <div class="fl-cl lc4">
                  <h6>Any Distance</h6>
                  <ul>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-16" /><label for="checkbox-16"></label>
                      </div><label>Any Distance (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-17" /><label for="checkbox-17"></label>
                      </div><label>within 5 miles (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-18" /><label for="checkbox-18"></label>
                      </div><label>within 10 miles (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-19" /><label for="checkbox-19"></label>
                      </div><label>within 25 miles (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-20" /><label for="checkbox-20"></label>
                      </div><label>within 50 miles (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-21" /><label for="checkbox-21"></label>
                      </div><label>within 100 miles (227)</label>
                    </li>
                  </ul>
                </div>
                <div class="fl-cl lc5">
                  <h6>Posted Anytime</h6>
                  <ul>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-22" /><label for="checkbox-22"></label>
                      </div><label>Posted Anytime</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-23" /><label for="checkbox-23"></label>
                      </div><label>Last 1 days (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-24" /><label for="checkbox-24"></label>
                      </div><label>Last 3 days (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-25" /><label for="checkbox-25"></label>
                      </div><label>Last 7 days (227)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-26" /><label for="checkbox-26"></label>
                      </div><label>Last 14 days (227)</label>
                    </li>
                  </ul>
                </div>
                <div class="fl-cl lc6">
                  <h6>All Seniority Levels</h6>
                  <ul>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-27" /><label for="checkbox-27"></label>
                      </div><label>All Seniority Levels</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-28" /><label for="checkbox-28"></label>
                      </div><label>Entry Level (24)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-29" /><label for="checkbox-29"></label>
                      </div><label>Mid Senior Level (34)</label>
                    </li>
                    <li>
                      <div class="round"><input type="checkbox" id="checkbox-30" /><label for="checkbox-30"></label>
                      </div><label>Executive (12)</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="form-group-4">
              <button class="btn btn-find">Find Jobs</button>
            </div>
          </div>

        </form>
        <!-- End Job  Search Form-->
      </div>
    </div>
  </section>

  <section class="inner-jobs-section">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-12 tf-tab">
          <div class="wd-meta-select-job">

            <div class="wd-findjob-filer">
              <div class="group-select-display">
                <a class="button-filter st2"> <i class="icon-filter"></i> Filters</a>
                <div class="inner menu-tab">
                  <a class="btn-display active"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                      viewBox="0 0 17 16" fill="none">
                      <path
                        d="M4.5 0H0.500478C0.5 0.380952 0.5 0.596931 0.5 1.33333V14.6667C0.5 15.4031 0.500478 16 0.500478 16H4.5C4.5 16 4.5 15.4031 4.5 14.6667V1.33333C4.5 0.596931 4.5 0.380952 4.5 0Z"
                        fill="white" />
                      <path
                        d="M10.5 0H6.50048C6.5 0.380952 6.5 0.596931 6.5 1.33333V14.6667C6.5 15.4031 6.50048 16 6.50048 16H10.5C10.5 16 10.5 15.4031 10.5 14.6667V1.33333C10.5 0.596931 10.5 0.380952 10.5 0Z"
                        fill="white" />
                      <path
                        d="M16.5 0H12.5005C12.5 0.380952 12.5 0.596931 12.5 1.33333V14.6667C12.5 15.4031 12.5005 16 12.5005 16H16.5C16.5 16 16.5 15.4031 16.5 14.6667V1.33333C16.5 0.596931 16.5 0.380952 16.5 0Z"
                        fill="white" />
                    </svg></a>
                  <a class="btn-display"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                      viewBox="0 0 17 16" fill="none">
                      <path
                        d="M0.5 12.001L0.5 16.0005C0.880952 16.001 1.09693 16.001 1.83333 16.001L15.1667 16.001C15.9031 16.001 16.5 16.0005 16.5 16.0005L16.5 12.001C16.5 12.001 15.9031 12.001 15.1667 12.001L1.83333 12.001C1.09693 12.001 0.880952 12.001 0.5 12.001Z"
                        fill="#A0A0A0" />
                      <path
                        d="M0.5 6.00098L0.5 10.0005C0.880952 10.001 1.09693 10.001 1.83333 10.001L15.1667 10.001C15.9031 10.001 16.5 10.0005 16.5 10.0005L16.5 6.00098C16.5 6.00098 15.9031 6.00098 15.1667 6.00098L1.83333 6.00098C1.09693 6.00098 0.880952 6.00098 0.5 6.00098Z"
                        fill="#A0A0A0" />
                      <path
                        d="M0.5 0.000976562L0.5 4.0005C0.880952 4.00098 1.09693 4.00098 1.83333 4.00098L15.1667 4.00098C15.9031 4.00098 16.5 4.0005 16.5 4.0005L16.5 0.000975863C16.5 0.000975863 15.9031 0.000975889 15.1667 0.000975921L1.83333 0.000976504C1.09693 0.000976536 0.880952 0.000976546 0.5 0.000976562Z"
                        fill="#A0A0A0" />
                    </svg></a>

                </div>
                <p class="nofi-job"> <span>1249</span> jobs recommended for you</p>
              </div>
              <div class="group-select">
                <select>
                  <option>12 Per Page</option>
                  <option>1 Per Page</option>
                  <option>10 Per Page</option>
                </select>
                <select>
                  <option>Sort by (Defaut)</option>
                  <option>New</option>
                  <option>Last</option>
                </select>
              </div>
            </div>
          </div>
          <div class="content-tab">
            <div class="inner">
              <div class="group-col-2">
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty1.png" alt="images/logo-company/cty1.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">Senior UI/UX Designer</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Full-time</a></li>
                        <li><a href="#">Remote</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty11.png" alt="images/logo-company/cty11.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">Social Media Marketing</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Freelancer</a></li>
                        <li><a href="#">Remote</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty8.png" alt="images/logo-company/cty8.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">HR Administration</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Temporary</a></li>
                        <li><a href="#">On-site</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty10.png" alt="images/logo-company/cty10.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">Full Stack Development</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Part-time</a></li>
                        <li><a href="#">Remote</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty4.png" alt="images/logo-company/cty4.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">Project manager</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Freelancer</a></li>
                        <li><a href="#">Remote</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty7.png" alt="images/logo-company/cty7.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">Senior DevOps Engineer</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Contract</a></li>
                        <li><a href="#">On-site</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty9.png" alt="images/logo-company/cty9.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">Project manager</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Full-time</a></li>
                        <li><a href="#">Remote</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>
                <div class="features-job cl2">
                  <div class="job-archive-header">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/logo-company/cty10.png" alt="images/logo-company/cty10.png">
                      </div>
                      <div class="box-content">
                        <h4>
                          <a href="jobs-single.html">Rockstar Games New York</a>
                        </h4>
                        <h3>
                          <a href="jobs-single.html">Social Media Marketing </a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul>
                          <li>
                            <span class="icon-map-pin"></span>
                            Las Vegas, NV 89107, USA
                          </li>
                          <li>
                            <span class="icon-calendar"></span>
                            2 days ago
                          </li>
                        </ul>
                        <span class="icon-heart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <div class="job-footer-left">
                      <ul class="job-tag">
                        <li><a href="#">Freelancer</a></li>
                        <li><a href="#">Remote</a></li>
                      </ul>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                    <div class="job-footer-right">
                      <div class="price">
                        <span class="icon-dolar1"></span>
                        <p>$83,000 - $110,000 <span class="year">/year</span></p>
                      </div>
                      <p class="days">22 days left to apply</p>
                    </div>
                  </div>
                </div>

              </div>

              <ul class="pagination-job padding">
                <li><a href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
                <li><a href="#">1</a></li>
                <li class="current"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
              </ul>
            </div>
            <div class="inner">
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty8.png" alt="images/logo-company/cty8.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Senior UI/UX Designer</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty11.png" alt="images/logo-company/cty11.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Project manager</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty7.png" alt="images/logo-company/cty7.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Senior UI/UX Designer</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty4.png" alt="images/logo-company/cty4.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Full Stack Development</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty3.png" alt="images/logo-company/cty9.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Full Stack Development</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty7.png" alt="images/logo-company/cty2.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Social Media Marketing </a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty9.png" alt="images/logo-company/cty2.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Senior UI/UX Designer </a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty7.png" alt="images/logo-company/cty2.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">Senior DevOps Engineer</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>
              <div class="features-job style-3 mb1">
                <div class="inner-box">
                  <div class="company">
                    <div class="logo-company">
                      <img src="images/logo-company/cty2.png" alt="images/logo-company/cty2.png">
                    </div>
                    <div class="box-content">
                      <h4>
                        <a href="jobs-single.html">Rockstar Games New York</a>
                      </h4>
                      <h3>
                        <a href="jobs-single.html">HR Administration </a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <div class="star">
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </div>
                    </div>
                  </div>
                  <ul class="info">
                    <li>
                      <span class="icon-map-pin"></span>
                      Las Vegas, NV 89107, USA
                    </li>
                    <li>22 days left to apply</li>
                  </ul>
                  <div class="category">
                    <ul class="job-tag">
                      <li><a href="#"> Full-time</a></li>
                      <li><a href="#"> Hybrid</a></li>
                    </ul>
                  </div>
                  <div class="salary">
                    <span class="icon-dolar1"></span>
                    <p>$83,000 - $110,000 <span class="year">/year</span></p>
                  </div>
                  <div class="group-btn">
                    <span class="icon-heart"></span>
                    <button>Apply</button>
                  </div>
                </div>
              </div>

              <ul class="pagination-job padding">
                <li><a href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
                <li><a href="#">1</a></li>
                <li class="current"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="top-footer">
      <div class="tf-container">
        <div class="row">
          <div class="col-lg-2 col-md-4">
            <div class="footer-logo">
              <img src="images/logo.png" alt="images">
            </div>
          </div>
          <div class="col-lg-10 col-md-8">
            <div class="wd-social d-flex aln-center">
              <span>Follow Us:</span>
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
    </div>
    <div class="inner-footer">
      <div class="tf-container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-cl-1">
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
              <p>Job Searching Just Got Easy. Use Jobtex to run a hiring site and earn money in the process!</p>
              <div class="ft-icon"> <i class="icon-map-pin"></i> 101 E 129th St, East Chicago, IN 46312, US</div>
              <form action="#" id="subscribe-form">
                <input type="email" placeholder="Your email address" required="" id="subscribe-email">
                <button class="tf-button" type="submit" id="subscribe-button"><i
                    class="icon-paper-plane-o"></i></button>
              </form>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-6">
            <div class="footer-cl-2">
              <h6 class="ft-title">
                Quick Links
              </h6>
              <ul class="navigation-menu-footer">
                <li> <a href="find-jobs-list.html">Job Packages</a> </li>
                <li> <a href="find-jobs-list.html">Post New Job</a> </li>
                <li> <a href="find-jobs-list.html">Jobs Listing</a> </li>
                <li> <a href="find-jobs-list.html">Jobs Style Grid</a> </li>
                <li> <a href="employers-list.html">Employer Listing</a> </li>
                <li> <a href="employers-grid-fullwidth.html">Employers Grid</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-cl-3">
              <h6 class="ft-title">
                For Candidates
              </h6>
              <ul class="navigation-menu-footer">
                <li> <a href="dashboard.html">User Dashboard</a> </li>
                <li> <a href="sample-cv.html">CV Packages</a> </li>
                <li> <a href="candidate-list-sidebar.html">Candidate Listing</a> </li>
                <li> <a href="candidate-grid.html">Candidates Grid</a> </li>
                <li> <a href="about-us.html">About us</a> </li>
                <li> <a href="contact-us.html">Contact us </a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-cl-4">
              <h6 class="ft-title">
                For Employers
              </h6>
              <ul class="navigation-menu-footer">
                <li> <a href="find-jobs-list.html">Post New Job</a> </li>
                <li> <a href="employers-list.html">Employer Listing</a> </li>
                <li> <a href="employers-grid-sidebar.html">Employers Grid</a> </li>
                <li> <a href="find-jobs-list.html">Job Packages</a> </li>
                <li> <a href="find-jobs-list.html">Jobs Listing</a> </li>
                <li> <a href="find-jobs-grid.html">Jobs Style Grid</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <div class="footer-cl-5">
              <h6 class="ft-title">
                Download App
              </h6>
              <ul class="ft-download">
                <li> <a href="#"><img src="images/review/btn3.png" alt="images"></a></li>
                <li> <a href="#"><img src="images/review/btn4.png" alt="images"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="tf-container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bt-left">
              <div class="copyright">©2023 Themesflat. All Rights Reserved.</div>
              <span class="select-language">
                <select class="image-select">
                  <option data-thumbnail="images/review/flag.png">English</option>
                  <option data-thumbnail="images/review/flag3.png">USA</option>
                  <option data-thumbnail="images/review/flag2.png">VN</option>
                </select>
              </span>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <ul class="menu-bottom d-flex aln-center">
              <li><a href="term-of-use.html">Terms Of Services</a> </li>
              <li><a href="pricing.html">Privacy Policy</a> </li>
              <li><a href="contact-us.html">Cookie Policy</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div><!-- /.boxed --> 

  <script src="javascript/jquery.min.js"></script>
  <script src="javascript/bootstrap.min.js"></script>
  <script src="javascript/boostrap-select.min.js"></script>
  <script src="javascript/jquery.fancybox.js"></script>
  <script src="javascript/plugin.min.js"></script>
  <script src='javascript/wow.min.js'></script>
  <script src='javascript/swiper.js'></script>
  <script src='javascript/jquery.nice-select.min.js'></script>
  <script src="javascript/main.js"></script>
  <script src="javascript/jquery.cookie.js"></script>
  <script src="javascript/switcher.js"></script>

  <script src="javascript/jquery-ui.min.js"></script>


</body>


<!-- Mirrored from themesflat.co/html/jobtex/find-jobs-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 May 2025 13:28:33 GMT -->
</html>