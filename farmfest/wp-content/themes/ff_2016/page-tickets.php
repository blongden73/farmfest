<?php
/**
 * Template Name: Tickets
 */
?>
<?php get_header('tickets') ?>
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
		
					<a href="<?php echo $ticket__link; ?>"><img src="<?php echo $ticket__image['url']; ?>" alt="<?php echo $ticket__image['alt'] ?>" /></a>
					<h1><?php echo $ticket__title; ?></h1>
				    <p><?php echo $ticket__price; ?></p>
				    <a href="<?php echo $ticket__link; ?>"><h2>Buy Now</h2></a>
		
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
						<div class="ticket__prices">
						    <p>
							    <?php echo $price_one; ?>
						    </p>
						    <div class="price__type"></div><div class="price__split"></div><div class="price"></div>
						    <p>
							    <?php echo $price_two; ?>
							</p>
							<div class="price__type"></div><div class="price__split"></div><div class="price"></div>
						    <p>
							    <?php echo $price_three; ?>
						    </p>
						    <div class="price__type"></div><div class="price__split"></div><div class="price"></div>
						</div>
					    <h2 class="ticket_header">
						    <?php echo $price_four; ?>
						</h2>
						<div class="ticket__prices">
						    <p>
							   	<?php echo $price_five; ?>
							</p>
							<div class="price__type"></div><div class="price__split"></div><div class="price"></div>
						    <p>
							    <?php echo $price_six; ?>
							</p>
							<div class="price__type"></div><div class="price__split"></div><div class="price"></div>
						</div>	
					    <h2 class="ticket_header">
						   	<?php echo $price_seven; ?>
						</h2>
						<div class="ticket__prices">
						    <p>
							   	<?php echo $price_eight; ?>
							</p>
							<div class="price__type"></div><div class="price__split"></div><div class="price"></div>
						</div>
					</div>
				</li>
		
			<?php endwhile; ?>
			</ul>
		</div>	
	</div>
<?php endif; ?>
<div class="col1 tickets_small_print">
	<p>Adult Ticket = over 18.
Under 18s need to be accompanied by a paying adult. No more than 4 x under 18s per adult.
Family Ticket = 2 x Adult tickets + 2 x 13-17 years tickets</p>
<p>
—
</p>
<p>
All tickets includes camping and parking.
</p>
<p>
—
</p>
<p>
For ticketing issues please go <a href="http://www.farmfestival.co.uk/ticketing-issues/">here</a>
</p>
<p>
—
</p>
<p>
Tickets are none refundable.	
</p>
<p>
Physical Tickets now on sale at:
Bristol Ticket Shop /// 41 High St, Bristol, BS1 2AT
Frome Cheese & Grain /// Market Yard, Frome, Somerset, BA11 1BE
Bruton Post Office /// 14 Patwell St, Bruton BA10 0EQ
</p>
</div>
<?php rewind_posts(); ?>


<?php get_footer() ?>