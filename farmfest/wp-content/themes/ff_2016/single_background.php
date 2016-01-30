<?php 
	$background = get_field('background_image');
	$sub_title = get_field('sub_title');
?>
<div class="single__background__image" style="background-image: url(<?php echo $background ?>)">
	<div class="single__title__wrapper">
		<div class="single__title">
<!-- 			<?php the_title('<h1>','</h1>') ?> -->
			<h1><?php echo $sub_title ?></h1>
		
		</div>
	</div>	
</div>