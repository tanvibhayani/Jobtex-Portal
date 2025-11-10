<?php
    include 'header.php';
    include 'sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->    
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Tickets</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Extra</li>
                                <li class="breadcrumb-item active" aria-current="page">Tickets</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

          <div class="row">
              <div class="col-lg-4 col-12">
                  <div class="row">
                      <div class="col-6">
                          <a class="box box-link-shadow text-center" href="javascript:void(0)">
                            <div class="box-body">
                                <div class="fs-24">+264</div>
                                <span>Total Tickets</span>
                            </div>
                            <div class="box-body bg-info btsr-0 bter-0">
                                <p>
                                    <span class="mdi mdi-ticket-confirmation fs-30"></span>
                                </p>
                            </div>
                          </a>
                          <a class="box box-link-shadow text-center" href="javascript:void(0)">
                            <div class="box-body">
                                <div class="fs-24">110</div>
                                <span>Resolve</span>
                            </div>
                            <div class="box-body bg-success btsr-0 bter-0">
                                <p>
                                    <span class="mdi mdi-thumb-up-outline fs-30"></span>
                                </p>
                            </div>
                          </a>
                      </div>
                      <div class="col-6">
                          <a class="box box-link-shadow text-center" href="javascript:void(0)">
                            <div class="box-body">
                                <div class="fs-24">175</div>
                                <span>Responded</span>
                            </div>
                            <div class="box-body bg-warning btsr-0 bter-0">
                                <p>
                                    <span class="mdi mdi-message-reply-text fs-30"></span>
                                </p>
                            </div>
                          </a>
                          <a class="box box-link-shadow text-center" href="javascript:void(0)">
                            <div class="box-body">
                                <div class="fs-24">59</div>
                                <span>Pending</span>
                            </div>
                            <div class="box-body bg-danger btsr-0 bter-0">
                                <p>
                                    <span class="mdi mdi-ticket fs-30"></span>
                                </p>
                            </div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-12">
                  <div class="box">
                      <div class="box-header with-border">
                        <h5 class="box-title">Tickets share per category</h5>
                      </div>

                      <div class="box-body">
                        <!-- Removed Peity donut chart here -->

                        <ul class="list-inline">
                          <li class="flexbox mb-5">
                            <div>
                              <span class="badge badge-dot badge-lg me-1" style="background-color: #fc4b6c"></span>
                              <span>Technical</span>
                            </div>
                            <div>8952</div>
                          </li>

                          <li class="flexbox mb-5">
                            <div>
                              <span class="badge badge-dot badge-lg me-1" style="background-color: #ffb22b"></span>
                              <span>Accounts</span>
                            </div>
                            <div>7458</div>
                          </li>

                          <li class="flexbox">
                            <div>
                              <span class="badge badge-dot badge-lg me-1" style="background-color: #398bf7"></span>
                              <span>Other</span>
                            </div>
                            <div>3254</div>
                          </li>
                        </ul>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 col-12">
                  <div class="box">
                      <div class="box-header with-border">
                        <h5 class="box-title">Tickets share per agent</h5>
                      </div>

                      <div class="box-body">
                        <div class="flexbox mt-10">
                            <!-- Removed Peity bar chart here -->
                            <ul class="list-inline align-self-end text-muted text-end mb-0">
                                <li>Andrew <span class="badge badge-primary ms-2">154</span></li>
                                <li>Benjamin <span class="badge badge-info ms-2">154</span></li>
                                <li>Elijah <span class="badge badge-success ms-2">254</span></li>
                                <li>Chloe <span class="badge badge-danger ms-2">854</span></li>
                                <li>Daniel <span class="badge badge-warning ms-2">215</span></li>
                            </ul>
                        </div>

                      </div>
                  </div>
              </div>
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">                        
                            <h4 class="box-title">Support Ticket List</h4>
                            <h6 class="box-subtitle">List of ticket opend by customers</h6>
                        </div>
                        <div class="box-body p-15">                        
                            <div class="table-responsive">
                                <table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ope. by</th>
                                            <th>Cust. Email</th>
                                            <th>Sbuject</th>
                                            <th>Status</th>
                                            <th>Ass. to</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Table rows here, unchanged -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
      </div>
  </div>
  <!-- /.content-wrapper -->
 
 <?php
    include 'footer.php';
?>
