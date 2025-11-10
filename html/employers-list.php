<?php
include 'header.php';
include 'connection.php';
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

<section class="form-sticky stc2">
  <div class="tf-container">
    <div class="job-search-form st1 employers-form">
      <form method="post">
        <div class="row-group-search inner-form">
          <!-- You can make this functional later -->
          <!-- <div class="form-group-1 form-style-1">
            <input type="text" class="input-filter-search" placeholder="key words">
            <span class="icon-search search-job"></span>
          </div> -->
          <!-- other filters are static -->
          <!-- <div class="form-group-2 form-style-1">
            <span class="icon-map-pin"></span>
            <div class="nice-select select-location" tabindex="0">
              <span class="current">All Location</span>
              <ul class="list">
                <li class="option selected focus">All Location</li>
                <li class="option">Japan</li>
                <li class="option">Canada</li>
              </ul>
            </div>
          </div> -->
          <!-- <div class="form-group-3 form-style-1">
            <div class="nice-select select-location" tabindex="0">
              <span class="current">Job Title</span>
              <ul class="list">
                <li class="option selected focus">Job Title</li>
                <li class="option">Design</li>
              </ul>
            </div>
          </div> -->
          <!-- <div class="form-group-4 form-style-1">
            <div class="nice-select select-location" tabindex="0">
              <span class="current">Any Distance</span>
              <ul class="list">
                <li class="option selected focus">Any Distance</li>
              </ul>
            </div>
          </div> -->
          <!-- <div class="form-group-5 form-style-1">
            <div class="nice-select select-location" tabindex="0">
              <span class="current">Company Size</span>
              <ul class="list">
                <li class="option selected focus">Company Size</li>
              </ul>
            </div>
          </div>
          <div class="form-group-6">
            <button class="btn btn-find">Find Employers</button>
          </div>
        </div> -->
      </form>
    </div>
  </div>
</section>

<section class="inner-employer-section">
  <div class="tf-container">
    <div class="row">
      <div class="col-lg-12 tf-tab">
        <div class="wd-meta-select-job">
          <div class="wd-findjob-filer">
            <div class="group-select-display">
              <div class="inner menu-tab">
                <a class="btn-display active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                    <path d="M0.5 12.001V16.001H16.5V12.001H0.5Z" fill="#A0A0A0"/>
                    <path d="M0.5 6.001V10.001H16.5V6.001H0.5Z" fill="#A0A0A0"/>
                    <path d="M0.5 0.001V4.001H16.5V0.001H0.5Z" fill="#A0A0A0"/>
                  </svg>
                </a>
              </div>
              <p class="nofi-job"> 
                <span>
                  <?php
                  $count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM employers WHERE status = 'active'"));
                  echo $count;
                  ?>
                </span> employers recommended for you
              </p>
            </div>
            <div class="group-select">
              <select>
                <option>12 Per Page</option>
              </select>
              <select>
                <option>Sort by (Default)</option>
              </select>
            </div>
          </div>
        </div>

        <div class="content-tab">
          <div class="inner">
            <div class="group-col-2">

              <?php
              $sql = "SELECT * FROM employers WHERE status = 'active'";
              $result = mysqli_query($con, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                  <div class="employer-block style-2 cl2">
                    <div class="inner-box">
                      <div class="logo-company">
                        <img src="images/' . $row['logo_image'] . '" alt="' . $row['company_name'] . '" />
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
                          <a href="employers-single.php?id=' . $row['id'] . '">' . $row['company_name'] . '</a>
                          <span class="icon-bolt"></span>
                        </h3>
                        <p class="info">
                          <span class="icon-map-pin"></span>
                          ' . $row['location'] . '
                        </p>
                      </div>
                      <div class="button-readmore">
                        <span class="icon-heart"></span>
                        <button class="btn-employer">
                          ' . $row['job_openings'] . ' job openings
                        </button>
                      </div>
                    </div>
                  </div>';
                }
              } else {
                echo "<p>No active employers found.</p>";
              }
              ?>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
