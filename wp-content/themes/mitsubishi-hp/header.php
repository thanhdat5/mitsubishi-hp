<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'mitsubishi-hp'); ?></a>

	<header class="hp-header">
		<div class="hp-header-bg"></div>
		<div class="hp-header-inner">
			<a class="hp-brand" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
				<?php
				$header_logo = get_theme_mod('header_logo');
				$header_logo_light = get_theme_mod('header_logo_light');

				if (!empty($header_logo) && !empty($header_logo_light)) :
				?>
					<img class="light" src="<?php echo esc_url($header_logo_light); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
					<img class="black" src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
				<?php
				else :
					echo esc_attr(get_bloginfo('name', 'display'));
				endif;
				?>
			</a>
			<div class="hp-header-nav">
				<div class="hp-hn-top">
					<?php
					wp_nav_menu(
						array(
							'menu_class'     => '',
							'container'      => '',
							'theme_location' => 'top-menu',
						)
					);
					?>
				</div>
				<div class="hp-hn-bottom">
					<?php
					wp_nav_menu(
						array(
							'menu_class'     => 'navbar-nav me-auto',
							'container'      => '',
							'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
							'walker'         => new WP_Bootstrap_Navwalker(),
							'theme_location' => 'main-menu',
						)
					);
					?>
					<div class="hp-hn-lang">
						<a class="active" href="javascript:void(0);"><span>VN</span></a>
						<a href="<?php echo esc_url(home_url()); ?>/en"><span>EN</span></a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="wrapper">


		<main id="main">