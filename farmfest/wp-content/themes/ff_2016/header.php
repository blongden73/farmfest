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
<script src="<?php bloginfo('template_url') ?>/js/pop_up.js"></script>
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<body>
	
<header class="mobile">
	<div class="hamburger"></div>
	<div class="page__title">
		<h1>Farmfest 2016</h1><h2></h2></div>
	<div class="sub__nav">
		<?php wp_nav_menu( array( 'theme_location' => 'sub-menu' ) ); ?>
		<div class="open__close"></div>
	</div>
</header>

<div class="cookies">
	<div class="cookies__wrapper">
		<h1>Sorry for the inconvenience, this site uses dem cookies.</h1>
		<div class="close"></div>
	</div>
</div>

<header class="desktop">
	
	<div class="desktop__nav">
		<a href="<?php bloginfo('url')?>">
		<div class="desktop__logo">
		<?php get_template_part('ff__logo') ?>
		</div>
		</a>
		
		<div class="desktop__options">
			<h1>farmfest | somerset | July - July 2016</h1>
			<div class="section__divide"></div>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>	
		<a href="http://localhost/tickets/">
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
	