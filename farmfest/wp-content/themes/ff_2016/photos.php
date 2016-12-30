<div class="photo__gallery__wrapper">
<?php query_posts('cat=28'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content() ?>
	<?php if ( in_category( 'gallery' )) { ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<a href="<?php echo $url; ?>" class="swipebox" title="My Caption">
		<img src="<?php echo $url; ?>" alt="image">
	<?php } ?>
	
	</a>
<?php endwhile; else: ?>

	<p>Sorry, there are no posts to display</p>

<?php endif; ?>
<?php rewind_posts(); ?>
</div>