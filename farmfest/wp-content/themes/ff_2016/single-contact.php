<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
	$sub_title = get_field('sub_title');
?>
<?php get_template_part('single_background') ?>
	<div id="single__wrapper"  <?php post_class(); ?>>
		<div class="single__image">
				<?php the_post_thumbnail() ?>
			</div>
		<div class="single__menu desktop">
			<div class="next-previous line-up-next">
				<a href="http://www.farmfestival.co.uk/line-up/"><?php get_template_part('arrow__left') ?></a>
			</div>
			<div class="next-previous news-next">
				<a href="http://www.farmfestival.co.uk/news/"><?php get_template_part('arrow__left') ?></a>
			</div>
			<div class="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'sub-contact' ) ); ?>
			</div>
		</div>
		<div class="single__content">
			<div class="single__title">
				<?php the_title('<h1>','</h1>') ?>
			</div>
			<div class="share">
				
			</div>
			<?php the_content() ?>
		</div>
	</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	
<?php get_footer() ?>