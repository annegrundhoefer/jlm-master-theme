		<!-- Footer -->
		<section id="footer">
			<div class="row center-md center-xs">
				<div class="col-xs-10 col-md-12 footer--logo">
					<a href="index.php">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</a>
					<h4>Corporate Branding • Presentations • Infographics • Iconography</h4>
				</div>
			</div>
			<div class="row center-md center-xs">
				<div class="col-xs-10 col-md-4 links">
					<div class="divider"></div>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					<div class="divider"></div>
				</div>
			</div>
			<div class="row center-md center-xs">
				<div class="col-xs-10 col-md-4 footer--social">
					<ul>
						<li class="social-icon"><a href="https://www.facebook.com/JlmGraphicDesign/?fref=ts" target="_blank"><i class="ion-social-facebook"></i></a></li>
						<li class="social-icon"><a href="https://twitter.com/jmcbrayer" target="_blank"><i class="ion-social-twitter"></i></a></li>
						<li class="social-icon"><a href="https://www.instagram.com/jlmgraphicdesign/" target="_blank"><i class="ion-social-instagram"></i></a></li>
						<li class="social-icon"><a href="https://www.linkedin.com/in/jennifermcbrayer" target="_blank"><i class="ion-social-linkedin"></i></a></li>
						<li class="social-icon"><a href="https://www.behance.net/jlmgraphicdesign" target="_blank"><i class="fa fa-behance-square"></i></a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
