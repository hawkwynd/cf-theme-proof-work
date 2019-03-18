<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<title><?php bloginfo( 'name' ); ?> <?php wp_title( '|' ); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/i/378 -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Set the viewport width to device width for mobile -->

	<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico"/>
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/apple-touch-icon-114x114-precomposed.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<!-- Included CSS Files (Compressed) -->

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/boilerplate.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <script src="https://use.fontawesome.com/3b7c5bf0d5.js"></script>

	<?php wp_head(); ?>

	<!-- All JavaScript at the bottom, except this Modernizr build. Modernizr enables HTML5 elements & feature detects for optimal performance. Create your own custom Modernizr build: www.modernizr.com/download/ -->

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.55071.js"></script>


</head>

<body <?php body_class(); ?>>
<header class="group">
	<div class="top-info group">
		<div class="cf-phone-container">For Franchise Information <a href="tel:555-555-5555">Call Us 555-555-5555</a> </div>
	</div>
	<div class="logo">
		<a href="<?php bloginfo('url');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CF-Logo.png"></a>
	</div>
    <nav class="group">
		<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
	</nav>
</header>
