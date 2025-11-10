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


  <section>
    <div class="tf-container">
      <div class="candidate-form job-search-form inner-form-map style2 form-no-avai">
        <form method="post">
          <div class="row-group-search">
            <div class="form-group">
              <input type="text" class="input-filter-search" placeholder="Keywords">
              <span class="icon-search search-job icon"></span>
            </div>
            <div class="form-group location">
              <span class="icon-map-pin icon"></span>
              <select id="select-location" class="select-location">
                <option value="">Location</option>
                <option value="">Location 1</option>
                <option value="">Location 2</option>
                <option value="">Location 3</option>
              </select>
            </div>
            <div class="form-group st">
              <select>
                <option value="">Job Type</option>
                <option value="">Ux/Ui</option>
                <option value="">Designer</option>
              </select>
            </div>
            <div class="form-group st">
              <select>
                <option value="">Any Distance</option>
                <option value="">20</option>
                <option value="">30</option>
              </select>
            </div>
            <div class="form-group no-border st">
              <select>
                <option value="">Candidate Gender</option>
                <option value="">Salary Estimate 1</option>
                <option value="">Salary Estimate 2</option>
              </select>
            </div>
            <div class="form-group-btn">
              <button class="btn btn-find">Find Candidates</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </section>

  <section class="cadi-available-section">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-12 tf-tab">
          <div class="wd-meta-select-job">

            <div class="wd-findjob-filer no-avai">
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