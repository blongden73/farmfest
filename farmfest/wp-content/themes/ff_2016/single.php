<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('single_background') ?>
	<div class="single__wrapper">
		<div class="single__menu desktop">
			<?php wp_nav_menu( array( 'theme_location' => 'sub-menu' ) ); ?>
		</div>
		<div class="single__content">
			<div class="single__image">
				<?php the_post_thumbnail() ?>
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