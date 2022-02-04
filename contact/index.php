<!-- Aqui va el config del app -->
<?php 

include "../app/config.php";
include "../app/collectionHome.php";
 $title = "contact";
 $home = "home";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../layouts/header.php"; ?>
    <?php include "../layouts/nav.php";?>
    <?php include "../layouts/breadcrumb.php"; ?>
</head>
<body class="layout-1">
    <!-- contact details -->
    <section class="contact-details-sec wrapper100">
    <div class="container">
        <div class="details">
            <h2><span>_</span>Contact Details</h2>
            <p>If you need any help, please contact us or send us an email or go to our forum.<br>We are sure that you can receive our reply as soon as possible.</p>
        </div>
    </div>
    </section>
    <!-- how to contact section -->
    <section class="how-to-contact text-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 lft-border">
                <div class="contact-inner-content">
                <i class="icon-pin"></i>
                <h6>Address</h6>
                <p>Lorem Ipsum is simply dum my text of the printing</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 lft-border">
                <div class="contact-inner-content">
                <i class="icon-telephone"></i>
                <h6>Phone</h6>
                <p><a href="tel:+1234567890">+ 12 34567890</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 lft-border">
                <div class="contact-inner-content">
                <i class="icon-envelope"></i>
                <h6>Email</h6>
                <p><a href="mailto:store@modish.com">store@modish.com</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 lft-border">
                <div class="contact-inner-content">
                <i class="icon-shop"></i>
                <h6>Store Opening</h6>
                <p>8:00 AM to 7:00 PM, Closed in<br>Saturday and Sunday</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- connect with us -->
    <section class="connect-with-us wrapper100">
    <div class="container">
        <div class="connect-social">
            <h4><span>_</span>Connect with us</h4>
            <ul>
                <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-pinterest"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#"><i class="icon-google-plus-logo"></i></a></li>
            </ul>
        </div>
    </div>
    </section>
    <!-- contact form section -->
    <section class="contact-form-section">
    <div class="container">
        <div class="contact-form-heading">
            <h2><span>_</span>Get in touch with us</h2>
            <p>If you have any question, Please don’t hesitate to send us a me</p>
        </div>
        <form class="wrapper100 text-left">
            <div class="row upperform">
                <div class="col-md-4 col-13">
                <label>Your Name<sup>*</sup></label>
                <input type="text" name="first-name"  placeholder="Enter your name here...">
                </div>
                <div class="col-md-4 col-13">
                <label>Your Email<sup>*</sup></label>
                <input type="text" name="first-name"  placeholder="Enter your name here...">
                </div>
                <div class="col-md-4 col-13">
                <label>Your Phone<sup>*</sup></label>
                <input type="text" name="first-name"  placeholder="Enter your name here...">
                </div>
            </div>
            <div class="form-group">
                <label>Your Meassage</label>
                <textarea  placeholder="Type your message_" ></textarea>
            </div>
            <button type="submit">submit</button>	
        </form>
    </div>
    </section>
    <!-- location map section -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14687.204578101693!2d72.5598075!3d23.0310725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5680aa626bd4d43!2sNCode%20Technologies%2C%20Inc.%20-%20Software%20Development%20%26%20Ecommerce%20Store%20Development%20Company!5e0!3m2!1sen!2sin!4v1617953540448!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
        <?php include "../layouts/footer.php"; ?>
</body>
</html>
