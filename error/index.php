<!-- Aqui va el config del app -->
<?php 

include "../app/config.php";
include "../app/collectionHome.php";
 $title = "error";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../layouts/header.php"; ?>
</head>
<body class="layout-1">
<?php include "../layouts/nav.php";?>

<section class="section-404">
    		<div class="container">
    			<img class="mx-auto img-fluid" src="images/404-img.png" alt="Modish - Responsive Fashion Store | HTML5, Bootstrap 4 Template" />
    			<h4>Oops! That page can’t be found.</h4>
    			<p>Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.</p>
    			<a class="home-btn btn btn2" href="http://localhost/modishphp/"><span>Go to Homepage</span></a>
    		</div>
    	</section>
</body>
</html>




