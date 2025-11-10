<!-- sidebar.php -->
<aside class="main-sidebar">
  <section class="sidebar position-relative"> 
    <div class="multinav">
      <div class="multinav-scroll" style="height: 97%;"> 

        <ul class="sidebar-menu" data-widget="tree">       

          <!-- Dashboard -->
          <li>
            <a href="index.php">
              <i data-feather="home"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <!-- Jobs -->
          <li class="treeview">
            <a href="#">
              <i data-feather="file-plus"></i>
              <span>Jobs</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="admin_jobs_add.php">Jobs Add</a></li>
              <li><a href="jobs.php">Jobs List</a></li>
              <li><a href="admin-add-interview.php">Interview Schedule</a></li>
              <li><a href="view-interviews.php">View Interview</a></li>
              <li><a href="admin-manage-interviews.php">Manage Interview</a></li>
              <li><a href="admin-manage-applications.php">Applications</a></li>  
              <!-- <li><a href="extra_profile.php">Profile</a></li>  
              <li><a href="billing.php">Billing</a></li>  -->
              <li><a href="admin-blog-approval.php">Blog</a></li>                 
            </ul>
          </li>

          <!-- Employers -->
          <li class="treeview">
            <a href="#">
              <i data-feather="users"></i>
              <span>Employers</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="admin-manage-employers.php">Manage Employers</a></li>
              <li><a href="admin-manage-users.php">Manage Users</a></li>
              <!-- Note: Replace id=1 with dynamic link as needed -->
            </ul>
          </li>

          <!-- Alert -->
          <li class="treeview">
            <a href="#">
              <i data-feather="bell"></i>
              <span>Alert</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="admin-add-alert.php">Add Alert</a></li>
              <li><a href="view-alert.php">View Alert</a></li>
            </ul>
          </li>
<!-- 
          Candidates -->
          <!-- <li>
            <a href="candidates.php">
              <i data-feather="briefcase"></i>
              <span>Candidates</span>
            </a>
          </li>    -->

          <!-- Support -->
          <li class="treeview">
            <a href="#">
              <i data-feather="headphones"></i>
              <span>Support</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="funfacts.php">Funfact</a></li>
              <li><a href="admin_feedback.php">Feedback</a></li>
               <li><a href="view_contact.php">Contact</a></li>
              <li><a href="contact_app_chat.php">Chat</a></li>     
            </ul>
          </li>

          <!-- Authentication -->
          <li class="treeview">
            <a href="#">
              <i data-feather="lock"></i>
              <span>Authentication</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="auth_login.php" target="_blank">Login (Light)</a>
                <a href="auth_login_dark.php" target="_blank">Login (Dark)</a>
              </li>
              <li>
                <a href="auth_register.php" target="_blank">Register (Light)</a>
                <a href="auth_register_dark.php" target="_blank">Register (Dark)</a>
              </li>
            </ul>
          </li>
          
        </ul>

        <!-- Optional Sidebar Widget -->
        <div class="sidebar-widgets">
          <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
            <div class="text-center">
              <img src="https://employx-admin-templates.multipurposethemes.com/html/images/svg-icon/color-svg/custom-30.svg" class="sideimg p-5" alt="">
              <h4 class="title-bx text-primary">Best Job Portal</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</aside>
