<div class="news__wrapper">
	<ul>
<?php query_posts('cat=25,24'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>"><div class="news__image"><?php the_post_thumbnail(); ?></div></a>
			<h3><?php the_category('<h3>', '</h3>') ?></h3>
			<h4><?php the_title(); ?></h4>
			<a class="link" href="<?php the_permalink() ?>" class="news_link"><?php get_template_part('arrow'); ?></a>			
		</li>
<?php endwhile; else: ?>

	<p>Sorry, there are no posts to display</p>

<?php endif; ?>
	</ul>
</div>
<?php rewind_posts(); ?>


	
	
