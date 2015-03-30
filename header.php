<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo('stylesheet_directory'); ?>/">

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Fontello CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/fonts/fontello/css/fontello.css" rel="stylesheet">

	<!-- Plugins -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/plugins/rs-plugin/css/extralayers.css" media="screen" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/animations.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

	<!-- iDea core CSS file -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet">



	<!-- Custom css -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/custom.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/skins/dark_red.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php //wp_head(); ?>
</head>



<body class="front wide">
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<div class="page-wrapper">

<div class="header-top">
	<div class="container">
	<div class="row">
		<div class="col-xs-2 col-sm-6">

			<!-- header-top-first start -->
			<!-- ================ -->
			<div class="header-top-first clearfix">
				<ul class="social-links clearfix hidden-xs">
					<li class="twitter"><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li class="skype"><a href="http://www.skype.com/" target="_blank"><i class="fa fa-skype"></i></a></li>
					<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li class="googleplus"><a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li class="youtube"><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
					<li class="flickr"><a href="http://www.flickr.com/" target="_blank"><i class="fa fa-flickr"></i></a></li>
					<li class="facebook"><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li class="pinterest"><a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
				</ul>
				<div class="social-links hidden-lg hidden-md hidden-sm">
					<div class="btn-group dropdown">
						<button data-toggle="dropdown" class="btn dropdown-toggle" type="button"><i class="fa fa-share-alt"></i></button>
						<ul class="dropdown-menu dropdown-animation">
							<li class="twitter"><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li class="skype"><a href="http://www.skype.com/" target="_blank"><i class="fa fa-skype"></i></a></li>
							<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li class="googleplus"><a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<li class="youtube"><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
							<li class="flickr"><a href="http://www.flickr.com/" target="_blank"><i class="fa fa-flickr"></i></a></li>
							<li class="facebook"><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li class="pinterest"><a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- header-top-first end -->

		</div>
		<div class="col-xs-10 col-sm-6">

			<!-- header-top-second start -->
			<!-- ================ -->
			<div class="clearfix" id="header-top-second">

				<!-- header top dropdowns start -->
				<!-- ================ -->
				<div class="header-top-dropdown">
					<div class="btn-group dropdown">
						<button data-toggle="dropdown" class="btn dropdown-toggle" type="button"><i class="fa fa-search"></i> Search</button>
						<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
							<li>
								<form class="search-box" role="search">
									<div class="form-group has-feedback">
										<input type="text" placeholder="Search" class="form-control">
										<i class="fa fa-search form-control-feedback"></i>
									</div>
								</form>
							</li>
						</ul>
					</div>
					<div class="btn-group dropdown">
						<button data-toggle="dropdown" class="btn dropdown-toggle" type="button"><i class="fa fa-user"></i> Login</button>
						<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
							<li>
								<form class="login-form">
									<div class="form-group has-feedback">
										<label class="control-label">Username</label>
										<input type="text" placeholder="" class="form-control">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label">Password</label>
										<input type="password" placeholder="" class="form-control">
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
									<button class="btn btn-group btn-dark btn-sm" type="submit">Log In</button>
									<span>or</span>
									<button class="btn btn-group btn-default btn-sm" type="submit">Sign Up</button>

									<ul>
										<li><a href="#">Forgot your password?</a></li>
									</ul>
									<div class="divider"></div>
									<span class="text-center">Login with</span>
									<ul class="social-links clearfix">
										<li class="facebook"><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</form>
							</li>
						</ul>
					</div>
					<div class="btn-group dropdown">
						<button data-toggle="dropdown" class="btn dropdown-toggle" type="button"><i class="fa fa-shopping-cart"></i> Cart (8)</button>
						<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
							<li>
								<table class="table table-hover">
									<thead>
										<tr>
											<th class="quantity">QTY</th>
											<th class="product">Product</th>
											<th class="amount">Subtotal</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="quantity">2 x</td>
											<td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
											<td class="amount">$199.00</td>
										</tr>
										<tr>
											<td class="quantity">3 x</td>
											<td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
											<td class="amount">$299.00</td>
										</tr>
										<tr>
											<td class="quantity">3 x</td>
											<td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
											<td class="amount">$1499.00</td>
										</tr>
										<tr>
											<td colspan="2" class="total-quantity">Total 8 Items</td>
											<td class="total-amount">$1997.00</td>
										</tr>
									</tbody>
								</table>
								<div class="panel-body text-right">	
								<a class="btn btn-group btn-default btn-sm" href="shop-cart.html">View Cart</a>
								<a class="btn btn-group btn-default btn-sm" href="shop-checkout.html">Checkout</a>
								</div>
							</li>
						</ul>
					</div>

				</div>
				<!--  header top dropdowns end -->

			</div>
			<!-- header-top-second end -->

		</div>
	</div>
</div>
</div>
<header class="header fixed clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-3">

				<!-- header-left start -->
				<!-- ================ -->
				<div class="header-left clearfix">

					<!-- logo -->
					<div class="logo">
						<!-- <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> -->
						 <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="images/logo-skitech.png"></a>
					</div>

				</div>
				<!-- header-left end -->

			</div>
			<div class="col-md-9">

				<!-- header-right start -->
				<!-- ================ -->
				<div class="header-right clearfix">

					<!-- main-navigation start -->
					<!-- ================ -->
					<div class="main-navigation animated">

						<!-- navbar start -->
						<!-- ================ -->
						<nav role="navigation" class="navbar navbar-default">
							<div class="container-fluid">

								<!-- Toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button data-target="#navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								        <div class="collapse navbar-collapse">
			  <?php /* Primary navigation */
				wp_nav_menu( array(
				  'menu' => 'top_menu',
				  'depth' => 2,
				  'container' => false,
				  'menu_class' => 'nav navbar-nav navbar-right',
				  //Process nav menu using our custom nav walker
				  'walker' => new wp_bootstrap_navwalker())
				);
				?>
        </div>
							</div>
						</nav>
						<!-- navbar end -->
		
					</div>
					<!-- main-navigation end -->

				</div>
				<!-- header-right end -->

			</div>
		</div>
	</div>
</header>





