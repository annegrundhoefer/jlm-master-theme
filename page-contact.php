<?php 

/* 

Template name: Contact

*/

get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); 

	$mission = get_field('mission');

	?>

	<section>
		<div class="row row__full-height middle-md masthead" style="background: url('<?php the_post_thumbnail_url(); ?>')center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">

			<div class="col-xs-12 middle-xs case--text">
				<div class="row row__full-height middle-xs">
					<div class="col-md-6 col-lg-4 col-xs-12 col-sm-9">
						<h4>JLM Graphic Design</h4>
						<div class="line"></div>
						<h3><?php echo get_the_content(); ?></h3>
						<button class="btn btn--form"></i><a href="mailto:jpaul@jlmgraphicdesign.com">Email Us</a></button>
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
