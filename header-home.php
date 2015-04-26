<?php
/**
* The Header. Displays all of the <head> section and everything up to the slider
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<meta property="og:image" content="assets/img/ncvoterorg-og-img.jpg" />
	<meta property="og:url" content="http://www.ncvoter.org">
	<meta property="og:title" content="Your Source for North Carolina Voter Information">
	<meta property="og:description" content="Welcome to your source for voter information
in North Carolina!">

	<link rel="shortcut icon" href="favicon.ico" />

	<!--<?php wp_enqueue_script("jquery"); ?>-->
	<?php wp_head(); ?>
	<!--<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/ncvoter2015/js/scripts.js"></script>-->


	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.democracy-nc.org/wp-content/themes/DemNCv1/ie8-and-down.css" />
	<![endif]-->

	</head>
	<body <?php body_class(); ?>>


			<section class="nav-wrapper">

			<div class="nav-toggle">
				<a class="show-menu"><span class="icon icon-menu"></span></a>
			</div>

				<nav class="main-nav">
					<?php wp_nav_menu(array( 'menu' => 'main', 'menu_class' => 'main-nav', 'walker' => new My_Walker_Nav_Menu()) ); ?>
				</nav>

		</section> <!-- end. nav-wrapper -->
