<?php
/**
 * Template Name: Tickets
 */
?>
<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('single_background') ?>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	
<?php rewind_posts(); ?>

<?php if( have_rows('tickets__prices') ): ?>
	<div class="ticket__price__container">
		<div class="ticket__price__right">
			<h1>Prices</h1>
		</div>
		<div class="ticket__price__left">
			<ul class="ticket__price__wrapper">
		
			<?php while( have_rows('tickets__prices') ): the_row(); 
		
				// vars
				$stage_name = get_sub_field('stage_name');
				$price_one = get_sub_field('price_one');
				$price_two = get_sub_field('price_two');
				$price_three = get_sub_field('price_three');
				$price_four = get_sub_field('price_four');
				$price_five = get_sub_field('price_five');
				$price_six = get_sub_field('price_six');
				$price_seven = get_sub_field('price_seven');
				$price_eight = get_sub_field('price_eight');
				$ticket_stage = get_sub_field('ticket_stage');
		
				?>
		
				<li class="ticket__price <?php if ($ticket_stage): ?> active <?php endif; ?>" >
		
					<h1><?php echo $stage_name; ?></h1>
				    <h2><?php echo $price_one; ?></h2>
				    <h2><?php echo $price_two; ?></h2>
				    <h2><?php echo $price_three; ?></h2>
				    <h2><?php echo $price_four; ?></h2>
				    <h2><?php echo $price_five; ?></h2>
				    <h2><?php echo $price_six; ?></h2>
				    <h2><?php echo $price_seven; ?></h2>
				    <h2><?php echo $price_eight; ?></h2>
		
				</li>
		
			<?php endwhile; ?>
			</ul>
		</div>	
	</div>
<?php endif; ?>
<?php rewind_posts(); ?>


<?php if( have_rows('tickets__provider') ): ?>
	<div class="ticket__provider__container">
		<div class="ticket__provider__right">
			<h1>Provider</h1>
		</div>
		<div class="ticket__provider__left">
			<ul class="ticket__provider__wrapper">
		
			<?php while( have_rows('tickets__provider') ): the_row(); 
		
				// vars
				$ticket__image = get_sub_field('image');
				$ticket__title = get_sub_field('title');
				$ticket__price = get_sub_field('price');
		
				?>
		
				<li class="ticket__provider">
		
					<img src="<?php echo $ticket__image['url']; ?>" alt="<?php echo $ticket__image['alt'] ?>" />
					<h1><?php echo $ticket__title; ?></h1>
				    <p><?php echo $ticket__price; ?></p>
		
				</li>
		
			<?php endwhile; ?>
			</ul>
		</div>	
	</div>
<?php endif; ?>
<?php rewind_posts(); ?>

<?php get_footer() ?>