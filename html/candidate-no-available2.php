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
                <div class="col-lg-4">
                  <div class="content-left style2">
                    <div class="inner st-filter">
                      <div class="widget-filter no-scroll no-avai2">
                        <form action="https://themesflat.co/html/jobtex/GET">
                          <div class="group-form">
                            <label class="title">Search  by Keywords</label>
                            <div class="group-input search-ip">
                              <button><i class="icon-search"></i></button>
                              <input type="text" placeholder="Keywork" required>
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
                                <option value="0">Design & Creative </option>
                                <option value="0">Design</option>
                                <option value="0">Ux/Ui</option>
                              </select>
                            </div>
                          </div>
                          <div class="group-form">
                            <label class="title">Candidate Gender</label>
                            <div class="group-input">
                              <select>
                                <option value="0">Male</option>
                                <option value="0">Female</option>
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
                            <label class="title">Date Posted</label>
                            <div class="group-input">
                              <select>
                                <option value="0">Last 7 days</option>
                                <option value="0">Last 14 days</option>
                              </select>
                            </div>
                          </div>
                          <div class="group-form">
                            <label class="title">Experrience</label>
                            <div class="group-input">
                              <select>
                                <option value="0">Fresher</option>
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
                <div class="col-lg-8 tf-tab no-avai2">
                    <div class="wd-meta-select-job">
                        
                        <div class="wd-findjob-filer">
                            <div class="group-select-display">
                                <p class="nofi-job"> Showing all 0 result</p>
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
                          <button class="btn-pri">Reset Filter</button>
                    </div>
                </div>
              </div>
     
    </div>
  </section>
  

 <?php
        include 'footer.php';
 ?>