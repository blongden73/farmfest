<div class="entertainment__wrapper">
	<ul class="entertainment">
		<div class="entertainment__day">
			<h1>Arts & Entertainment</h1>
		</div>
<?php query_posts('cat=17'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post--wrapper">
				<a href="<?php the_permalink() ?>"><div class="overlay"></div></a>
				<div class="entertainment__image">
					<?php the_post_thumbnail(); ?></a>
				</div>
				<h1><?php the_title(); ?></h1>
			</div>			
		</li>
<?php endwhile; else: ?>

	<p>Sorry, there are no posts to display</p>

<?php endif; ?>
	</ul>
	<?php rewind_posts(); ?>
	</div>