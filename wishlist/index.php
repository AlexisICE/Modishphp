<?php 
include "app/config.php";
include "app/collectionHome.php";
 $title = "wishlist";
 $home = "home";
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from www.ncodetechnologies.com/Modish/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:32 GMT -->

<?php include"../layouts/header.php;"?>

<body class="layout-1">
<!-- header start -->

<?php include"../layouts/nav.php;"?>

<!-- header end -->
<!-- banner section start -->

<?php include"../layouts/breadcrumb.php;"?>

<div class="content-wrapper wishlist-page">
	<section class="cart-table-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="tit"><span>_</span>wishlist</h2>
				</div>
				<div class="col-12 col-sm-12">
					<div class="center">
						<div class="table-responsive-lg">
	    					<table class="cart-table table table-bordered">
	    						<thead class="thead">
	    							<tr>
	    								<th class="product">Product</th>
	    								<th class="price">Price</th>
	    								<th class="quanity">Stock Status</th>
	    								<th class="total"></th>
										<th class="edit"></th>
	    							</tr>
	    						</thead>
	    						<tbody>
	    							<tr>
										<td>
											<div class="product-col">
												<div class="pro-img">
													<img class="mx-auto img-fluid" src="images/cart-table-img1-135x160.jpg">
												</div>
												<div class="pro-dis">
													<h4 class="pro-tit">Licity jelly leg flat Sandals</h4>
												</div>
											</div>
										</td>
										<td>$23.00</td>
										<td>
											<span class="stock available">In Stock</span>
										</td>
										<td><a class="cart-btn" href="#">Add to Cart</a></td>
										<td>
											<ul class="edit-list">
												<li><a href="#"><i class="icon-trash"></i></a></li>
											</ul>
										</td>
	    							</tr>
	    							<tr>
										<td>
											<div class="product-col">
												<div class="pro-img">
													<img class="mx-auto img-fluid" src="images/cart-table-img2-135x160.jpg">
												</div>
												<div class="pro-dis">
													<h4 class="pro-tit">Stripe Print Maxi Dress</h4>
												</div>
											</div>
										</td>
										<td>$23.00</td>
										<td>
											<span class="stock not-available">out of stock</span>
										</td>
										<td><a class="cart-btn" href="#">Add to Cart</a></td>
										<td>
											<ul class="edit-list">
												<li><a href="#"><i class="icon-trash"></i></a></li>
											</ul>
										</td>
	    							</tr>
	    							<tr>
										<td>
											<div class="product-col">
												<div class="pro-img">
													<img class="mx-auto img-fluid" src="images/cart-table-img3-135x160.jpg">
												</div>
												<div class="pro-dis">
													<h4 class="pro-tit">Slim Fit Stretch Wool Blazer</h4>
												</div>
											</div>
										</td>
										<td>$23.00</td>
										<td>
											<span class="stock available">In Stock</span>
										</td>
										<td><a class="cart-btn" href="#">Add to Cart</a></td>
										<td>
											<ul class="edit-list">
												<li><a href="#"><i class="icon-trash"></i></a></li>
											</ul>
										</td>
	    							</tr>
	    							<tr>
										<td>
											<div class="product-col">
												<div class="pro-img">
													<img class="mx-auto img-fluid" src="images/cart-table-img4-135x160.jpg">
												</div>
												<div class="pro-dis">
													<h4 class="pro-tit">Licity jelly leg flat Saandals</h4>
												</div>
											</div>
										</td>
										<td>$23.00</td>
										<td>
											<span class="stock available">In Stock</span>
										</td>
										<td><a class="cart-btn" href="#">Add to Cart</a></td>
										<td>
											<ul class="edit-list">
												<li><a href="#"><i class="icon-trash"></i></a></li>
											</ul>
										</td>
	    							</tr>
	    						</tbody>
	    						<tfoot>
	    						</tfoot>
	    					</table>
	    				</div>
    				</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Footer Start -->

<?php include"../layouts/footer.php;"?>

<!-- Footer End -->


<!-- Theme Script Include -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>  -->
<!-- <script src="js/jquery-3.4.1.min.js"></script> -->

<?php include"../layouts/scripts.php;"?>

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

<!-- Mirrored from www.ncodetechnologies.com/Modish/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:32 GMT -->
</html>