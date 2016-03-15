<!DOCTYPE html>
<html>
<title>Farmfestival | Somerset</title>
<meta property="og:image" content="http://www.farmfestival.co.uk/wp-content/uploads/2016/02/FF16_GALLERY_FEATHER_2.jpg" />
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/test/style.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/js/swipebox/src/css/swipebox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/carousel.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/gallery.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/swipebox/src/js/jquery.swipebox.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/stellar.js/src/jquery.stellar.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/js.cookie.js"></script>
<!-- <script src="<?php bloginfo('template_url') ?>/js/facebook.js"></script> -->
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<body>
<!-- <div id="fb-root"></div>	 -->
<header class="mobile">
	<div class="hamburger"></div>
	<div class="page__title">
		<a href="<?php bloginfo('url') ?>"><img src="http://www.farmfestival.co.uk/wp-content/uploads/2016/02/ff_logo.png"></a></div>
	<div class="buy__button">
		<a href="http://www.farmfestival.co.uk/tickets"><button><h1>BUY TICKETS</h1></button></a>
	</div>
	<div class="sub__nav">
		<div class="sub_menu">
			<p>--Menu--</p>
			<?php wp_nav_menu( array( 'theme_location' => 'sub-menu' ) ); ?>
		</div>
		<div class="sub_menu_contact">
			<p>--Menu--</p>
			<?php wp_nav_menu( array( 'theme_location' => 'sub-contact' ) ); ?>
		</div>
		<div class="sub_menu_involve">
			<p>--Menu--</p>
			<?php wp_nav_menu( array( 'theme_location' => 'sub-involve' ) ); ?>
		</div>
		<div class="open__close">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
	 <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
	17.576,7.834 9.999,15.411 2.423,7.834 "/>
			</svg>
		</div>
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

<div class="hamburger__menu mobile">
	<svg class="hamburger_button" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
	 <rect fill="#FFFFFF" width="20" height="4.746"/>
	 <rect y="7.627" fill="#FFFFFF" width="20" height="4.746"/>
	 <rect y="15.254" fill="#FFFFFF" width="20" height="4.746"/>
	 </svg>
	 <svg class="hamburger__close" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<rect x="0" y="7.627" transform="matrix(0.7071 0.7071 -0.7071 0.7071 10.0001 -4.1423)" fill="#FFFFFF" width="20.001" height="4.746"/>
<rect x="0" y="7.627" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -4.1421 10.0006)" fill="#FFFFFF" width="20.001" height="4.746"/>
</svg>
</div>
<div class="hamburger__overlay">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
	