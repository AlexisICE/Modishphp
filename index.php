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
    	</section>
</body>
</html>