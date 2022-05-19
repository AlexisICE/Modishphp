<!-- Aqui va el config del app -->
<?php 

include "../app/config.php";
include "../app/collectionHome.php";
 $title = "Shop";
 $url = ""
?>

<!DOCTYPE html>
<html>
	
<!-- Mirrored from www.ncodetechnologies.com/Modish/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:25 GMT -->
<head>
		<?php include "../layouts/header.php"?>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->
	</head>

<body class="layout-1">
<!-- header start -->
<?php include "../layouts/nav.php"?>
<!-- Theme Header End -->
<!-- banner section start -->
<?php include "../layouts/breadcrumb.php"?>
<!-- shop section -->
<section class="wrapper100 products-categories-section">
	<div class="row flex-row-reverse">
		<div class="col-lg-9 col-xl-9 col-12">
			<div class="short-bysec">
				<div class="grid-list-option d-flex">
			        <ul class="nav">
			            <li>
			            <a class="active show" data-toggle="tab" href="#grid"><i class="icon-squares"></i></a>
			            </li>
			            <li>
			            <a data-toggle="tab" href="#list" class="">
			            	<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span></a>
			            </li>
			        </ul>
			    </div>
				
				<div class="short-byright">
					<div class="shortby-dropdown">
						<div class="filter-div">
		                    <select class="popularity-filter-box" id="popularity" name="popularity1">
		                    	<option>Sort by popularity</option>
		                    	<option>Sort By Average Rating</option>
		                    	<option>Sort By Newness</option>
		                    	<option>Sort By Price: Low to High</option>
		                    	<option>Sort By Price: High to Low</option>
		                    </select>
		                    <select class="page-item-box" id="page-item-box" name="page-item-box1">
		                    	<option>12 Items per page</option>
		                    	<option>16 Items per page</option>
		                    	<option>22 Items per page</option>
		                    	<option>26 Items per page</option>
		                    </select>
		                </div>
					</div>
				</div>
			</div>
			<div class="shop-product">
            	<div id="myTabContent-2" class="tab-content">
                    <div id="grid" class="tab-pane fade active show">
                    	<div class="row">
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product1-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="tag sale">sale</div>
						                <div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Licity jelly leg flat Sandals</h4></a>
										<p class="price">$23.00</p>
									</div>
						        </div>
						    </div>
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product2-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Giraffe Print T-Shirt</h4></a>
										<p class="price">$35.00</p>
									</div>
						        </div>
						    </div>
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product3-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="tag hot">hot</div>
						                <div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Stripe Print Maxi Dress</h4></a>
										<p class="price">$85.00</p>
									</div>
						        </div>
						    </div>
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product4-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="tag new">new</div>
						                <div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Blue sun top in grid top</h4></a>
										<p class="price">$35.00</p>
									</div>
						        </div>
						    </div>
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product5-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="tag sale">sale</div>
						                <div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Milok Jacket</h4></a>
										<p class="price">$23.00</p>
									</div>
						        </div>
						    </div>
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product6-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Slim Fit Stretch Wool Blazer</h4></a>
										<p class="price">$35.00</p>
									</div>
						        </div>
						    </div>
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product7-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="tag hot">hot</div>
						                <div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Stripe Print Maxi Dress</h4></a>
										<p class="price">$85.00</p>
									</div>
						        </div>
						    </div>
						    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
						        <div class="product">
						            <div class="product-img">
						            	<img src="images/product8-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
						            	<div class="tag new">new</div>
						                <div class="hover-box">
						                	<div class="cart-btn-wrp">
						                		<a class="cart-btn btn" href="cart.html">Add to Cart</a>
						                	</div>
						            		<ul class="product-card_control">
						            			<li><a title="Quick View" href="#" data-toggle="modal" data-target="#quickview-model"><i class="icon-loupe"></i></a></li>
						            			<li><a href="#"><i class="icon-heart"></i></a></li>
						            			<li><a href="#"><i class="icon-compare"></i></a></li>
						            		</ul>
						                </div>
						            </div>
						            <div class="product-card-info">
										<a class="pro-tit" href="product-detail.html"><h4>Blue sun top in grid top</h4></a>
										<p class="price">$35.00</p>
									</div>
						        </div>
						    </div>
						</div>
                    </div>
                    <div id="list" class="tab-pane fade">
                    	<div class="product">
                    		<div class="row">
                    			<div class="col-12 col-sm-5 col-md-5 col-lg-4">
                    				<a href="product-detail.html"><img src="images/product1-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" /></a>
                    			</div>
                    			<div class="col-12 col-sm-7 col-md-7 col-lg-8 text-left dis-col">
                    				<div class="top-part">
                    					<a href="product-detail.html"><h3 class="mb-3">Licity jelly leg flat Sandals</h3></a>
                    					<div class="price mt-2">$23.00</div>
                    					<span class="star-box">
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star"></i>
                    						<i class=" icon-star"></i>
                    					</span><br/>
                    					<a class="review-link" href="#">(Based on 4 reviews)</a>
                    				</div>
                    				<div class="discription">
                    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    				</div>
                    				<div class="btn-part hover-content">
                    					<a title="Add To Cart" href="cart.html" class="cart-btn">add to cart</a>
                    					<a title="Wish List" href="wishlist.html" class="icons wishlist"><i class="icon-heart"></i></a>
                    					<a title="Compare Product" href="#" class="icons comproduct"><i class="icon-compare"></i></a>

                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="product">
                    		<div class="row">
                    			<div class="col-12 col-sm-5 col-md-5 col-lg-4">
                    				<a href="product-detail.html"><img src="images/product2-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" /></a>
                    			</div>
                    			<div class="col-12 col-sm-7 col-md-7 col-lg-8 text-left dis-col">
                    				<div class="top-part">
                    					<a href="product-detail.html"><h3 class="mb-3">Giraffe Print T-Shirt</h3></a>
                    					<div class="price mt-2">$23.00</div>
                    					<span class="star-box">
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star"></i>
                    						<i class=" icon-star"></i>
                    					</span><br/>
                    					<a class="review-link" href="#">(Based on 4 reviews)</a>
                    				</div>
                    				<div class="discription">
                    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    				</div>
                    				<div class="btn-part hover-content">
                    					<a title="Add To Cart" href="cart.html" class="cart-btn">add to cart</a>
                    					<a title="Wish List" href="wishlist.html" class="icons wishlist"><i class="icon-heart"></i></a>
                    					<a title="Compare Product" href="#" class="icons comproduct"><i class="icon-compare"></i></a>

                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="product">
                    		<div class="row">
                    			<div class="col-12 col-sm-5 col-md-5 col-lg-4">
                    				<a href="product-detail.html"><img src="images/product3-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" /></a>
                    			</div>
                    			<div class="col-12 col-sm-7 col-md-7 col-lg-8 text-left dis-col">
                    				<div class="top-part">
                    					<a href="product-detail.html"><h3 class="mb-3">Stripe Print Maxi Dress </h3></a>
                    					<div class="price mt-2">$23.00</div>
                    					<span class="star-box">
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star"></i>
                    						<i class=" icon-star"></i>
                    					</span><br/>
                    					<a class="review-link" href="#">(Based on 4 reviews)</a>
                    				</div>
                    				<div class="discription">
                    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    				</div>
                    				<div class="btn-part hover-content">
                    					<a title="Add To Cart" href="cart.html" class="cart-btn">add to cart</a>
                    					<a title="Wish List" href="wishlist.html" class="icons wishlist"><i class="icon-heart"></i></a>
                    					<a title="Compare Product" href="#" class="icons comproduct"><i class="icon-compare"></i></a>

                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="product">
                    		<div class="row">
                    			<div class="col-12 col-sm-5 col-md-5 col-lg-4">
                    				<a href="product-detail.html"><img src="images/product4-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" /></a>
                    			</div>
                    			<div class="col-12 col-sm-7 col-md-7 col-lg-8 text-left dis-col">
                    				<div class="top-part">
                    					<a href="product-detail.html"><h3 class="mb-3">Slim Fit Stretch Wool Blazer</h3></a>
                    					<div class="price mt-2">$23.00</div>
                    					<span class="star-box">
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star"></i>
                    						<i class=" icon-star"></i>
                    					</span><br/>
                    					<a class="review-link" href="#">(Based on 4 reviews)</a>
                    				</div>
                    				<div class="discription">
                    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    				</div>
                    				<div class="btn-part hover-content">
                    					<a title="Add To Cart" href="cart.html" class="cart-btn">add to cart</a>
                    					<a title="Wish List" href="wishlist.html" class="icons wishlist"><i class="icon-heart"></i></a>
                    					<a title="Compare Product" href="#" class="icons comproduct"><i class="icon-compare"></i></a>

                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="product">
                    		<div class="row">
                    			<div class="col-12 col-sm-5 col-md-5 col-lg-4">
                    				<a href="product-detail.html"><img src="images/product1-270x340.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" /></a>
                    			</div>
                    			<div class="col-12 col-sm-7 col-md-7 col-lg-8 text-left dis-col">
                    				<div class="top-part">
                    					<a href="product-detail.html"><h3 class="mb-3">Licity jelly leg flat Sandals</h3></a>
                    					<div class="price mt-2">$23.00</div>
                    					<span class="star-box">
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star font-yellow"></i>
                    						<i class=" icon-star"></i>
                    						<i class=" icon-star"></i>
                    					</span><br/>
                    					<a class="review-link" href="#">(Based on 4 reviews)</a>
                    				</div>
                    				<div class="discription">
                    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    				</div>
                    				<div class="btn-part hover-content">
                    					<a title="Add To Cart" href="cart.html" class="cart-btn">add to cart</a>
                    					<a title="Wish List" href="wishlist.html" class="icons wishlist"><i class="icon-heart"></i></a>
                    					<a title="Compare Product" href="#" class="icons comproduct"><i class="icon-compare"></i></a>

                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
			<div class="shop-paginationsec">
				<div class="num-of-items">
					<span>Showing 1-16 of 55 Item(s)</span>
				</div>
				<ul class="pagination">
					<li class="page-item"><a href="#" class="page-link"><</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item active"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">></a></li>
				</ul>
			</div>
		</div>	
		<div class="col-lg-3 col-xl-3 col-12">
			<div class="shopsecleft">
				<ul class="categories text-left" id="categories">
					<h4>_Categories</h4>
					<li class="active">
						<span>Women  (85)</span>
						<div class="categories-dropdown">
							<a href="#">Blazers</a>
							<a href="#">Jackets</a>
							<a href="#">Dresses</a>
							<a href="#">Accessories</a>
							<a href="#">Shoes</a>
						</div>
					</li>
					<li>
						<span>Men  (69)</span>
						<div class="categories-dropdown">
							<a href="#">Blazers</a>
							<a href="#">Jackets</a>
							<a href="#">Dresses</a>
							<a href="#">Accessories</a>
							<a href="#">Shoes</a>
						</div>
					</li>
					<li>
						<span>Kid  (55)</span>
						<div class="categories-dropdown">
							<a href="#">Blazers</a>
							<a href="#">Jackets</a>
							<a href="#">Dresses</a>
							<a href="#">Accessories</a>
							<a href="#">Shoes</a>
						</div>
					</li>
					<li>
						<span>new arrivals  (65)</span>
						<div class="categories-dropdown">
							<a href="#">Blazers</a>
							<a href="#">Jackets</a>
							<a href="#">Dresses</a>
							<a href="#">Accessories</a>
							<a href="#">Shoes</a>
						</div>
					</li>
					<li>
						<span>Accessories  (90)</span>
						<div class="categories-dropdown">
							<a href="#">Blazers</a>
							<a href="#">Jackets</a>
							<a href="#">Dresses</a>
							<a href="#">Accessories</a>
							<a href="#">Shoes</a>
						</div>
					</li>
				</ul>
				<div class="colorsec text-left">
					<h4>_Color</h4>	
					<a href="#" style="background: #393536;"></a>
					<a href="#" style="background: #ffffff;"></a>
					<a href="#" style="background: #fbda5c;"></a>
					<a href="#" style="background: #f87a79;"></a>
					<a href="#" style="background: #99dde6;"></a>
					<a href="#" style="background: #70c482;"></a>
					<a href="#" style="background: #b3b3b3;"></a>
					<a href="#" style="background: #f5a4c6;"></a>
					<a href="#" style="background: #909ecf;"></a>
					<a href="#" style="background: #42459d;"></a>
					<a href="#" style="background: #f6a085;"></a>
					<a href="#" style="background: #6783e6;"></a>
				</div>
				<div class="price-range text-left">
					<h4>_Price</h4>
					
					<div id="slider-range"></div>
					<button>filter</button>
				</div>
				<div class="cloth-brands text-left">
					<h4>_Brand</h4>
					<a href="#">Calvin Klein  (22)</a>
					<a href="#">Diesel  (35)</a>
					<a href="#">Polo  (10)</a>
					<a href="#">Tommy Hilfiger  (28)</a>
				</div>
				<div class="sizesec text-left">
					<h4>_Size</h4>
					<form class="row">
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check1" class="form-check-input custom-control-input" checked>
							<label  class="form-check-label custom-control-label" for="check1">All Sizes</label>
						</div>
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check2" class="form-check-input custom-control-input">
							<label  class="form-check-label custom-control-label" for="check2">S-M</label>
						</div>
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check3" class="form-check-input custom-control-input">
							<label  class="form-check-label custom-control-label" for="check3">XXS</label>
						</div>
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check4" class="form-check-input custom-control-input">
							<label  class="form-check-label custom-control-label" for="check4">M</label>
						</div>
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check5" class="form-check-input custom-control-input">
							<label  class="form-check-label custom-control-label" for="check5">XS</label>
						</div>
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check6" class="form-check-input custom-control-input">
							<label  class="form-check-label custom-control-label" for="check6">M-L</label>
						</div>
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check7" class="form-check-input custom-control-input">
							<label  class="form-check-label custom-control-label" for="check7">XS-S</label>
						</div>
						<div class="custom-checkbox custom-control col-6">
							<input type="checkbox" id="check8" class="form-check-input custom-control-input">
							<label  class="form-check-label custom-control-label" for="check8">XL</label>
						</div>
					</form>					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Footer Start -->
<?php include "../layouts/footer.php"?>
<!-- Quick View Product -->
<div class="modal fade" id="quickview-model" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog quickview-popup modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="lpart">
					<h5 class="modal-title" id="exampleModalLongTitle">Quick View</h5>
				</div>
				<div class="rpart">
    				<a class="shopping" href="product-listing.html">Continue to shopping</a>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
				</div>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4">
						<div class="pro-img part">
							<img class="img-fluid mx-auto" src="images/quick-view-img-270x329.jpg" alt="Modish HTML5 & Bootstrap 4 Theme" />
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
					<div class="col-12 col-sm-6 col-md-8">
						<div class="product-details-content">
                            <h2 class="product-tit">Licity jelly leg flat Sandals</h2>
                            <div class="single-product-reviews">
			                    <ul class="star-box">
			                        <li><a href="#"><img class="img-fluid" src="images/star.png" /></a></li>
									<li><a href="#"><img class="img-fluid" src="images/star.png" /></a></li>
									<li><a href="#"><img class="img-fluid" src="images/star.png" /></a></li>
									<li><a href="#"><img class="img-fluid" src="images/star.png" /></a></li>
									<li><a href="#"><img class="img-fluid" src="images/star-1.png" /></a></li>
			                    </ul>
			                    <a class="review-link" href="#">(Based on 4 reviews)</a>
			                </div>
			                <div class="price">$23.00</div>
			                <div class="short-discription">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</p>
			                </div>
			                <div class="two-part">
			                	<div class="lpart">
			                		<div class="color-and-size">
					                	<div class="color">
					                		<label>Color :</label>
											<form>
												<ul class="color-list">
													<li class="color-1"><a href="#"><span></span></a></li>
						                			<li class="color-2"><a href="#"><span></span></a></li>
						                			<li class="color-3 active"><a href="#"><span></span></a></li>
						                			<li class="color-4"><a href="#"><span></span></a></li>
						                			<li class="color-5"><a href="#"><span></span></a></li>
						                		</ul>
											</form> 
					                	</div>
					                	<div class="size">
					                		<label>Size :</label>
					                		<select id="size-list">
					                			<option>select</option>
												<option value="x">x</option>
												<option value="m">m</option>
												<option value="l">l</option>
											</select>
					                	</div>
									</div>
									<div class="quantity">
					                	<label>Quantity :</label>
					                	<div class="pro-qty quantitypic">
				                            <div class="dec qty-btn button">-</div>
				                            <input id="partridge" type="text" value="1">
				                            <div class="inc qty-btn button">+</div>
				                        </div>
					                </div>
			                	</div>
			                	<div class="rpart">
			                		<div class="product-details-description">
					                	<ul class="description-list">
					                		<li><span>SKU</span>: PL-258</li>
					                		<li><span>Category</span>: Women</li>
					                		<li><span>Tags</span>: Shoes / Sale /</li>
					                	</ul>
									</div>
			                	</div>
			                </div>
			                <div class="cart-btn-div">
		                        <div class="cart">
		                        	<a class="cart-btn btn-1" href="#"><span>Add to Cart</span></a>
		                        </div>
		                        <div class="wishlist">
		                        	<a class="wishlist-btn" href="#"><i class="icon-heart"></i></a>
		                        </div>
		                        <div class="compare">
		                        	<a class="compare-btn" href="#"><i class="icon-compare"></i></a>
		                        </div>
		                	</div> 
    					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Quick View Product End -->
<!-- Theme Script Include -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>  -->
<!-- <script src="js/jquery-3.4.1.min.js"></script> -->
<?php include "../layouts/scripts.php"?>
<script>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#categories li').click(function(){
			$(this).toggleClass('active');
		});
	});
</script>
<script type="text/javascript">
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 5000,
      values: [ 1000, 3000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[0] + " - $" + ui.values[1] );
        $( "#amount1" ).val(ui.values[0]);
        $( "#amount2" ).val(ui.values[1]);
      }
    });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ));
  });
</script>
</body>

<!-- Mirrored from www.ncodetechnologies.com/Modish/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:26 GMT -->
</html>
