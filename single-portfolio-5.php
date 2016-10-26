<?php
/*
Post Template - Name: Brochure
*/

get_header();

?>

<?php if (have_posts()): while (have_posts()) : the_post(); 

$images = get_field('image_gallery');

?>

	<div class="row">
		<div class="col-xs-12 no--padding masthead">
			<img src="<?php echo the_post_thumbnail_url(); ?>" style="max-width: 100%; width: 100%">
			<div class="fixed-arrow">
				<div class="circle">
					<i class="ion-chevron-down"></i>
				</div>
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

	<section class="bg--gray image-tiles portfolio-5">
		<ul>

	<?php 

	if( $images ): ?>
	 <?php foreach( $images as $key=>$image ) { 
	 		
	 		?>				
			<li>
				<img src="<?php echo $image['sizes']['large']; ?>" style="max-width: 100%;">
			</li>
					
			<?php
			}
			endif;

			endwhile; ?>

</ul>
</section>
	<?php else: ?>


	<?php endif; ?>

<?php get_footer(); ?>