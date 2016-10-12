<?php get_header(); ?>

	<!-- Case Studies -->	
		<section id="caseSingle" class="class">
			<div class="row middle-xs no--padding">
			<?php if (have_posts()): while (have_posts()) : the_post(); 

			?>
			<div class="col-xs-6 col-md-3 no--padding card-tile">
				<a href="<?php echo get_the_permalink(); ?>">
					<div class="image-container">
						<img src="http://placehold.it/1200x750" style="max-width: 100%;">
						<div class="hover-contents">
							<div class="overlay-orange">
								<div class="rectangle"></div>
							</div>
							<div class="row middle-xs center-xs case-study-height">
								<div class="col-xs-12 case-study-content">
									<h4><?php echo get_the_title(); ?></h4>
									<h3><?php echo get_the_excerpt(); ?></h3>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>

				
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			</div>
		</section>
		<!-- End Case Studies -->

<?php get_footer(); ?>
