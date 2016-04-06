<?php 
	add_theme_support( 'post-thumbnails' ); 
?>
<?php 
	function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'sub-menu' => __( 'Sub Menu' ),
      'sub-contact' => __( 'Sub Menu Contact' ),
      'sub-involve' => __( 'Sub Menu Get Involved' ),
      'sub-area' => __( 'Sub Menu Areas' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>