<?php
/*
Post Template - Name: Website
*/

get_header();

?>

<?php if (have_posts()): while (have_posts()) : the_post(); 

$images = get_field('image_gallery');

?>

	<div class="row row__full-height middle-md masthead margin--top" style="background: url('<?php the_post_thumbnail_url(); ?>') center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
		<div class="fixed-arrow">
			<div class="circle">
				<i class="ion-chevron-down"></i>
			</div>
		</div>
	</div>

	<!-- Case Study Statement -->
	<section>
		<div class="row center-xs middle-xs">
			<div class="col-xs-12 col-md-10 col-lg-8 center-xs middle-xs statement">
				<h3><?php echo get_the_title(); ?></h3>
				<h4><?php echo get_the_content(); ?></h4>
			</div>
		</div>
	</section>
	<!-- End Case Study Statement -->

	<?php 

	if( $images ): ?>
	 <?php foreach( $images as $key=>$image ) { 
	 		
	 		if ($key === 0) { ?>
		 			<div class="row row__full-height middle-md masthead margin--top" style="background: url('<?php echo $image['sizes']['large']; ?>') center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
					</div>

		 		<?php } ?>


		 		<?php if ($key === 1) { ?>
		 		<section class="bg--gray">
		 			<div class="row row__full-height noHeight middle-md center-md">
						<div class="col-xs-12 col-md-11 col-lg-9">
							<div class="full-height tile img--large" style="background: url('<?php echo $image['sizes']['large']; ?>') center center;  background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; width: 100%;">
							</div>	
						</div>
					</div>

				<?php } 

				if ($key === 2) { ?>
					<div class="row row__full-height noHeight middle-md center-md">
						<div class="col-xs-12 col-md-11 col-lg-9">
							<div class="full-height tile img--large" style="background: url('<?php echo $image['sizes']['large']; ?>') center center;  background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; width: 100%;">
							</div>	
						</div>
					</div>
				</section> 	

				<?php } ?>

			  
	<? } ?>
	<?php endif; ?>


<?php endwhile; ?>

	<?php else: ?>


	<?php endif; ?>


<?php get_footer(); ?>