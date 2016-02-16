<div class="carousel__wrapper">
	<div class="arrow">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		width="51.958px" height="29.789px" viewBox="0 0 51.958 29.789" enable-background="new 0 0 51.958 29.789" xml:space="preserve">
		<path fill="#FFFFFF" d="M46.278,2.585L25.979,22.883L5.682,2.586c-0.78-0.781-2.045-0.781-2.826,0c-0.78,0.78-0.78,2.045,0,2.825
		l21.71,21.711c0.781,0.78,2.046,0.779,2.825-0.001L49.104,5.41c0.777-0.779,0.779-2.045,0-2.825
		C48.323,1.805,47.057,1.805,46.278,2.585z"/>
		</svg>
	</div>
	<div class="manifesto">
		<h2>Read our manifesto</h2>
	</div>	
	<div class="gradient"></div>
		<ul>
<?php query_posts('cat=30'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li <?php post_class(); ?>>
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


	
	
