<!-- Aqui va el config del app -->
<?php 

include "app/config.php";
include "app/collectionHome.php";
 $title = "cart";
 $url = ""
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from www.ncodetechnologies.com/Modish/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:27 GMT -->
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
<?php include"../layouts/nav.php"?>
<!-- header end -->
<!-- banner section start -->
<?php include "../layouts/breadcrumb.php";?>

<div class="content-wrapper cart-page">
	<section class="cart-table-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="tit"><span>_</span>Shopping cart</h2>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
					<div class="table-responsive">
    					<table class="cart-table table table-bordered">
    						<thead class="thead">
    							<tr>
    								<th class="product">Product</th>
    								<th class="price">Price</th>
    								<th class="quanity">Quanity</th>
    								<th class="total">Total</th>
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
												<div class="color"><span>Color:</span> Browen</div>
												<div class="size"><span>Size:</span> XL</div>
											</div>
										</div>
									</td>
									<td>$23.00</td>
									<td>
										<div class="pro-qty quantitypic">
				                            <input id="partridge" type="text" value="1">
				                        </div>
									</td>
									<td>$23.00</td>
									<td>
										<ul class="edit-list">
											<li><a href="#"><i class="icon-trash"></i></a></li>
											<li><a href="#"><i class="icon-pencil"></i></a></li>
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
												<div class="color"><span>Color:</span> Blue,White</div>
												<div class="size"><span>Size:</span> XL</div>
											</div>
										</div>
									</td>
									<td>$23.00</td>
									<td>
										<div class="pro-qty quantitypic">
				                            <input id="partridge" type="text" value="1">
				                        </div>
									</td>
									<td>$23.00</td>
									<td>
										<ul class="edit-list">
											<li><a href="#"><i class="icon-trash"></i></a></li>
											<li><a href="#"><i class="icon-pencil"></i></a></li>
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
												<div class="color"><span>Color:</span> Pink</div>
												<div class="size"><span>Size:</span> XL</div>
											</div>
										</div>
									</td>
									<td>$23.00</td>
									<td>
										<div class="pro-qty quantitypic">
				                            <input id="partridge" type="text" value="1">
				                        </div>
									</td>
									<td>$23.00</td>
									<td>
										<ul class="edit-list">
											<li><a href="#"><i class="icon-trash"></i></a></li>
											<li><a href="#"><i class="icon-pencil"></i></a></li>
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
												<div class="color"><span>Color:</span> Browen</div>
												<div class="size"><span>Size:</span> XL</div>
											</div>
										</div>
									</td>
									<td>$23.00</td>
									<td>
										<div class="pro-qty quantitypic">
				                            <input id="partridge" type="text" value="1">
				                        </div>
									</td>
									<td>$23.00</td>
									<td>
										<ul class="edit-list">
											<li><a href="#"><i class="icon-trash"></i></a></li>
											<li><a href="#"><i class="icon-pencil"></i></a></li>
										</ul>
									</td>
    							</tr>
    						</tbody>
    						<tfoot>
    						</tfoot>
    					</table>
    				</div>
    				<div class="row">
	    				<div class="col-12 col-sm-4 col-lg-4 col-xl-4 d-flex l-part">
							<a class="shopping-btn" href="shop.html">Continue Shopping</span></a>
						</div>
						<div class="col-12 col-sm-8 col-lg-8 col-xl-8 d-flex r-part">
							<a class="update-btn" href="#">Update Shopping Cart</a>
							<a class="clear-btn" href="#">Clear Shopping Cart</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
					<div class="summary-part">
						<h4 class="summary-tit">summary</h4>
						<div class="shipping-part">
							<h5>Estimate Shipping and Tax</h5>
							<p>Enter your destination to get a shipping estimate.</p>
							<form class="shipping-form">
								<div class="form-group">
									<label>Country</label>
									<select class="form-control" name="country">
								        <option>India</option>
								        <option>China</option>
								        <option>Pakistan</option>
								        <option>Nepal</option>
								    </select>
								</div>
								<div class="form-group">
									<label>State/Province</label>
									<select class="form-control" name="state">
								        <option>Gujarat</option>
								        <option>Rajsthan</option>
								        <option>Goa</option>
								        <option>Hariyana</option>
								    </select>
								</div>
								<div class="form-group">
									<label>Zip/Postal Code</label>
									<input class="form-control postal-code" type="text" name="" />
								</div>
							</form>
						</div>
						<div class="cart_totals">
			                <table id="shop_table" class="table">
			                    <tbody>
			                  		<tr class="cart-subtotal">
					                	<th>Subtotal:</th>
					                    <td>$400.00</td>
					                </tr>
					                <tr class="cart-subtotal">
					                    <th>TAX:</th>
					                    <td>$10.00</td>
					                </tr>
					                <tr class="cart-subtotal">
					                    <th>Shipping Rate:</th>
					                    <td>$00.00</td>
					                </tr>
					                <tr class="cart-total">
					                    <th>Total</th>
					                    <td>$410.00</td>
					                </tr>
				                </tbody>
				            </table>
		              	</div>
		              	<div class="shipping-part">
							<h5>Apply Discount Code</h5>
							<form class="discount-form">
								<div class="form-group">
									<label>Enter discount code</label>
									<div class="position-relative">
										<input class="form-control" type="text" name="" placeholder="Enter discount code" />
										<button class="btn btn3">Apply Discount</button>
									</div>
								</div>
							</form>
						</div>
						<a class="checkout-button btn" href="checkout.html">Proceed to checkout</a>
					</div>
				</div>
			</div>
		</div>
	</section>
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

<!-- Mirrored from www.ncodetechnologies.com/Modish/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:28 GMT -->
</html>