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

  <?php wp_head(); ?>


	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="http://www.democracy-nc.org/wp-content/themes/DemNCv1/ie8-and-down.css" />
	<![endif]-->

  </head>
  <body <?php body_class(); ?>>
    <div class="main-wrapper">

			<section class="nav-wrapper">

	    <div class="nav-toggle">
	      <a class="show-menu"><span class="icon icon-menu"></span></a>
	    </div>

	      <nav class="main-nav">
	        <ul>
						<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
						<li><a href="page.html">Who Can Vote?</a></li>
						<li><a href="#">Registering</a>
								<ul>
									<li><a href="#">Registration FAQ</a></li>
								</ul>
							</li>
						<li><a href="#">Voting</a>
								<ul>
									<li><a href="#">Your Ballot & Districts</a></li>
									<li><a href="#">Offices on Your Ballot</a></li>
									<li><a href="#">Absentee Ballots</a></li>
									<li><a href="http://www.ncstudentvoter.com">Student Voters</a></li>
								</ul>
							</li>
						<li><a href="#">Election Protection</a></li>
						<li><a href="#">Do More</a>
							<ul>
								<li><a href="#">Resources</a></li>
							</ul>
						</li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Your Story</a></li>
	        </ul>
	      </nav>

		</section>


      <header class="home-header">
        <h1 class="main-head">NC VOTER (.ORG)</h1>
        <h2 class="sub-head">Welcome to your source for voter information<br /> in North Carolina!</h2>

        <div class="home-head-search">
          <form action="">
						<input onfocus="if(this.value == 'Search NCVoter.org') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search NCVoter.org'; }" type="text"type="text" value="Search NCVoter.org">
            <button type="submit"><span class="icon icon-search"></span></button>
          </form>
        </div>

      </header>
