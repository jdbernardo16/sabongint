<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sabong International</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	 <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/logo.png" type="image/x-icon" />

	 <meta name="keywords" content="Sabong, Sabong international, sabong international, sabong philippines, rooster, cock, cockfighting, mobile app, sabong app, sabonginternational, sabonginternational philippines, sabong mobile, application sabong, si, si app, si apk, sabong online"> 


	<link rel="apple-touch-icon" href="apple-touch-icon.png">
 	<?php $single = is_single(); if( $single ): ?>
 	<meta property="og:image" content="<?php if( get_field('banner') ): ?><?php the_field('banner'); ?><?php endif; ?>"> 
    <meta property="og:title" content="<?php the_title();?>">
    <meta property="og:description" content="<?php if( have_posts() ): while( have_posts() ): the_post();?><?php the_excerpt();?><?php endwhile; else: endif;?>">
    <meta property="og:url" content="<?php get_site_url();?>">
    <meta property="og:site_name" content="<?php wp_title(); ?>">
    <meta property="og:type" content="website">
	 <?php endif; ?>


	<!-- Ionicon -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


    <!-- Slick -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>

    <!-- Remodal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.6/remodal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.6/remodal-default-theme.min.css">

    <!-- Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- Light Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/css/lightgallery.min.css">
    
    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Finger+Paint|Tomorrow&display=swap" rel="stylesheet">

    <!-- Style -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/app.css' ?>">

	<?php wp_head();?>
</head>
<body>
<header>
	<div class="header-cntnr">
		<div class="inlineBlock-parent header-wrapper">
			<div class="left-cntnr">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-left',
						)
					);
				?>
			</div
			><div class="logo-cntnr">
				<div class="logo" style="background-image: url('<?php bloginfo('template_url'); ?>/images/logo.png');"></div>
			</div
			><div class="right-cntnr">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-right',
						)
					);
				?>
			</div
			><div class="mobile-menu">
				<div class="m-menu">
					<div class="vertical-parent">
						<div class="vertical-align">
							<div id="nav-icon1">
							  <span></span>
							  <span></span>
							  <span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="m-menu-hldr">
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'mobile-menu',
			)
		);
	?>
</div>

