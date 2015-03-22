<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ) ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<header id="navigation" class="navigation" role="navigation">
			<?php wp_nav_menu(array(
				'theme_location' => 'main-nav',
				'container'      => 'nav',
				'container_id'   => 'primary-nav'
			)) ?>
		</header><!-- .site-header -->

	<div id="content" class="site-content">