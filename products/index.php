<!-- Aqui va el config del app -->
<?php 

include "../app/config.php";
include "../app/collectionHome.php";
 $title = "products";
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

<div class="content-wrapper product-detail-page">
        	<section class="single-product-section">
        		<div class="container">
        			<div class="row">
        				<div class="col-12 col-sm-12 col-md-6  col-lg-5">
        					<div class="prod-gal">
								<div id="sync1" class="owl-carousel owl-theme">
									<div class="item">
										<div class="easyzoom easyzoom--overlay">
											<a href="images/detail-img-big-1.jpg">
												<img src="images/detail-img-big-1.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="item">
										<div class="easyzoom easyzoom--overlay">
											<a href="images/detail-img-big-2.jpg">
												<img src="images/detail-img-big-2.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="item">
										<div class="easyzoom easyzoom--overlay">
											<a href="images/detail-img-big-3.jpg">
												<img src="images/detail-img-big-3.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="item">
										<div class="easyzoom easyzoom--overlay">
											<a href="images/detail-img-big-4.jpg">
												<img src="images/detail-img-big-4.jpg" alt="">
											</a>
										</div>
									</div>
									
								</div>
								<div id="sync2" class="owl-carousel owl-theme">
									<div class="item"><img src="images/detail-img-1.jpg" alt=""></div>
									<div class="item"><img src="images/detail-img-2.jpg" alt=""></div>
									<div class="item"><img src="images/detail-img-3.jpg" alt=""></div>
									<div class="item"><img src="images/detail-img-4.jpg" alt=""></div>
								</div>
							</div>		
        				</div>
        				<div class="col-12 col-sm-12 col-md-6 col-lg-7">
        					<div class="product-details-content-part">
                                <h2 class="product-tit">Licity jelly leg flat Sandals</h2>
                                <div class="single-product-reviews">
				                    <span class="star-box">
				                        <i class="icon-star font-yellow"></i>
				                        <i class="icon-star font-yellow"></i>
				                        <i class="icon-star font-yellow"></i>
				                        <i class="icon-star"></i>
				                        <i class="icon-star"></i>
				                    </span>
				                    <a class="review-link" href="#">(Based on 4 reviews)</a>
				                </div>
				                <div class="price mt-2">$23.00</div>
				                <!-- <div class="availablity">Available : <span class="yes">In Stock</span></div> -->
				                <div class="short-discription">
				                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printe r took a galley of type and scrambled it to make a type specimen book. </p>
				                </div>
				                <div class="product-details-description">
				                	<div class="color-and-size">
					                	<div class="color">
					                		<label>Color:</label>
											<form>
												<ul class="color-list">
													<li class="color-1 active"><a href="#"><span></span></a></li>
						                			<li class="color-2"><a href="#"><span></span></a></li>
						                			<li class="color-3"><a href="#"><span></span></a></li>
						                			<li class="color-4"><a href="#"><span></span></a></li>
						                			<li class="color-5"><a href="#"><span></span></a></li>
						                		</ul>
											</form> 
					                	</div>
					                	<div class="size">
					                		<label>Size:</label>
					                		<ul class="size-list">
					                			<li><a href="#">X</a></li>
					                			<li><a href="#">M</a></li>
					                			<li><a href="#">L</a></li>
					                		</ul>
					                	</div>
					                	<div class="quantitypic">
					                		<label>Quantity:</label>
					                		<div class="pro-qty">
					                            <div class="dec qty-btn button">-</div>
					                            <input id="partridge" type="text" value="1" />
					                            <div class="inc qty-btn button">+<i class="icon-add-1"></i></div>
				                            </div>
				                        </div>
									</div>
				                	<ul class="description-list">
				                		<li><span>SKU :</span> PL-258</li>
				                		<li><span>Category :</span> Women</li>
				                		<li><span>Tags :</span> Shoes / Sale / Accessories</li>
				                	</ul>
								</div>
								<div class="cart-and-share">
									<div class="cart-btn-div">
				                        <div class="cart">
				                        	<a class="cart-btn" href="cart.html">Add to Cart</a>
				                        </div>
				                        <div class="wishlist">
				                        	<a class="wishlist-btn" href="wishlist.html"><i class="icon-heart"></i></a>
				                        </div>
				                	</div>
				                	<div class="social-share">
				                		<label>Share this items :</label>
			                        	<ul>
											<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
											<li><a href="#"><i class="icon-twitter"></i></a></li>
											<li><a href="#"><i class="icon-pinterest"></i></a></li>
											<li><a href="#"><i class="icon-youtube"></i></a></li>
											<li><a href="#"><i class="icon-google-plus-social-logotype"></i></a></li>
										</ul>
			                        </div>
		                        </div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
        	<section class="product-description-section">
        		<div class="container">
        			<div class="row">
        				<div class="col-12 dis-tab">
        					<div id="horizontalTab-arrival">
        						<ul class="resp-tabs-list">
        							<li>description</li>
        							<li>additional information</li>
        							<li>reviews (1)</li>
        						</ul>
        						<div class="resp-tabs-container">
        							<div>
        								<div class="discription tab-content">
        									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
        								</div>
        							</div>
        							<div>
        								<div class="additional-information tab-content">
        									<table class="table table-bordered addinfo">
        										<tbody>
        											<tr>
        												<th>Name</th>
        												<td>Licity jelly leg flat Sandals</td>
        											</tr>
        											<tr>
        												<th>Category</th>
        												<td>Woman</td>
        											</tr>
        											<tr>
        												<th>Color</th>
        												<td>Brown, Black, Gold</td>
        											</tr>
        											<tr>
        												<th>Size</th>
        												<td>XL, XXS, M</td>
        											</tr>
        											<tr>
        												<th>Brand</th>
        												<td>Diesel, Polo, Calvin Klein</td>
        											</tr>
        										</tbody>
        									</table>
        								</div>
        							</div>
        							<div>
        								<div class="reviews tab-content">
        									<h3>01 ) Licity jelly leg flat Sandals</h3>
        									<div class="review-header">
        										<div class="review-photo">
        											<img src="images/women-99x99.jpg" class="img-fluid rounded-circle" alt="">
        										</div>
        										<div class="review-body">
        											<div class="ratings">
        												<i class="icon-star font-yellow"></i>
        												<i class="icon-star font-yellow"></i>
        												<i class="icon-star font-yellow"></i>
        												<i class="icon-star"></i>
        												<i class="icon-star"></i>
        											</div>
        											<div class="rev-author"><span>Rucy Laxon</span> July 08, 2019</div>
        											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        										</div>
        									</div>

        									<div class="review-form">
        										<h4>Add a Review</h4>
        										<p>Your email address will not be published. Required fields are marked *</p>
        										<div class="rate-txt">Your rating:</div>
        										<div class="ratings">
        											<i class="icon-star"></i>
        											<i class="icon-star"></i>
        											<i class="icon-star"></i>
        											<i class="icon-star"></i>
        											<i class="icon-star"></i>
        										</div>
        										<form method="post">
        											<div class="row">
        												<div class="col-12">
        													<div class="form-group">
        														<label>Your Review*</label>
        														<textarea class="form-control"></textarea>
        													</div>
        												</div>
        												<div class="col-sm-12 col-12">
        													<div class="form-group">
        														<label>Name*</label>
        														<input type="text" class="form-control" placeholder="Name">
        													</div>
        												</div>
        												<div class="col-sm-12 col-12">
        													<div class="form-group">
        														<label>Email*</label>
        														<input type="email" class="form-control" placeholder="Email">
        													</div>
        												</div>
        											</div>
        											<input type="submit" name="submit" value="submit">
        										</form>
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
        </div>
</body>
</html>
