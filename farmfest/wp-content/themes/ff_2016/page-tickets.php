<?php
/**
 * Template Name: Tickets
 */
?>
<?php get_header() ?>
<?php get_template_part('illustration__panel__tickets') ?>

<?php if( have_rows('tickets__provider') ): ?>
	<div class="ticket__provider__container">
		<div class="ticket__provider__left">
			<ul class="ticket__provider__wrapper">
		
			<?php while( have_rows('tickets__provider') ): the_row(); 
		
				// vars
				$ticket__image = get_sub_field('image');
				$ticket__title = get_sub_field('title');
				$ticket__price = get_sub_field('price');
				$ticket__link = get_sub_field('link');
				?>
		
				<li class="ticket__provider">
		
					<img src="<?php echo $ticket__image['url']; ?>" alt="<?php echo $ticket__image['alt'] ?>" />
					<h1><?php echo $ticket__title; ?></h1>
				    <p><?php echo $ticket__price; ?></p>
				    <a href="$ticket__link"><h2>Buy Now</h2></a>
		
				</li>
		
			<?php endwhile; ?>
			</ul>
		</div>	
	</div>
<?php endif; ?>
<?php rewind_posts(); ?>

<?php if( have_rows('tickets__prices') ): ?>
	<div class="ticket__price__container">
		<div class="ticket__price__left">
			<ul class="ticket__price__wrapper">
		
			<?php while( have_rows('tickets__prices') ): the_row(); 
		
				// vars
				$stage_name = get_sub_field('stage_name');
				$fri_sat = get_sub_field('fri_sat');
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
					
					<div class="prices__wrapper">
						<h1 class="stage_name">
							<?php echo $stage_name; ?>
						</h1>
						<h2 class="ticket_header">
							<?php echo $fri_sat; ?>
						</h2>
					    <p>
						    <?php echo $price_one; ?>
					    </p>
					    <p>
						    <?php echo $price_two; ?>
						</p>
					    <p>
						    <?php echo $price_three; ?>
					    </p>
					    <h2 class="ticket_header">
						    <?php echo $price_four; ?>
						</h2>
					    <p>
						   	<?php echo $price_five; ?>
						</p>
					    <p>
						    <?php echo $price_six; ?>
						</p>
					    <h2 class="ticket_header">
						   	<?php echo $price_seven; ?>
						</h2>
					    <p>
						   	<?php echo $price_eight; ?>
						</p>
					</div>
				</li>
		
			<?php endwhile; ?>
			</ul>
		</div>	
	</div>
<?php endif; ?>
<?php rewind_posts(); ?>


<?php get_footer() ?>