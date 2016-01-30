<div class="carousel__wrapper">	
	<div class="gradient"></div>
		<ul>
<?php query_posts('cat=2'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
			<?php the_post_thumbnail() ?>
			<h1><?php the_title(); ?></h1>
			<a>Find Out More</a>
		</li>
<?php endwhile; else: ?>

	<p>Sorry, there are no posts to display</p>

<?php endif; ?>
	</ul>
</div>
<?php rewind_posts(); ?>


	
	
