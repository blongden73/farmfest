<!DOCTYPE html>
<html>
<title>Farmfestival | Somerset</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/js/swipebox/src/css/swipebox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/carousel.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/swipebox/src/js/jquery.swipebox.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/stellar.js/src/jquery.stellar.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/js.cookie.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/facebook.js"></script>
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<body>
<div id="fb-root"></div>	
<header class="mobile">
	<div class="hamburger"></div>
	<div class="page__title">
		<h1>Farmfest</h1><h2></h2></div>
	<div class="sub__nav">
		<?php wp_nav_menu( array( 'theme_location' => 'sub-menu' ) ); ?>
		<div class="open__close"></div>
	</div>
</header>

<header class="desktop">
	
	<div class="desktop__nav">
		<a href="<?php bloginfo('url')?>">
		<div class="desktop__logo">
		<h1>Farmfest</h1>
		<div class="logo"><img src="http://www.farmfestival.co.uk/wp-content/uploads/2016/02/ff_logo.png"></div>
		</div>
		</a>
		
		<div class="desktop__options">
			<h1>29th & 30th JULY 2016, GILCOMBE FARM, SOMERSET, UK</h1>
			<div class="section__divide"></div>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>	
		<a href="http://www.farmfestival.co.uk/tickets/">
			<div class="desktop__buy">
				<button class="buy__button__desktop"><h1>buy tickets</h1></button>
			</div>
		</a>	
	</div>
</header>

<div class="hamburger__menu mobile"></div>
<div class="hamburger__overlay">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
	