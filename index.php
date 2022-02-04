<!-- Aqui va el config del app -->
<?php 

include "app/config.php";
include "app/collectionHome.php";
 $title = "Home";
 $url = ""
?>

<!DOCTYPE html>
<html lang="es">
<head>
<?php include "layouts/header.php";?>
</head>

<body class="layout-1">
<?php include "layouts/nav.php";?>

		<section class="collection-wrapper section-padding">
		<div class="center">
		<div class="row">
			<?php foreach ($category as $categorys):?>
			<!-- Un unico producto que se va a repetir -->
			<div class="col-12 col-sm-12 col-md-4">
				<div class="collection-box">
					<img src="<?= BASE_PATH ?>public/images/<?= $categorys['image']?>" alt="" />
					<div class="collection-txt">
					<h4><?= $categorys['title']?></h4>
					<h5>collections</h5>
					<a class="btn collection-btn" href="shop.html">view collection</a>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
		</div>


		<!-- producto que se va a repetir -->
		<section class="bseller-wrapper section-padding">
		<div class="container">
		<div class="sec-tit">
		<h2>Best Seller</h2>
		</div>
		<div class="row">
		<div class="col-12">
		<div class="filter-list">
		<ul>
			<li class="active" data-filter="All">All</li>
			<li data-filter="Blazers">Blazers</li>
			<li data-filter="Jackets">Jackets</li>
			<li data-filter="Dress">Dress</li>
			<li data-filter="Trousers">Trousers</li>
			<li data-filter="Accessories">Accessories</li>
		</ul>
		</div>
		<div class="filters-content">
		<div class="row">
		<?php foreach ($product as $products):?>
		<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" data-cat="Accessories">
			<div class="product">
				<div class="product-img">
					<img src="<?= BASE_PATH ?>public/images/<?= $products['image']?>" alt="" />
					<div class="hover-box">
						<div class="cart-btn-wrp">
						<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						</div>
						<ul class="product-card_control">
						<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						<li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
						<li><a href="#"><i class="icon-compare"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product-card-info">
					<a class="pro-tit" href="product-detail.html">
						<h4><?= $products['productName']?></h4>
					</a>
					<p class="price"><?= $products['price']?></p>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	
	<!-- posibles nuevas colleciones de ropa -->
	<section class="add-section section-padding">
		<div class="center">
			<div class="row">
				<?php foreach ($newArrival as $newArrivals):?>
						<div class="col-12 col-sm-12 col-md-6">
								<div class="collection-box">
								<img src="<?= BASE_PATH ?>public/images/<?= $newArrivals['image']?>" alt="" />
								<div class="add-txt">
									<div class="label"><?= $newArrivals['subtitle']?></div>
									<h5><?= $newArrivals['mainTitle']?></h5>
									<a class="btn collection-btn" href="shop.html">Shop Now</a>
								</div>
							</div>
						</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

	<!-- ROPA NUEVA RECIEN LLEGADA -->
		<section class="new-arrivals section-padding">
	<div class="container">
		<div class="sec-tit">
			<h2>New Arrivals</h2>
		</div>

		<div class="row">
		<?php foreach ($newCloth as $newCloths):?>
		<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3" data-cat="Accessories">
			<div class="product">
				<div class="product-img">
					<img src="<?= BASE_PATH ?>public/images/<?= $newCloths['image']?>" alt="" />
					<div class="hover-box">
						<div class="cart-btn-wrp">
						<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						</div>
						<ul class="product-card_control">
						<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						<li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
						<li><a href="#"><i class="icon-compare"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product-card-info">
					<a class="pro-tit" href="product-detail.html">
						<h4><?= $newCloths['productName']?></h4>
					</a>
					<p class="price"><?= $newCloths['price']?></p>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
	</section>
	
	<!-- COMENTARIOS -->
	<div class="testimonial-section section-padding">
		<div class="container">
			<div class="center">
				<div class="owl-carousel" id="testi-carousel">
					<div>
					<img class="img-fluid mx-auto rounded-circle client-img" src="images/client-img.jpg" alt="Modish Furniture HTML5 & Bootstrap 4 Theme" />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
					<img class="img-fluid mx-auto" src="images/quote.png" alt="Modish Furniture HTML5 & Bootstrap 4 Theme" />
					<div class="cl-name">John due, noilot</div>
					</div>
					<div>
					<img class="img-fluid mx-auto rounded-circle client-img" src="images/client-img.jpg" alt="Modish Furniture HTML5 & Bootstrap 4 Theme" />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
					<img class="img-fluid mx-auto" src="images/quote.png" alt="Modish Furniture HTML5 & Bootstrap 4 Theme" />
					<div class="cl-name">John due, noilot</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- Blog Section -->
		<section class="blog-section section-padding">
			<div class="container">
				<div class="sec-tit">
					<h2>Latest From Blog</h2>
				</div>
				<div class="row">
				<?php foreach ($post as $posts):?>
					<div class="col-12 col-sm-12 col-md-4">
						<div class="single-blog">
						<div class="blog-photo">
							<a href="blog-detail.html"><img src="<?= BASE_PATH ?>public/images/<?= $posts['image']?>" alt="" /></a>
						</div>
							<div class="blog-info text-left">
								<div class="date-and-author">
									<div class="post-date"><?= $posts['postDate']?></div>
									<div class="author-name">by<?= $posts['autor']?></div>
								</div>
								<h4><a href="blog-detail.html"><?= $posts['title']?></a></h4>
								<p><?= $posts['text']?></p>
								<a href="blog-detail.html" class="rmore">Read more</a>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</section>

		<!-- Newsletter Section -->
	<div class="newsletter-section section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-12">
					<div class="sec-tit">
					<h2>Sign Up For Our Newsletter</h2>
					</div>
					<p>Subscribe to our newsletters now and stay up to date with new collections, the latest lookbooks and exclusive offers.</p>
					<form class="form-newsletter">
					<input class="form-control" type="text" placeholder="Enter your email address here" />
					<button>subscribe</button>
					</form>
				</div>
			</div>
			<div class="h-ser">
				<div class="container">
					<div class="row deliveryinfo">
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="ic-box">
							<i class="icon-shipped"></i>
							<div class="ic-txt">
								<h5>Free Shipping</h5>
								<p>Free shipping on all US order or order above $200</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="ic-box">
							<i class="icon-24-hours-1"></i>
							<div class="ic-txt">
								<h5>Support 24/7</h5>
								<p>Contact us 24 hours a day, 7 days a week</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="ic-box">
							<i class="icon-return"></i>
							<div class="ic-txt">
								<h5>30 Days Return</h5>
								<p>Simply return it within 30 days for an exchange</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="ic-box">
							<i class="icon-security"></i>
							<div class="ic-txt">
								<h5>100% Payment Secure</h5>
								<p>We ensure secure payment with us</p>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<footer> <?php include "layouts/footer.php";?></footer>
		<?php include "layouts/scripts.php";?>

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
</html>