<div class="line__up__wrapper">
	<ul class="friday">
		<div class="line__up__day">
			<h1>Friday</h1>
		</div>
<?php query_posts('cat=22'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post--wrapper">
				<a href="<?php the_permalink() ?>"><div class="overlay"></div></a>
				<div class="line-up__image">
					<?php the_post_thumbnail(); ?></a>
				</div>
				<a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>	
			</div>			
		</li>
<?php endwhile; else: ?>

	<p>Sorry, there are no posts to display</p>

<?php endif; ?>
	</ul>
	<?php rewind_posts(); ?>
	
	<ul class="saturday">
		<div class="line__up__day">
			<h1>Saturday</h1>
		</div>
<?php query_posts('cat=23'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post--wrapper">
				<a href="<?php the_permalink() ?>"><div class="overlay"></div></a>
				<div class="line-up__image">
					<?php the_post_thumbnail(); ?>
				</div>
				<a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>	
			</div>			
		</li>
<?php endwhile; else: ?>

	<p>Sorry, there are no posts to display</p>

<?php endif; ?>
	</ul>
	<?php rewind_posts(); ?>
	
	
</div>
