<div class="video__wrapper">
	<div class="photo__gallery__wrapper">
	<?php query_posts('cat=8'); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content() ?>
		<?php if ( in_category( 'gallery' )) { ?>
			<div class="video"><?php the_content(); ?></div>
		<?php } ?>
		
		</a>
	<?php endwhile; else: ?>
	
		<p>Sorry, there are no posts to display</p>
	
	<?php endif; ?>
	<?php rewind_posts(); ?>
	</div>
</div>