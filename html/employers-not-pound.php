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



  <section class="inner-employer-section">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-12">
          <div class="group-4-8">
            <div class="cl4">
              <div class="widget-filter st2  style-scroll">
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
                  <div class="group-form filter-block">
                    <div class="salary-slider-one">
                      <div class="input-outer">
                        <label>Estimate Salary:</label>
                        <div class="salary-outer"><span class="count"></span></div>
                      </div>
                      <div class="salary-slider"></div>
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
            <div class="cl8 tf-tab padding">
              <div class="wd-meta-select-job">

                <div class="wd-findjob-filer mb8">
                  <div class="group-select-display left">
                    <p class="nofi-job"> Showing all 0 result</p>
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
                <button class="btn btn-submit" type="submit">Reset Filter</button>

              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php

   include 'footer.php';
?>