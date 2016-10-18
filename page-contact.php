<?php 

/* 

Template name: Contact

*/

get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); 

	$mission = get_field('mission');

	?>

	<section>
		<div class="row row__full-height masthead--contact masthead bg--primary">
			<div class="case--text">
				<div class="row middle-xs start-md center-xs">
					<div class="col-md-6 col-xs-12">
						<h4>JLM Graphic Design</h4>
						<h3><?php echo get_the_content(); ?></h3>
						<button class="btn btn--form"></i><a href="mailto:jpaul@jlmgraphicdesign.com">Email Us</a></button>
					</div>
					<div class="col-md-6 col-xs-10 end-md headshot">
						<img src="<?php echo get_template_directory_uri(); ?>/images/headshot.png">
					</div>
				</div>
			
			</div>
		</div>
	</section>

	<section class="bg--gray">
		<div class="row center-xs middle-xs">
			<div class="col-xs-12 col-md-10 col-lg-8 center-xs middle-xs statement">
				<?php echo $mission; ?>
			</div>
		</div>
	</section>



<?php endwhile; ?>

	<?php else: ?>


	<?php endif; ?>
	
<?php get_footer(); ?>
