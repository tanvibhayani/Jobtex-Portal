<?php
include 'header.php';
include 'connection.php';
?>

<!-- Breadcrumb Section -->
<div class="rts__section breadcrumb__background">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 position-relative d-flex justify-content-center align-items-center">
        <div class="breadcrumb__area max-content breadcrumb__padding z-2">
          <h1 class="breadcrumb-title h3 mb-3">Terms and Conditions</h1>
          <nav class="mx-auto max-content">
            <ul class="breadcrumb m-0 lh-1">
              <li class="breadcrumb-item"><a href="employee-dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Terms</li>
            </ul>
          </nav>
        </div>
        <div class="breadcrumb__area__shape breadcrumb__style__four d-flex gap-4 justify-content-end align-items-center">
          <div class="shape__one common"></div>
          <div class="shape__two common">
            <img src="assets/img/breadcrumb/shape-2.svg" alt="">
          </div>
          <div class="shape__three common">
            <img src="assets/img/breadcrumb/shape-3.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Terms Section -->
<div class="rts__section section__padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="tos__content d-flex gap-30 flex-column">
          <div class="has__item">
            <h6 class="fw-semibold mb-3">1. Terms Of Use</h6>
            <p>As an employee, by using this platform, you agree to follow our terms, including accurate profile information and responsible application behavior.</p>
          </div>
          <div class="has__item">
            <h6 class="fw-semibold mb-3">2. Disclaimers</h6>
            <p>We do not guarantee job placement or employer responses. All information on the platform is provided "as is" without warranty.</p>
          </div>
          <div class="has__item">
            <h6 class="fw-semibold mb-3">3. Limitation on Liability</h6>
            <p>We are not responsible for any losses incurred due to delayed responses, employer actions, or misinformation shared by third-party employers.</p>
          </div>
          <div class="has__item">
            <h6 class="fw-semibold mb-3">4. Data Usage</h6>
            <p>Your personal data may be shared with employers as part of your job applications. We ensure data is protected and used only for recruitment purposes.</p>
          </div>
          <div class="has__item">
            <h6 class="fw-semibold mb-3">5. Account Suspension</h6>
            <p>We reserve the right to suspend or terminate accounts found misusing the platform, posting false resumes, or spamming employers.</p>
          </div>
          <div class="has__item">
            <h6 class="fw-semibold mb-3">6. Updates</h6>
            <p>These terms may be updated at any time. You are advised to review them periodically to stay informed of any changes.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Terms Section -->

<?php include 'login.php'; ?>
