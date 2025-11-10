<?php
    include 'header.php';
    include 'connection.php';
?>

    <div class="gmap">
        <div class="container-fluid">
            <div class="full__map">
                <iframe height="600" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=reacthemes+(reacthemes)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
            
        </div>
    </div>
    <!-- contact map end -->

    <!-- contact method -->
    <div class="rts__section is__half__section ">
        <div class="container">
            <div class="row justify-content-center g-0 is__no__border rounded-3 shadow-rt-sm bg-white">
                <div class="col-lg-4 col-md-6">
                    <div class="rts__workprocess__box is__contact ">
                        <div class="rts__icon">
                            <img src="assets/img/icon/location.svg" alt="">
                        </div>
                        <span class="process__title h6 d-block">Location Here</span>
                        <p class="fw-medium">Moravada, sardarpur rode
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rts__workprocess__box is__contact ">
                        <div class="rts__icon">
                            <img src="assets/img/icon/mail.svg" alt="">
                        </div>
                        <span class="process__title h6 d-block">Email Here</span>
                        <a class="text-para fw-medium" href="tanubhayani05@gmail.com">tanubhayani05@gmail.com</a>
                        <a class="text-para fw-medium" href="bansibhayani18@gmail.com">bansibhayani18@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rts__workprocess__box is__contact ">
                        <div class="rts__icon">
                            <img src="assets/img/icon/phone.svg" alt="">
                        </div>
                        <span class="process__title h6 d-block">Call Here</span>
                       <a class="fw-medium text-para d-block" href="tel:+44-20-7328-4499">95108 80062</a>
                       <a class="fw-medium text-para" href="tel:+44-20-7328-4499">94275 73193</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact method end -->

    <!-- contact form -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 pe-5">
                    <div class="contact__image">
                        <figure>
                            <img src="assets/img/pages/contact.webp" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <span class="h4 fw-normal"><strong class="fw-bold">Contact & Comment Here</strong>
                        <br>
                        Get in touch!
                    </span>
                    <div class="job__contact is__contact mt-30">
                        <form action="#" class="d-flex flex-column gap-4" method="post">
                            <div class="search__item">
                                <label for="name" class="mb-4 font-20 fw-medium text-dark text-capitalize">Name</label>
                                <div class="position-relative">
                                    <input type="text" id="name" placeholder="Your Name" required name="name">
                                    <i class="fa-light fa-user"></i>
                                </div>
                            </div>
                            <div class="search__item">
                                <label for="cemail" class="mb-4 font-20 fw-medium text-dark text-capitalize">Your Email</label>
                                <div class="position-relative">
                                    <input type="email" id="cemail" placeholder="Enter your email" name="email" required>
                                    <i class="rt-mailbox"></i>
                                </div>
                            </div>
                            <div class="search__item">
                                <label class="mb-4 font-20 fw-medium text-dark text-capitalize" for="message">Your Comment</label>
                                <textarea id="message" placeholder="Message" name="message"></textarea>
                                <i class="fa-thin fa-comment-lines"></i>
                            </div>
                            <button type="submit" name="btn" class="rts__btn fill__btn be-1 w-100 rounded-1 apply__btn">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
     </div>
    <!-- contact form end -->
<?php
include 'connection.php';
    if(isset($_POST['btn']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $comment=$_POST['message'];

        $qry="insert into e_contact(name,email,comment)values('$name','$email','$comment')";
        if(mysqli_query($con,$qry)>0)
        {
            echo "<script>window.href:'contect-2.php';</script>";
        }
        else
        {
            echo "data is not inserted";
        }
    }
?>
<?php
    include 'login.php';
?>