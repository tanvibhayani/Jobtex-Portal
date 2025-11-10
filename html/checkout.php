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
                                <li><a href="#">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>


  <section class="checkout-section">
        <div class="tf-container">
            <div class="bg-coupon">
                <p>Have a coupon?<a href="#"> Click here to enter your code</a></p>
            </div>

            <div class="row">
                    <div class="col-lg-7">
                            <div class="form-candidate form-checkout form-stc">
                                <div class="group-title">
                                    <h6>Billing Details</h6>
                                </div>
                                <form  method="post">
                                  <div class="group-input">
                                    <div class="ip">
                                        <label >First Name</label>
                                      <input type="text" placeholder="Your Name" value="Tony Nguyen |">
                                    </div>
                                    <div class="ip">
                                        <label >Last Name</label>
                                      <input type="text" placeholder="Email" value="Last Name">
                                    </div>
                                  </div>
                                  <div class="group-input-st1">
                                    <label >Country/Region</label>
                                    <input type="text" placeholder="United State" value="United State">
                                  </div>
                                  <div class="group-input-st1">
                                    <label >Town/City</label>
                                    <input type="text">
                                  </div>
                                  <div class="group-input-st1">
                                    <label >Address</label>
                                    <input type="text" placeholder="Street Adress">
                                  </div>
                                  <div class="group-input-st1">
                                    <label >Postal Code</label>
                                    <input type="email" placeholder="Code">
                                  </div>
                                  <div class="group-input-st1">
                                    <label >Phone Number</label>
                                    <input type="number" >
                                  </div>
                                  <div class="group-input-st1">
                                    <label >Email or Phone Number:</label>
                                    <input type="email" >
                                  </div>
                                  <div class="group-ant-choice st">
                                    <div class="sub-ip"><input type="checkbox">&ensp;Create an account</div>
                                    <div class="sub-ip"><input type="checkbox">&ensp;Ship to a different address?</div>
                                  </div>
                                  <div class="ip out group-note">
                                    <label >Note Order:</label>
                                    <textarea   placeholder="Write note"></textarea>
                                  </div>
                                </form>
                            </div>
                    </div>    
                <div class="col-lg-5 sticky-sidebar">
                    <div class="shop-content margin content-stc">
                                <div class="wd-order">
                                    <h5>Your Order</h5>
                                    <div class="bg-checkout">
                                        <div class="product-list">
                                            <div class="product-item">
                                                <div class="info">
                                                    <img src="images/pages/shop-5.jpg" alt="image">
                                                    <h6><a href="#">Manager Onboarding</a></h6>
                                                </div>
                                                <span class="price">1  x $7.26</span>
                                            </div>
                                            <div class="product-item">
                                                <div class="info">
                                                    <img src="images/pages/shop-2.jpg" alt="image">
                                                    <h6><a href="#">Switchers</a></h6>  
                                                </div>
                                                <span class="price">2  x $6.26</span>
                                            </div>
                                            <div class="product-item">
                                                <div class="info">
                                                    <img src="images/pages/shop-6.jpg" alt="image">
                                                    <h6><a href="#">Finance for managers</a></h6>
                                                </div>
                                                <span class="price">1  x $5.26</span>
                                            </div>
                                        </div>
                                        <div class="group-shipping">
                                            <h6>Shiping</h6>
                                            <ul>
                                                <li class="shipping-item"><p>Shipping from <a href="#"> Adam State</a></p>  <span>Free</span></li>
                                                <li class="shipping-item"><p>Shipping from <a href="#">United State</a></p>  <span>$19.8</span></li>
                                            </ul>
                                        </div>
                                        <div class="group-total">
                                            <h6>Subtotal</h6>
                                            <span>$168.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="wd-payment">
                                    <h5>Payment Method</h5>
                                    <form class="bg-checkout" method="post" >
                                        <div class="group-input">
                                            <input type="radio" checked name="radio">
                                            <div class="inner-right">
                                                <label >Direct bank transfer</label>
                                                <p>Make your payment directly into our bank account. Your order will not be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                        <div class="group-input">
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                            <label >Cash on delivery</label>
                                        </div>
                                        <div class="group-input">
                                            <input type="radio" name="radio">
                                            <label >PayPal</label>
                                        </div>
                                        <button type="submit" class="btn-payment">Place Order</button>   
                                    </form>
                                </div>
                    </div>
                </div>
                        
            </div>
                    
        </div>
  </section>

 <?php
    include 'footer.php';
 ?>