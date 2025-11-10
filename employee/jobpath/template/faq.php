<?php
include 'header.php';
include 'connection.php';
?>

<!-- Breadcrumb Section -->
<div class="rts__section breadcrumb__background">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 position-relative d-flex justify-content-between align-items-center">
        <div class="breadcrumb__area max-content breadcrumb__padding z-2">
          <h1 class="breadcrumb-title h3 mb-3">Faq</h1>
          <nav>
            <ul class="breadcrumb m-0 lh-1">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ul>
          </nav>
        </div>
        <div class="breadcrumb__area__shape d-flex gap-4 justify-content-end align-items-center">
          <div class="shape__one common"><img src="assets/img/breadcrumb/shape-1.svg" alt=""></div>
          <div class="shape__two common"><img src="assets/img/breadcrumb/shape-2.svg" alt=""></div>
          <div class="shape__three common"><img src="assets/img/breadcrumb/shape-3.svg" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FAQ Section -->
<section class="rts__section section__padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-10">
        <div class="rts__section__content text-center wow animated fadeInUp mb-60">
          <h3 class="rts__section__title section__mb">Frequently Asked Questions</h3>
          <p class="rts__section__desc">Confused about how the platform works? Find answers below!</p>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <!-- Left Column -->
      <div class="col-lg-6">
        <div class="accordion accordion-flush d-flex flex-column gap-4 style__one" id="accordionLeft">
          <!-- Question 1 -->
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button p-4 fw-medium border font-20" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                How do I apply for a job?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse border mt-3 collapse show" data-bs-parent="#accordionLeft">
              <div class="accordion-body">
                After logging in, visit the job listings page and click "Apply" on any job. Make sure your profile and resume are updated.
              </div>
            </div>
          </div>
          <!-- Question 2 -->
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button p-4 fw-medium border font-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Can I apply to multiple jobs?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse border mt-3 collapse" data-bs-parent="#accordionLeft">
              <div class="accordion-body">
                Yes, you can apply to as many jobs as you want. Just ensure that each job fits your skills and interests.
              </div>
            </div>
          </div>
          <!-- Question 3 -->
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button p-4 fw-medium border font-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Where can I see the jobs I've applied to?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse border mt-3 collapse" data-bs-parent="#accordionLeft">
              <div class="accordion-body">
                Go to your Dashboard > "My Applied Jobs" to see the list of all jobs you've applied to.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-6">
        <div class="accordion accordion-flush d-flex flex-column gap-4 style__one" id="accordionRight">
          <!-- Question 4 -->
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button p-4 fw-medium border font-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                How do I update my profile?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse border mt-3 collapse" data-bs-parent="#accordionRight">
              <div class="accordion-body">
                Login and click on "Profile Settings" from your dashboard to update your resume, contact details, and more.
              </div>
            </div>
          </div>
          <!-- Question 5 -->
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button p-4 fw-medium border font-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                I forgot my password. What should I do?
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse border mt-3 collapse" data-bs-parent="#accordionRight">
              <div class="accordion-body">
                Click on "Forgot Password" on the login page. Enter your registered email to receive a reset link.
              </div>
            </div>
          </div>
          <!-- Question 6 -->
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button p-4 fw-medium border font-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                How can I contact support?
              </button>
            </h2>
            <div id="faq6" class="accordion-collapse border mt-3 collapse" data-bs-parent="#accordionRight">
              <div class="accordion-body">
                You can contact support using the "Contact Us" form or email us at <strong>support@yourjobportal.com</strong>.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
