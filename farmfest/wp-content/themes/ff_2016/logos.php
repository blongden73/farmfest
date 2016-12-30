<?php query_posts('cat=29'); ?>
	<div class="logos">
		<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
			<?php the_post_thumbnail(); ?>
			</li>
<?php endwhile; else: ?>

	<p>Sorry, there are no posts to display</p>

<?php endif; ?>
		</ul>
	</div>
<?php rewind_posts(); ?>