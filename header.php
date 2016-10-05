<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/flexboxgrid/6.3.0/flexboxgrid.min.css" type="text/css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lora|Poppins" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hamburgers.min.css" type="text/css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- Begin header -->
		<header id ="header" class="header--fixed">
			<section>
				<div class="row middle-xs middle-md header center-xs no--mobilepadding">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="row middle-xs start-xs no--mobilepadding">

							<!-- Logo -->
							<div class="col-xs-6 col-md-2 col-lg-2">
								<a href="http://www.belfortagency.com/demo/jlm/">
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
								</a>
							</div>
							<!-- End logo -->

							<div class="col-xs-6 col-md-10 col-lg-10 end-xs end-md middle-xs end-lg menu">

								<!-- Menu toggle -->
								<button class="hamburger hamburger--collapse menu-toggle show--mobile" id="menuToggle" type="button" aria-label="Menu" aria-controls="navigation">
								  <span class="hamburger-box">
								    <span class="hamburger-inner"></span>
								  </span>
								</button>
								
								<!-- Menu -->
								<ul class="sub-menu hide--mobile">
									<li><?php wp_nav_menu( array( 'theme_location' => 'header-menu','container'=>false,'menu_class'=> 'menu-class' ) ); ?></li>
									<li class="social-icon"><a href="https://www.facebook.com/JlmGraphicDesign/?fref=ts" target="_blank"><i class="ion-social-facebook"></i></a></li>
									<li class="social-icon"><a href="https://twitter.com/jmcbrayer" target="_blank"><i class="ion-social-twitter"></i></a></li>
									<li class="social-icon"><a href="https://www.instagram.com/jlmgraphicdesign/" target="_blank"><i class="ion-social-instagram"></i></a></li>
									<li class="social-icon"><a href="https://www.linkedin.com/in/jennifermcbrayer" target="_blank"><i class="ion-social-linkedin"></i></a></li>
								</ul>
								<!-- End menu -->
							</div>
						</div>
					</div>
				</div>
			</section>
		</header>
		<!-- End header -->
