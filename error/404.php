<?php 

include "../app/config.php";
include "../app/collectionHome.php";
 $title = "error";
//  $home = "home"; preguntar que es 
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
	
<!-- Mirrored from www.ncodetechnologies.com/Modish/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:32 GMT -->
<head>
        <?php include "../layouts/header.php";?>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->
	</head>
	<body class="layout-1">
		<?php include "../layouts/nav.php" ?>
    	<!-- Theme Header End -->
    	<!-- banner section start -->
		<?php include "../layouts/breadcrumb.php";?>

		<section class="section-404">
    		<div class="container">
    			<img class="mx-auto img-fluid" src="images/404-img.png" alt="Modish - Responsive Fashion Store | HTML5, Bootstrap 4 Template" />
    			<h4>Oops! That page can’t be found.</h4>
    			<p>Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.</p>
    			<a class="home-btn btn btn2" href="index.html"><span>Go to Homepage</span></a>
    		</div>
    	</section>
		<!-- Footer Start -->
    	<?php include "../layouts/footer.php";?>
    	<!-- Footer End -->

    	<!-- Theme Script Include -->
    	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>  -->
    	<!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    	<?php include "../layouts/scripts.php";?>
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
    </body>

<!-- Mirrored from www.ncodetechnologies.com/Modish/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 22:35:33 GMT -->
</html>
