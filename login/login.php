<!-- Aqui va el config del app -->
<?php 

include "app/config.php";
include "app/collectionHome.php";
 $title = "Login";
 $url = ""
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from www.ncodetechnologies.com/Modish/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:32 GMT -->
<head>

	<?php include "../layouts/header.php";?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="layout-1">
<!-- header start -->
<header class="header-main">
	<div class="header-sticky menu-style-1">
		<nav class="navbar navbar-expand-lg">
			<!-- Brand -->
			<div class="logo-part">
				<a class="navbar-brand" href="index.html"><img class="img-fluid" src="images/logo.png" alt="Modish HTML5 & Bootstrap 4 Theme" /></a>
				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNavigation">
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<!-- Navbar links -->
			<div class="collapse navbar-collapse justify-content-center" id="MainNavigation">
				<div class="remove d-lg-none">x</div>
				<ul class="navbar-nav">
					<li class="nav-item has-children">
						<a class="nav-link" href="#">Home</a>
						<span class="expand"><i class="sign"></i></span>
						<div class="submenu">
							<ul class="lavel-1">
								<li><a href="index.html">Home 1</a></li>
								<li><a href="index-2.html">Home 2</a></li>
								<li><a href="index-3.html">Home 3</a></li>
								<li><a href="index-4.html">Home 4</a></li>
								<li><a href="index-5.html">Home 5</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="shop.html">Shop</a>
						<span class="expand"><i class="sign"></i></span>
						<div class="megamenu">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-9">
									<div class="row">
										<div class="col-12 col-sm-12 col-md-12 col-lg-4">
											<span class="category-tit">_Clothing</span>
											<ul>
												<li><a href="#">Coats</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Jeans</a></li>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Sweatshirts</a></li>
												<li><a href="#">Knitwear</a></li>
												<li><a href="#">Shirts</a></li>
											</ul>
										</div>
										<div class="col-12 col-sm-12 col-md-12 col-lg-4">
											<span class="category-tit">_Shoes</span>
											<ul>
												<li><a href="#">Trainers</a></li>
												<li><a href="#">Boots</a></li>
												<li><a href="#">Heels</a></li>
												<li><a href="#">Flats</a></li>
												<li><a href="#">Heeled Sandals</a></li>
												<li><a href="#">Sandals</a></li>
												<li><a href="#">Platforms</a></li>
											</ul>
										</div>
										<div class="col-12 col-sm-12 col-md-12 col-lg-4">
											<span class="category-tit">_Accessories</span>
											<ul>
												<li><a href="#">Bags</a></li>
												<li><a href="#">Backpacks</a></li>
												<li><a href="#">Glasses</a></li>
												<li><a href="#">Earrings</a></li>
												<li><a href="#">iPhone Cases</a></li>
												<li><a href="#">Mobile Accessories</a></li>
												<li><a href="#">Socks</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-3 img-part" style="background:url(images/megamenu-img.jpg)center left no-repeat; background-size:cover;"></div>
							</div>
						</div>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#">Pages</a>
						<span class="expand"><i class="sign"></i></span>
						<div class="submenu">
							<ul class="lavel-1">
								<li><a href="about-us.html">About</a></li>
								<li><a href="about-us-1.html">About 1</a></li>
								<li><a href="cart.html">Shopping cart</a></li>
								<li><a href="checkout.html">checkout</a></li>
								<li><a href="shop.html">Shop 1</a></li>
								<li><a href="shop-1.html">Shop 2</a></li>
								<li><a href="product-detail.html">Product Detail</a></li>
								<li><a href="wishlist.html">wishlist</a></li>
								<li><a href="contact-us.html">contact us</a></li>
								<li><a href="login.html">login</a></li>
								<li><a href="register.html">register</a></li>
								<li><a href="faq.html">Faq Page</a></li>
								<li><a href="404.html">404 Page</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#">Blog</a>
						<span class="expand"><i class="sign"></i></span>
						<div class="submenu">
							<ul class="lavel-1">
								<li><a href="blog-listing.html">Blog List 1</a></li>
								<li><a href="blog-listing2.html">Blog List 2</a></li>
								<li><a href="blog-listing3.html">Blog List 3</a></li>
								<li><a href="blog-detail.html">Blog Detail 1</a></li>
								<li><a href="blog-detail-1.html">Blog Detail 2</a></li>
							</ul>
						</div>
					<li class="nav-item">
						<a class="nav-link" href="contact-us.html">Contact</a>
					</li>
				</ul>
			</div>
			<div class="header-right">
				<ul class="navbar-nav">
					<li class="nav-item my-ac">
						<div class="my-ac-icon"><i class="icon-user"></i></div>
						<div class="my-ac-droapdown">
							<div class="my-ac-droapdown-inner">
								<div class="my-ac">
									<h6>My Account</h6>
									<ul>
										<li><a href="#">Register</a></li>
										<li><a href="#">Login</a></li>
									</ul>
								</div>
								<div class="language">
									<h6>Language</h6>
									<ul>
										<li><a href="#"><img src="images/english-flag.jpg" alt="" />English</a></li>
										<li><a href="#"><img src="images/french-flag.jpg" alt="" />French</a></li>
									</ul>
								</div>
								<div class="currency">
									<h6>Currency</h6>
									<ul>
										<li><a href="#">€ Euro</a></li>
										<li><a href="#">£ Pound Sterling</a></li>
										<li><a href="#">$ US Dollar</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item search">
						<div class="search-icon"><i class="icon-loupe"></i></div>
					</li>
					<li class="nav-item wishlist">
						<a href="wishlist.html"><i class="icon-heart"></i></a>
					</li>
					<li class="nav-item cart">
						<div class="cart-icon"><i class="icon-shopping-bag"></i><span class="total">5</span></div>
						<div class="cart-droapdown">
							<div class="cart-body mCustomScrollbar content">
        						<div class="item-list">
        							<div class="img-part">
        								<img class="img-fluid mx-auto" src="images/minicart-img1-89x109.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
        							</div>
        							<div class="dis-part">
        								<a class="product-name" href="#">Licity jelly leg flat Sandals</a>
        								<div class="Qty"><label>Qty:</label> 1</div>
        								<div class="price">$23.00</div>
        							</div>
        							<a class="remove" href="#"><i class="icon-add"></i></a>
        						</div>
        						<div class="item-list">
        							<div class="img-part">
        								<img class="img-fluid mx-auto" src="images/minicart-img2-89x109.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
        							</div>
        							<div class="dis-part">
        								<a class="product-name" href="#">Stripe Print Maxi Dress</a>
        								<div class="Qty"><label>Qty:</label> 1</div>
        								<div class="price">$23.00</div>
        							</div>
        							<a class="remove" href="#"><i class="icon-add"></i></a>
        						</div>
        						<div class="item-list">
        							<div class="img-part">
        								<img class="img-fluid mx-auto" src="images/minicart-img3-89x109.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
        							</div>
        							<div class="dis-part">
        								<a class="product-name" href="#">Slim Fit Stretch Wool Blazer</a>
        								<div class="Qty"><label>Qty:</label> 1</div>
        								<div class="price">$23.00</div>
        							</div>
        							<a class="remove" href="#"><i class="icon-add"></i></a>
        						</div>
        						<div class="item-list">
        							<div class="img-part">
        								<img class="img-fluid mx-auto" src="images/minicart-img3-89x109.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
        							</div>
        							<div class="dis-part">
        								<a class="product-name" href="#">Slim Fit Stretch Wool Blazer</a>
        								<div class="Qty"><label>Qty:</label> 1</div>
        								<div class="price">$23.00</div>
        							</div>
        							<a class="remove" href="#"><i class="icon-add"></i></a>
        						</div>
        					</div>
        					<div class="cart-footer">
        						<div class="subtotal">
        							<label>Cart Subtotal:</label><span class="price">$270.00</span>
        						</div>
        						<div class="">
        							<a class="btn-1 cart-btn" href="#"><span>View and Edit Cart</span></a>
        							<a class="btn-1 checkout-btn" href="#"><span>Proceed to Checkout</span></a>
        						</div>
        					</div>
						</div>
					</li>
					<li class="nav-item asidepart-btn">
						<div class="aside-toggler">
							<button class="navbar-toggler" type="button">
	    						<span class="navbar-toggler-icon"></span>
	    						<span class="navbar-toggler-icon"></span>
	    						<span class="navbar-toggler-icon"></span>
	    					</button>
	    				</div>
						<!-- <div class="aside-part">hi search</div> -->
					</li>
				</ul>
			</div>
			<div class="bg-overlay"></div>
		</nav>
    </div>
    <div class="search-droapdown">
    	<div class="searchinner position-relative">
    		<div class="close">x</div>
    		<h3>search</h3>
    		<form class="search-form">
    			<input class="search-input" type="text" name="search" placeholder="search" />
    			<button class="submit">Submit</button>
    		</form>
    	</div>
    </div>
    <!--  Aside Box -->
    <div class="aside-box-content">
	    <div class="content-info">
			<div class="aside-top">
				<div class="remove">x</div>
				<div class="clearfix"></div>
			</div>
			<div class="aside-body">
				<div class="logo">
					<a href="#" class="d-flex align-items-center">
						<img class="img-fluid mx-auto" src="images/logo.png" alt="MIIAS Furniture HTML5 &amp; Bootstrap 4 Theme">
					</a>
				</div>
				<div class="about-company">
					<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				    <ul>
					    <li><i class="icon-telephone"></i>+1123456789</li>
					    <li><i class="icon-pin"></i>433-447 San Pedro St, Los Angeles, CA 90013</li>
					    <li><i class="icon-envelope"></i>Support@obachan.com</li>
					</ul>
				</div>
				<div class="subscribe-form">
					<h6>Newsletter</h6>
					<form class="">
						<div class="form-group position-relative m-0">
							<input type="email" name="EMAIL" placeholder="Email" />
							<button class="submit-btn"><i class="icon-right"></i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="aside-footer">
				<h6>Follow US</h6>
				<div class="social-part">
					<ul>
						<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-pinterest"></i></a></li>
						<li><a href="#"><i class="icon-youtube"></i></a></li>
						<li><a href="#"><i class="icon-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bg-overlay"></div>
	</div>
</header>
<!-- header end -->
<!-- banner section start -->
<?php include "../layouts/breadcrumb.php";?>

<div class="content-wrapper login-page">
	<section class="login-register-section">
		<div class="container">
			<div class="inner">
				<div class="tab-wrapper">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#Login_Tab">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#Register_Tab">Register</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="Login_Tab" class="tab-pane active">
							<form action="#" class="login-form">
								<div class="form-group">
									<label>Username or Email Address<span class="star">*</span></label>
									<input type="email" class="form-control" placeholder="Username or Email Address" id="email" />
								</div>
								<div class="form-group">
									<label>Password <span class="star">*</span></label>
									<input type="password" class="form-control" placeholder="*****" id="pwd" />
								</div>
								<div class="form-group text-right">
									<a class="forgot-pass" href="#">Forgot Password?</a>
								</div>
								<button type="submit" class="btn btn-2 btn">Sign In <span></span></button>
							</form>
						</div>
						<div id="Register_Tab" class="tab-pane fade">
							<form action="#" class="registration-form">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-6">
										<div class="form-group">
											<label>First Name<span class="star">*</span></label>
											<input type="text" class="form-control" placeholder="First Name" />
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-6">
										<div class="form-group">
											<label>Last Name<span class="star">*</span></label>
											<input type="text" class="form-control" placeholder="Last Name" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>username or email address<span class="star">*</span></label>
									<input type="email" class="form-control" placeholder="username or email address" />
								</div>
								<div class="row">
									<div class="col-12 col-sm-12 col-md-6">
										<div class="form-group">
											<label>Password <span class="star">*</span></label>
											<input type="password" class="form-control" placeholder="******"  />
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-6">
										<div class="form-group">
									<label>Confirm Password <span class="star">*</span></label>
									<input type="password" class="form-control" placeholder="******" id="pwd" />
								</div>
									</div>
								</div>
								<button type="submit" class="btn btn-2 btn">Create Account <span></span></button>
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Partner Logo -->
	<div class="partner-logo text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
			    	<div class="owl-carousel plogo-carousel">
			  			<img src="images/clientLogo01.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
			  			<img src="images/clientLogo02.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
			        	<img src="images/clientLogo03.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
			        	<img src="images/clientLogo04.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
			        	<img src="images/clientLogo05.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
			        	<img src="images/clientLogo03.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
			        	<img src="images/clientLogo02.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
					</div>
			    </div>
			</div>
		</div>
	</div>
	<!-- /Partner Logo -->
</div>
<!-- Footer Start -->
<?php include "../layouts/footer.php";?>
<!-- Footer End -->


<!-- Theme Script Include -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>  -->
<!-- <script src="js/jquery-3.4.1.min.js"></script> -->
<?php include "../layouts/scripts.php";?>
<script>
	$('#home-banner1').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        }
	    }
	});
	function myac(){
		$('.my-ac-icon,.cart-icon').click(function(){
			$(this).next().slideToggle();
		});
	}
	function headersearch(){
		$('.search-icon,.search-droapdown .close').click(function(){
			$('.search-droapdown').slideToggle();
		});
	}
	
	myac();
	headersearch();
</script>
</body>

<!-- Mirrored from www.ncodetechnologies.com/Modish/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:32 GMT -->
</html>