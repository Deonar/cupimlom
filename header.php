<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cupimlom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="header" class="header header_white">
		<div class="header__wrapp">
			<?php
			if (is_front_page() && is_home()) :
			?>
				<div class="header__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo" alt="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.svg" class="logo_white" alt="logo_white">
				</div>
			<?php
			else :
			?>
				<a href="/" class="header__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo" alt="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.svg" class="logo_white" alt="logo_white">
				</a>
			<?php
			endif; ?>

			<div class="header__col-mid">
				<div class="header__address">
					<a href="/representative/#map" class="header__address-link">Москва</a>
					<p class="header__address-text">ул. Механическая, 101/2</p>
				</div>
				<a href="tel:8 800 345-23-33" class="header__mob-phone">
					<svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" fill="#EA591A">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.68694 4.77348C2.84683 4.6136 3.80615 4.37376 3.72621 3.3345C3.64626 3.01472 3.52635 2.13534 3.36646 1.6157C2.96674 0.336605 2.8868 -0.183029 1.68764 0.0568021C1.12804 0.176718 0.608401 0.696352 0.36857 1.17601C-1.82988 4.8934 6.36435 13.6472 10.2016 11.7286C10.6813 11.4888 11.2409 11.0091 11.4008 10.4895C11.7606 9.41022 11.2009 9.13042 9.80193 8.65075C9.24232 8.49087 8.52283 8.25103 8.20305 8.17109C7.16379 8.0112 6.92395 9.0105 6.76407 9.13041C5.32508 8.7307 3.00671 6.25244 2.68694 4.77348Z" />
					</svg>
				</a>
				<div class="header__login">
					<a href="https://admin.evva.space/" target="_blank" class="login-btn btn btn_dark">Кабинет партнера</a>
				</div>
			</div>

			<div id="menu-wrapper" class="header-menu__wrapp">
				<div class="header-menu__head">
					<div class="header-menu__title">Меню</div>
					<div class="header-menu__address">
						<a href="/representative/#map" class="header__address-link">Москва</a>
						<p class="header__address-text">ул. Механическая, 101/2</p>
					</div>
				</div>
				<nav class="header-menu">
					<?php
					wp_nav_menu(array(
						'theme_location'  => 'main-menu',
						'menu_id'         => '',
						'menu_class'      => 'header-menu__list',
						'container'       => 'ul',
					));
					?>
				</nav>
				<div class="header-menu__bottom">
					<a href="tel:8 800 345-23-33" class="header-menu__phone">8 800 345-23-33</a>
					<a href="#" class="login-btn btn btn_dark">Кабинет партнера</a>
				</div>
			</div>

			<div class="header-burger" id="header-burger">
				<span></span>
				<span></span>
			</div>

		</div>
	</header>