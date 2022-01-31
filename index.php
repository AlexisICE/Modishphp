<!-- Aqui va el config del app -->
<?php 

include "app/config.php";
include "app/collectionHome.php";

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
</body>
</html>