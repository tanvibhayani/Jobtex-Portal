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
                <li><a href="#">Find Candidates</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="candidates-section">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-4 ctn2">
          <div class="content-left style2 po-sticky">
            <div class="inner st-filter">
              <div class="widget-filter no-scroll mb1">
                <form action="https://themesflat.co/html/jobtex/GET">
                  <div class="group-form">
                    <label class="title">Search by Keywords</label>
                    <div class="group-input search-ip">
                      <button><i class="icon-search"></i></button>
                      <input type="text" placeholder="Keywork" required />
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
                    </div>
                  </div>
                  <div class="group-form">
                    <label class="title">Job Title</label>
                    <div class="group-input">
                      <select>
                        <option value="0">Design & Creative</option>
                        <option value="0">Design</option>
                        <option value="0">Ux/Ui</option>
                      </select>
                    </div>
                  </div>

                  <div class="group-form">
                    
                    <div class="group-range-title">
                      <label>Age: </label>
                      <input class="one-range" type="text" id="amount" readonly> 
                    </div>
                    
                    <div id="slider-range-min-2"></div>

                  </div>
                  <div class="group-form">
                    <label class="title">Salary Estimate</label>
                    <div class="group-input">
                      <select>
                        <option value="0">Male</option>
                        <option value="0">Website</option>
                      </select>
                    </div>
                  </div>
                  <div class="group-form">
                    <label class="title">Experrience</label>
                    <div class="group-input">
                      <select>
                        <option value="0">1 year experience</option>
                        <option value="0">2 year experience</option>
                      </select>
                    </div>
                  </div>
                  <div class="group-form">
                    <label class="title">Qualification </label>
                    <div class="group-input">
                      <select>
                        <option value="0">Certificate</option>
                        <option value="0">Certificate 2</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit">Find Employers</button>
                </form>
              </div>
              <div class="widget-filter no-scroll">
                <form action="https://themesflat.co/html/jobtex/GET">
                  <div class="group-form">
                    <label class="title">Title </label>
                    <div class="group-input">
                      <select>
                        <option value="0">Marketing</option>
                        <option value="0">2 year experience</option>
                      </select>
                    </div>
                  </div>
                  <div class="group-form">
                    <label class="title">Email Frequency</label>
                    <div class="group-input">
                      <select>
                        <option value="0">Weekly</option>
                        <option value="0">Weekly 2</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit">save job Alert</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8 tf-tab ctn2">
          <div class="wd-meta-select-job">
            <div class="wd-findjob-filer">
              <div class="group-select-display">
                <div class="inner menu-tab">
                  <a class="btn-display active"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
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
                  <a class="btn-display current"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
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
                </div>
                <p class="nofi-job">
                  <span>1249</span> candidates recommended for you
                </p>
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
          <div class="content-tab no-scroll">
            <div class="inner">
              <div class="features-job candidate-layout wd-thum-career">
                <div class="job-archive-header">
                  <div class="career-header-left">
                    <img src="images/user/avatar/avt-thumb-01.jpg" alt="images/user/avatar/avt-thumb-01.jpg"
                      class="thumb" />
                    <div class="career-left-inner">
                      <h4>
                        <a href="candidate-single.html">Entry Level Network Administrator</a>
                      </h4>
                      <h3>
                        <a href="candidate-single.html">Marvin McKinney</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <ul class="career-info">
                        <li>Available now</li>
                        <li>
                          <span class="icon-map-pin"></span>
                          New York
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="career-header-right">
                    <span class="icon-heart"></span>
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="job-archive-footer">
                  <div class="career-footer-left">
                    <ul class="career-tag">
                      <li><a href="#">Blender</a></li>
                      <li><a href="#">Sketch</a></li>
                      <li><a href="#">Adobe XD</a></li>
                      <li><a href="#">Figma</a></li>
                    </ul>
                  </div>
                  <div class="carrer-footer-right">
                    <span class="icon-dolar1"></span>
                    <p>$8000/month</p>
                  </div>
                </div>
              </div>
              <div class="features-job candidate-layout wd-thum-career">
                <div class="job-archive-header">
                  <div class="career-header-left">
                    <img src="images/review/can1.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                    <div class="career-left-inner">
                      <h4>
                        <a href="candidate-single.html">Computational Wizard</a>
                      </h4>
                      <h3>
                        <a href="candidate-single.html">Arlene McCoy</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <ul class="career-info">
                        <li>Available now</li>
                        <li>
                          <span class="icon-map-pin"></span>
                          Tokyo, Japan
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="career-header-right">
                    <span class="icon-heart"></span>
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="job-archive-footer">
                  <div class="career-footer-left">
                    <ul class="career-tag">
                      <li><a href="#">Blender</a></li>
                      <li><a href="#">Sketch</a></li>
                      <li><a href="#">Adobe XD</a></li>
                      <li><a href="#">Figma</a></li>
                    </ul>
                  </div>
                  <div class="carrer-footer-right">
                    <span class="icon-dolar1"></span>
                    <p>$40/hour</p>
                  </div>
                </div>
              </div>
              <div class="features-job candidate-layout wd-thum-career">
                <div class="job-archive-header">
                  <div class="career-header-left">
                    <img src="images/review/can2.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                    <div class="career-left-inner">
                      <h4>
                        <a href="candidate-single.html">Computer Support Specialist</a>
                      </h4>
                      <h3>
                        <a href="candidate-single.html">Floyd Miles</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <ul class="career-info">
                        <li>Available now</li>
                        <li>
                          <span class="icon-map-pin"></span>
                          Tokyo, Japan
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="career-header-right">
                    <span class="icon-heart"></span>
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="job-archive-footer">
                  <div class="career-footer-left">
                    <ul class="career-tag">
                      <li><a href="#">Blender</a></li>
                      <li><a href="#">Sketch</a></li>
                      <li><a href="#">Adobe XD</a></li>
                      <li><a href="#">Figma</a></li>
                    </ul>
                  </div>
                  <div class="carrer-footer-right">
                    <span class="icon-dolar1"></span>
                    <p>$300/hour</p>
                  </div>
                </div>
              </div>
              <div class="features-job candidate-layout wd-thum-career">
                <div class="job-archive-header">
                  <div class="career-header-left">
                    <img src="images/review/can3.png" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                    <div class="career-left-inner">
                      <h4>
                        <a href="candidate-single.html">Computer Support Specialist</a>
                      </h4>
                      <h3>
                        <a href="candidate-single.html">Annette Black</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <ul class="career-info">
                        <li>Available now</li>
                        <li>
                          <span class="icon-map-pin"></span>
                          Tokyo, Japan
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="career-header-right">
                    <span class="icon-heart"></span>
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="job-archive-footer">
                  <div class="career-footer-left">
                    <ul class="career-tag">
                      <li><a href="#">Blender</a></li>
                      <li><a href="#">Sketch</a></li>
                      <li><a href="#">Adobe XD</a></li>
                      <li><a href="#">Figma</a></li>
                    </ul>
                  </div>
                  <div class="carrer-footer-right">
                    <span class="icon-dolar1"></span>
                    <p>$500/hour</p>
                  </div>
                </div>
              </div>
              <div class="features-job candidate-layout wd-thum-career">
                <div class="job-archive-header">
                  <div class="career-header-left">
                    <img src="images/review/can4.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                    <div class="career-left-inner">
                      <h4>
                        <a href="candidate-single.html">Digital Overlord</a>
                      </h4>
                      <h3>
                        <a href="candidate-single.html">Maverick Nguyen</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <ul class="career-info">
                        <li>Available now</li>
                        <li>
                          <span class="icon-map-pin"></span>
                          Tokyo, Japan
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="career-header-right">
                    <span class="icon-heart"></span>
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="job-archive-footer">
                  <div class="career-footer-left">
                    <ul class="career-tag">
                      <li><a href="#">Blender</a></li>
                      <li><a href="#">Sketch</a></li>
                      <li><a href="#">Adobe XD</a></li>
                      <li><a href="#">Figma</a></li>
                    </ul>
                  </div>
                  <div class="carrer-footer-right">
                    <span class="icon-dolar1"></span>
                    <p>$5000/month</p>
                  </div>
                </div>
              </div>
              <div class="features-job candidate-layout wd-thum-career">
                <div class="job-archive-header">
                  <div class="career-header-left">
                    <img src="images/review/can5.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                    <div class="career-left-inner">
                      <h4>
                        <a href="candidate-single.html">Computer Hardware Engineer</a>
                      </h4>
                      <h3>
                        <a href="candidate-single.html">Kathryn Murphy</a>
                        <span class="icon-bolt"></span>
                      </h3>
                      <ul class="career-info">
                        <li>Available now</li>
                        <li>
                          <span class="icon-map-pin"></span>
                          Tokyo, Japan
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="career-header-right">
                    <span class="icon-heart"></span>
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="job-archive-footer">
                  <div class="career-footer-left">
                    <ul class="career-tag">
                      <li><a href="#">Blender</a></li>
                      <li><a href="#">Sketch</a></li>
                      <li><a href="#">Adobe XD</a></li>
                      <li><a href="#">Figma</a></li>
                    </ul>
                  </div>
                  <div class="carrer-footer-right">
                    <span class="icon-dolar1"></span>
                    <p>$400/day</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="inner">
              <div class="group-col-2">
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can10.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Co-Host</a>
                        </h4>
                        <h3>
                          <a href="#">Eleanor Pena</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            40$/hour
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can11.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Content Marketer</a>
                        </h4>
                        <h3>
                          <a href="#">Brooklyn Simmons</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            3000$/month
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can12.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Grant Writer</a>
                        </h4>
                        <h3>
                          <a href="#">Annette Black</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            300$/week
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can13.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Host</a>
                        </h4>
                        <h3>
                          <a href="#">Wade Warren</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            40$/hour
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can14.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Social Media Socialist</a>
                        </h4>
                        <h3>
                          <a href="#">Marvin McKinney</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            $120/day
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can15.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Blogger</a>
                        </h4>
                        <h3>
                          <a href="#">Dianne Russell</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            300$/week
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can16.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Anchor</a>
                        </h4>
                        <h3>
                          <a href="#">Devon Lane</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            3000$/month
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
                <div class="features-job wd-thum-career style-2 cl2 mb1">
                  <div class="job-archive-header">
                    <div class="career-header-left">
                      <img src="images/review/can17.jpg" alt="images/user/avatar/avt-thumb-01.jpg" class="thumb" />
                      <div class="career-left-inner">
                        <h4>
                          <a href="#">Deputy Editor</a>
                        </h4>
                        <h3>
                          <a href="#">Kathryn Murphy</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <ul class="career-info">
                          <li>Available now</li>
                          <li>
                            <span class="icon-map-pin"></span>
                            Tokyo, Japan
                          </li>
                          <li>
                            <span class="icon-dolar1"></span>
                            40$/hour
                          </li>
                        </ul>

                        <ul class="career-tag">
                          <li><a href="#">Blender</a></li>
                          <li><a href="#">Sketch</a></li>
                          <li><a href="#">Adobe XD</a></li>
                          <li><a href="#">Figma</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="career-header-right">
                      <span class="icon-heart"></span>
                    </div>
                  </div>
                  <div class="job-archive-footer">
                    <a href="candidate-single.html" class="tf-btn">View Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ul class="pagination-job p-top-st1">
          <li>
            <a href="#"><i class="icon-keyboard_arrow_left"></i></a>
          </li>
          <li><a href="#">1</a></li>
          <li class="current"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li>
            <a href="#"><i class="icon-keyboard_arrow_right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>

<?php
    include 'footer.php';
?>