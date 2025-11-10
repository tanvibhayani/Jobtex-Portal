<?php
  include 'header1.php';
  include 'connection.php';
  session_start();

  // User authentication check
  if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
  }

  $user_id = $_SESSION['user_id'];

  // Fetch saved jobs of the user with job details
  $query = "SELECT jobs.*, saved_jobs.saved_at 
            FROM saved_jobs 
            JOIN jobs ON saved_jobs.job_id = jobs.id 
            WHERE saved_jobs.user_id = $user_id 
            ORDER BY saved_jobs.saved_at DESC";

  $result = mysqli_query($con, $query);
?>
<div class="left-menu">
<?php include 'sidemenu.php'; ?>
<div class="dashboard__content">
  <section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="title-dashboard">
            <div class="title-dash flex2">Save Jobs</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flat-dashboard-save flat-dashboard-candidates flat-dashboard-applicants">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="applicants bg-white">
            <div class="dash-search flex">
              <div class="widget search">
                <div class="search-flat">
                  <form action="#" method="get" role="search" class="search-form">
                    <input type="search" class="search-field" placeholder="Search" name="s" required="">
                    <button class="search-icon search-submit" type="submit" title="Search"></button>
                  </form>
                </div>
              </div>
              <div id="item_category2" class="dropdown titles-dropdown">
                <a class="btn-selector nolink"> Sort by (Default)</a>
                <ul>
                  <li><span>UX/UI</span></li>
                  <li><span>Candidates</span></li>
                  <li><span>Days</span></li>
                </ul>
              </div>
            </div>

            <div class="table-content">
              <div class="wrap-applicants table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th>Jobs</th>
                      <th>Category</th>
                      <th class="center">Date Posted</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                      <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr class="file-delete">
                          <td>
                            <div class="candidates-wrap flex2">
                              <div class="images">
                                <img src="../images/dashboard/<?= $row['company_logo'] ?>" alt="">
                              </div>
                              <div class="content">
                                <h3><?= $row['title'] ?></h3>
                                <div class="now-box flex2">
                                  <div class="map color-4"><?= $row['location'] ?></div>
                                  <div class="days"><?= date('d M Y', strtotime($row['saved_at'])) ?></div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="status-wrap">
                              <div class="button-status style-2"><?= $row['job_type'] ?></div>
                            </div>
                          </td>
                          <td class="center">
                            <div class="title-day color-1"><?= date('d M Y', strtotime($row['created_at'])) ?></div>
                          </td>
                          <td>
                            <div id="items_<?= $row['id'] ?>" class="dropdown titles-dropdown">
                              <a class="btn-selector nolink flex">
                                <span class="more-icon"></span>
                                <span class="more-icon"></span>
                                <span class="more-icon"></span>
                              </a>
                              <ul>
                                <li><a href="job-detail.php?id=<?= $row['id'] ?>"><span class="icon-eye more-ic"></span> View Job</a></li>
                                <li class="remove-file"><a href="remove_saved.php?job_id=<?= $row['id'] ?>"><span class="icon-trash more-ic"></span> Remove Job</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    <?php else: ?>
                      <tr><td colspan="4" style="text-align:center;">No saved jobs found.</td></tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
<?php include 'footer.php'; ?>
