<?php 
	add_theme_support( 'post-thumbnails' ); 
?>
<?php 
	function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'sub-menu' => __( 'Sub Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>