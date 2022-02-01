<!-- Aqui va el config del app -->
<?php 

include "../app/config.php";
include "../app/collectionHome.php";
 $title = "about";
 $home = "home";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../layouts/header.php"; ?>
</head>
<body class="layout-1">
<?php include "../layouts/nav.php";?>
<?php include "../layouts/breadcrumb.php"; ?>
<section class="worksec">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<div class="left-side-img">
							<img src="<?= BASE_PATH ?>public/images/wardrobe.jpg" class="img-fluid wardrobe">
							<img src="<?= BASE_PATH ?>public/images/leaf.png" class="img-fluid leaf">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-12">
						<div class="right-side-content text-left">
							<h2>Good Fashion will come my way!</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s and scrambled it to make.</p>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
			</div>	
		</section>
        <section class="abt-servicesec wrapper80">
			<div class="container">
				<div class="our-services row">
					<div class="col-12 col-md-6 col-lg-3">
						<div class="service">
							<i class="icon-shipped"></i>
							<h6>Free Shipping</h6>
							<p>Free shipping on all US order or order above $200</p>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<div class="service">
							<i class="icon-24-hours"></i>
							<h6>Support 24/7</h6>
							<p>Contact us 24 hours a day, 7 days a week</p>
						</div>				
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<div class="service">
							<i class="icon-return"></i>
							<h6>30 Days Return</h6>
							<p>Simply return it within 30 days for an exchange</p>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<div class="service">
							<i class="icon-security"></i>
							<h6>100% Payment Secure</h6>
							<p>We ensure secure payment with us</p>
						</div>
					</div>			
				</div>
			</div>	
		</section>
        	<!-- new style section start -->
		<section class="new-style-section wrapper100 text-left">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="new-style-left">
							<h2>Coming new style 2019</h2>
						</div>				
					</div>
					<div class="col-lg-6 col-12">
						<div class="new-style-right">
							<p class="pra1">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
						</div>
					</div>
				</div>
			</div>
		</section>

        <footer> <?php include "../layouts/footer.php";?></footer>
</body>
</html>





















