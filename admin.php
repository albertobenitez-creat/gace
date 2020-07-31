<?php
    session_start();
    if(isset($_SESSION['username']) ||isset($_SESSION["Admin"]))
    {
?>
<!doctype html>


<html lang="es" class="no-js">

<!-- Mirrored from nunforest.com/odeo/contact-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2016 21:50:48 GMT -->
<head>
	<title>Gaceta|Panel de Administración</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Include Style -->
	<link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700|Poppins:400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="header ">
			<!-- Header Top -->
			<div class="header-top">
				<div class="container">
					<div class="header-top-box">
						<div class="row">
							<div class="col-sm-6 text-xs-center">
								<div class="social-links">
									<a href="#facebook" class="fa fa-facebook"></a>
									<a href="#twitter" class="fa fa-twitter"></a>
									<a href="#google-plus" class="fa fa-google-plus"></a>
									<a href="#linkin" class="fa fa-linkedin"></a>
								</div>
							</div>
							<div class="col-sm-6 text-right text-xs-center">
								<ul class="unstyled list-inline access-link">
									<li><i class="fa fa-phone"></i> (123) 098-76-54</li>
									<li><i class="fa fa-user"></i> <a href="javascript:CerrarSesion();">Cerrar Sesión</a> <span>/</span> <a href="#">Sign up</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Header Top -->

			<!-- Navigation -->
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img src="images/logo-morelia.png" alt="logo"  width="100%" height="150px" weight="150px">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="drop columns2"><a class="active" href="index-2.html">Home</a>
								<ul class="drop-down">
									<li>
										<ul>
											<li><a href="index-2.html">Home 1 - Default</a></li>
											<li><a href="home2.html">Home 2</a></li>
											<li><a href="home3.html">Home 3</a></li>
											<li><a href="home4.html">Home 4</a></li>
											<li><a href="home5.html">Home 5</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><a href="home6.html">Home 6</a></li>
											<li><a href="home7.html">Home 7</a></li>
											<li><a href="home8.html">Home 8</a></li>
											<li><a href="home9.html">Home 9</a></li>
											<li><a href="home10.html">Home 10</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="drop"><a href="#">Shop</a>
								<ul class="drop-down">
									<li><a href="home10.html">Homepage Shop</a></li>
									<li><a href="shop-cart.html">Shopping Cart</a></li>
									<li><a href="shop-category.html">Shop Category</a></li>
									<li><a href="shop-checkout.html">Shop Checkout</a></li>
									<li><a href="single-product.html">Single Product</a></li>
								</ul>
							</li>
							<li class="drop"><a href="about.html">Pages</a>
								<ul class="drop-down">
									<li><a href="about.html">About us 1</a></li>
									<li><a href="about2.html">About us 2</a></li>
									<li><a href="services.html">Our services 1</a></li>
									<li><a href="services2.html">Our services 2</a></li>
									<li><a href="404.html">404 Error</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="registration.html">Registration</a></li>
								</ul>
							</li>
							<li class="drop"><a href="portfolio-grid-2col.html">Portfolio</a>
								<ul class="drop-down">
									<li><a href="portfolio-grid-3col.html">Grid 3 Col</a></li>
									<li><a href="portfolio-grid-4col-wide.html">Grid Fullwidth 4 Columns</a></li>
									<li><a href="portfolio-grid-4col.html">Grid 4 columns</a></li>
									<li><a href="portfolio-grid-3col.html">Grid 3 columns</a></li>
									<li><a href="portfolio-masonry-4col-wide.html">Masonry fullwidth 4 Cols</a></li>
									<li><a href="portfolio-masonry-4col.html">Masonry 4 columns</a></li>
									<li><a href="portfolio-single-one.html">Single Project 1</a></li>
									<li><a href="portfolio-single-two.html">Single Project 2</a></li>
								</ul>
							</li>
							<li class="drop"><a href="blog.html">blog</a>
								<ul class="drop-down">
									<li><a href="blog-classic-leftsidebar.html">Blog Classic Left Sidebar</a></li>
									<li><a href="blog-classic-nosidebar.html">Blog Classic Without Sidebar</a></li>
									<li><a href="blog-classic-rightsidebar.html">Blog Classic Right Sidebar</a></li>
									<li><a href="blog-grid-nosidebar.html">Grid Without Sidebar</a></li>
									<li><a href="blog-grid-rightsidebar.html">Grid Right Sidebar</a></li>
									<li><a href="blog-masonry-leftsidebar.html">Masonry Left Sidebar</a></li>
									<li><a href="blog-masonry-nosidebar.html">Masonry Without Sidebar</a></li>
									<li><a href="single-blog.html">Single Blog</a></li>
								</ul>
							</li>
							<li>
								<a href="contact.html">Contact</a>
								<ul class="drop-down">
									<li><a href="contact.html">Contact 1</a></li>
									<li><a href="contact-two.html">Contact 2</a></li>
									<li><a href="contact-three.html">Contact 3</a></li>
								</ul>
							</li>
							<li class="shopping-cart"><a href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a>
								<div class="shopping-cart-drop">
									<h3>Your Cart</h3>
									<ul>
										<li>
											<img src="uploads/products/thumbnail/1.jpg" alt="">										
											<h3><a href="#">Natina</a></h3>
											<div class="cat-meta">
												<a href="#">Side table</a>, <a href="#">high-gloss white</a>
											</div>
											<span class="price">$50.50</span>
										</li>
										<li>
											<img src="uploads/products/thumbnail/2.jpg" alt="">										
											<h3><a href="#">Pinyo</a></h3>
											<div class="cat-meta">
												<a href="#">Two-seat sofa</a>
											</div>
											<span class="price">$21.50</span>
										</li>
										<li>
											<img src="uploads/products/thumbnail/3.jpg" alt="">										
											<h3><a href="#">Slack</a></h3>
											<div class="cat-meta">
												<a href="#">Side table</a>, <a href="#">high-gloss white</a>
											</div>
											<span class="price">$175.00</span>
										</li>
									</ul>
									<div class="check-box-cont text-center">
										<a class="odeo-btn cart-link" href="shopping-cart.html">Go to your Cart</a>
										<a href="checkout.html" class="checkout-link">Proceed to Checkout</a>
									</div>
								</div>
							</li>
							<li class="search drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
								<form class="form-search">
									<input type="search" placeholder="Type your search here..."/>
									<button>
										<i class="fa fa-close"></i>
									</button>
								</form>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<!-- End Navigation -->
		</header>
		<!-- End Header -->
		
		<!-- titlebar-section -->
		<div class="title-bar-section">
			<div class="container">
				<div class="text-center">
					<h1 class="page-title">Panel de Administración de la Gaceta del H. Ayuntamiento de Morelia</h1>
				</div>
			</div>
		</div>

		<!-- breadcrumb-section -->
		<div class="breadcrumb-section">
			<div class="container">
				<a href="#">Inicio <i class="fa fa-angle-double-right"></i></a><span class="current">Panel de Administración</span>
			</div>
		</div>
		<section id="contact-section2">
			<div class="container">
				<div class="row">
					
									<!-- Nav tabs -->
				<div class="single-prod-tab-box">
				<div class="col-md-2">
					<ul class="nav nav-tabs text-center" id="myTab">
						<li class="active">
							<a href="#option1" data-toggle="tab">Todas</a>
						</li>
						<li>
							<a href="#option2" data-toggle="tab">Agregar</a>
						</li>
						<li>
							<a href="#option3" data-toggle="tab">Editar</a>
						</li>
					</ul>
				</div>
				<div class="col-md-10">
					<div class="tab-content">
											<div class="tab-pane active" id="option1">
							<div class="desc-tab">
								<h3>AGREGAR</h3>
							<div class="contact-form label-normal shadown-form">
							<form id="contact-form">
								<div class="row">
								
									<div class="col-sm-6">
										<div class="form-group">
											<label><i class="fa fa-user"></i> No. Sesión</label>
											<input name="no_sesion" id="no_sesion" type="text" class="form-control">
										</div>

								<div class="shop-sidebar sidebar">
									<div class="widget_product_categories widget">
									<h2 class="sb-title">Tipo de Sesión</h2>
									<ul>
										<li class="active"><a href="#">Ordinaria</a></li>
										<li><a href="#">Extraordinaria</a></li>
										<li><a href="#">Solemne</a></li>
									</ul>
									</div>
								</div>
									<div class="form-group">
											<label><i class="fa fa-envelope"></i> Lugar</label>
											<input name="mail" id="mail" type="text" class="form-control">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label><i class="fa fa-phone"></i> Fecha</label>
											<input name="tel-number" id="tel-number" type="text" class="form-control">
										</div>
										<div class="form-group">
											<label><i class="fa fa-list-alt"></i> Hora</label>
											<input name="subject" id="subject" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label><i class="fa fa-pencil"></i> Your Message</label>
									<textarea name="comment" id="comment" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="submit_contact" class="odeo-btn" value="SEND">
									<div id="msg" class="message"></div>
								</div>
							</form>
						</div>
							</div>
						</div>
						<div class="tab-pane" id="option2">
							<div class="desc-tab">
								<h3>AGREGAR</h3>
							<div class="contact-form label-normal shadown-form">
							<form id="contact-form">
								<div class="row">
								
									<div class="col-sm-6">
										<div class="form-group">
											<label><i class="fa fa-user"></i> No. Sesión</label>
											<input name="no_sesion" id="no_sesion" type="text" class="form-control">
										</div>

								<div class="shop-sidebar sidebar">
									<div class="widget_product_categories widget">
									<h2 class="sb-title">Tipo de Sesión</h2>
									<ul>
										<li class="active"><a href="#">Ordinaria</a></li>
										<li><a href="#">Extraordinaria</a></li>
										<li><a href="#">Solemne</a></li>
									</ul>
									</div>
								</div>
									<div class="form-group">
											<label><i class="fa fa-envelope"></i> Lugar</label>
											<input name="mail" id="mail" type="text" class="form-control">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label><i class="fa fa-phone"></i> Fecha</label>
											<input name="tel-number" id="tel-number" type="text" class="form-control">
										</div>
										<div class="form-group">
											<label><i class="fa fa-list-alt"></i> Hora</label>
											<input name="subject" id="subject" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label><i class="fa fa-pencil"></i> Your Message</label>
									<textarea name="comment" id="comment" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="submit_contact" class="odeo-btn" value="SEND">
									<div id="msg" class="message"></div>
								</div>
							</form>
						</div>
							</div>
						</div>

						<div class="tab-pane" id="option3">
							<div class="product-reviews">
								<h3>3 reviews</h3>
								<ul>
									<li>
										<img src="uploads/products/single/au1.jpg" alt="">
										<div class="review-content">
											<h4>
												John Doe
											</h4>
											<span class="time">09 March 2016</span>
											<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
										</div>
									</li>
									<li>
										<img src="uploads/products/single/au2.jpg" alt="">
										<div class="review-content">
											<h4>
												John Doe
											</h4>
											<span class="time">09 March 2016</span>
											<p>Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
										</div>
									</li>
									<li>
										<img src="uploads/products/single/au3.jpg" alt="">
										<div class="review-content">
											<h4>
												John Doe
											</h4>
											<span class="time">09 March 2016</span>
											<p>Class aptent taciti sociosqu litora torquent per conubia per himenaeos. Nulla tristique in semper vel. </p>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				</div>

				<!-- End Nav tabs -->
						
					</div>
				</div>
			</div>
		</section>

		<!-- footer 
			================================================== -->
		<footer class="footer">
			<div class="footer-bottom">
				<p class="copyright">
					&copy; Gobierno Digital 2017.
				</p>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->


	<!-- include scripts file -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en" type="text/javascript"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<script type="text/javascript" src="gaceta_js/index.js"></script>
	</body>

<!-- Mirrored from nunforest.com/odeo/contact-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2016 21:50:48 GMT -->
</html>
<?php
}else  
    header("Location: login.php");
?>