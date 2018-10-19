<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

			  <div class="grid-container fluid stiqui-container">
					<div class="grid-x grid-margin-x grid-margin-y top-header stiqui">
						<div class="small-6 medium-4 cell">
						<!-- logo -->
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/totemlogo.png" alt="Totem Boards" class="logo-img">
						</a>
						<!-- /logo -->
						</div>

						<div class="small-6 medium-8 cell text-right">
							<i id="burger" class="fi-list burger bopen" ></i>
							<!-- nav -->
							<nav class="nav" role="navigation">
							<i id="burger" class="fi-x burger bclose" ></i>
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
						</div>
					</div>
			  </div>

			</header>
			<!-- /header -->


			
    
    
    
    


