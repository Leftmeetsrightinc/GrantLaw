<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Grant Law</title>

	<!-- Custom styles for this template -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>

  <body>

	<header class="">
		<address>
			<span><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1(416)-977-5334">(416)-977-5334</a></span>
			<span><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:igrant@simcoechambers.com">igrant@simcoechambers.com</a></span>
			<span><i class="fa fa-map-marker" aria-hidden="true"></i><a href="https://goo.gl/maps/Ciwx8ZvhzL42" target="_blank" rel="noopener">116 Simcoe St., Suite 100, M5H 4E2</a></span>
		</address>
	  <div class="header-container">
			<div class="logo">
				<p class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></p>
				<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
			</div>
			<nav class="blog-nav">
				<ul>
					<?php wp_list_pages( '&title_li=' ); ?>
				</ul>
			</nav>
			<div class="mobile-menu">
				<i class="open-menu fa fa-bars" aria-hidden="true"></i>
				<nav class="mobile-nav">
				<ul>
					<?php wp_list_pages( '&title_li=' ); ?>
				</ul>
			</nav>
			</div>
		</div> <!-- /.header-container -->
	</header>

	<main class="container">