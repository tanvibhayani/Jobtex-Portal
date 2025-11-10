<?php
    include 'header.php';
?>
  <section>
    <div class="wrap-form-rating-page">

      <div class="wd-form-rating-page">
        <form method="POST">
          <div class="form-title">
            <h1>Please help answer these questions about your employer</h1>
            <h4>Your honest responses help other job seekers and it’s anonymous</h4>
          </div>
          <div class="form-company">
            <img src="images/logo-company/cty11.png" alt="images/logo-company/cty11.png" class="logo-company">
            <div class="inner-company-right">
              <h3>What is the company name?</h3>
              <input type="text" placeholder="Innotek Company">
            </div>
          </div>
          <div class="form-rating">
            <h3>Please rate your overall interview experience at the company</h3>
            <div class="list-rating">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text"></label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text"></label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text"></label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text"></label>
              <input type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text"></label>
            </div>
          </div>
          <div class="form-notes">
            <h3>What is the best or worst thing about tyhe benefits package at this company?</h3>
            <textarea cols="30" rows="10"
              placeholder="Tell us abou thing like company perks, health insurance, 401k, vacation, and time off"></textarea>
          </div>
          <button class="tf-btn-submit">Submit</button>
        </form>
      </div>
    </div>
  </section>

 <?php
    include 'footer.php';
 ?>