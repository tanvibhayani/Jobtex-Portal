<?php include 'header1.php'; ?>
  <div class="left-menu">
<?php include 'sidemenu.php'; ?>
  <div class="dashboard__content">
    <section class="page-title-dashboard">
      <div class="themes-container">
        <div class="row">
          <div class="col-lg-12 col-md-12 ">
            <div class="title-dashboard">
              <div class="title-dash flex2">Saved Candidates</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="flat-saved-candidates flat-dashboard-applicants">
      <div class="themes-container">
        <div class="row">
          <div class="col-lg-12 col-md-12 ">
            <div class="applicants bg-white">
              <div class="dash-search flex">
                <div class="widget search">
                  <div class="search-flat">
                    <form action="#" method="get" role="search" class="search-form">
                      <input type="search" class="search-field" placeholder="Search" value="" name="s"
                        title="Search for" required="">
                      <button class="search-icon search-submit" type="submit" title="Search"></button>
                    </form>
                  </div>
                </div>
                <div id="item_category2" class="dropdown titles-dropdown ">
                  <a class="btn-selector nolink "> Sort by (Defaut)</a>
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
                        <th>Candidates</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- col 1 -->
                      <tr class="file-delete">
                        <td>
                          <div class="candidates-wrap flex2">
                            <div class="images">
                              <img src="../images/dashboard/user-1.jpg" alt="">
                            </div>
                            <div class="content">
                              <h5 class="fw-6 color-3">UI UX Designer</h5>
                              <h3>Arlene McCoy</h3>
                              <div class="now-box flex2">
                                <div class="map color-4">Tokyo, Japan</div>
                                <div class="dolar color-4">$8000/month</div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="action-wrap">
                            <ul class="flex2">
                              <li class="hv-tool" data-tooltip="View Profile"><a class="action-icon style icon-eye"></a>
                              </li>
                              <li class="hv-tool" data-tooltip="Message"><a class="action-icon style icon-bubble"></a>
                              </li>
                              <li><a class="button-cancel fw-7 remove-file">Cancel</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <!-- col 2 -->
                      <tr class="file-delete">
                        <td>
                          <div class="candidates-wrap flex2">
                            <div class="images">
                              <img src="../images/dashboard/user-5.jpg" alt="">
                            </div>
                            <div class="content">
                              <h5 class="fw-6 color-3">UI UX Designer</h5>
                              <h3>Brooklyn Simmons</h3>
                              <div class="now-box flex2">
                                <div class="map color-4">Tokyo, Japan</div>
                                <div class="dolar color-4">$8000/month</div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="action-wrap">
                            <ul class="flex2">
                              <li class="hv-tool" data-tooltip="View Profile"><a class="action-icon style icon-eye"></a>
                              </li>
                              <li class="hv-tool" data-tooltip="Message"><a class="action-icon style icon-bubble"></a>
                              </li>
                              <li><a class="button-cancel fw-7 remove-file">Cancel</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <!-- col 3 -->
                      <tr class="file-delete">
                        <td>
                          <div class="candidates-wrap flex2">
                            <div class="images">
                              <img src="../images/dashboard/user-6.jpg" alt="">
                            </div>
                            <div class="content">
                              <h5 class="fw-6 color-3">UI UX Designer</h5>
                              <h3>Dianne Russell</h3>
                              <div class="now-box flex2">
                                <div class="map color-4">Tokyo, Japan</div>
                                <div class="dolar color-4">$8000/month</div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="action-wrap">
                            <ul class="flex2">
                              <li class="hv-tool" data-tooltip="View Profile"><a class="action-icon style icon-eye"></a>
                              </li>
                              <li class="hv-tool" data-tooltip="Message"><a class="action-icon style icon-bubble"></a>
                              </li>
                              <li><a class="button-cancel fw-7 remove-file">Cancel</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <!-- col 4 -->
                      <tr class="file-delete">
                        <td>
                          <div class="candidates-wrap flex2">
                            <div class="images">
                              <img src="../images/dashboard/user-7.jpg" alt="">
                            </div>
                            <div class="content">
                              <h5 class="fw-6 color-3">UI UX Designer</h5>
                              <h3>Kathryn Murphy</h3>
                              <div class="now-box flex2">
                                <div class="map color-4">Tokyo, Japan</div>
                                <div class="dolar color-4">$8000/month</div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="action-wrap">
                            <ul class="flex2">
                              <li class="hv-tool" data-tooltip="View Profile"><a class="action-icon style icon-eye"></a>
                              </li>
                              <li class="hv-tool" data-tooltip="Message"><a class="action-icon style icon-bubble"></a>
                              </li>
                              <li><a class="button-cancel fw-7 remove-file">Cancel</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   <?php include 'footer.php';?>