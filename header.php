<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phmu-starter-wp-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
				rel="stylesheet">

	<script src="<?php echo get_template_directory_uri() ?>/assets/js/svg-inject.min.js"></script>

	<?php wp_head(); ?>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js" integrity="sha512-BXASbMmKLu+RC5TDnkupyhvrjiOQXILh/5zgIS8k5JAC71a73lNweVEg/X+9XJQ7GK22PH9WpztY3zqrji+xrQ==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.4.1/dist/css/glide.core.min.css">
	<link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.4.1/dist/css/glide.theme.min.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="sr-only"
		 href="#primary"><?php esc_html_e('Skip to content', 'phmu-starter-wp-theme'); ?></a>

	<header id="masthead" class="site-header" x-data="mobileMenu()">
		<div class="container pr-4 pl-4">
			<div class="site-branding">
				<p class="site-title">
					<a
						href="<?php echo esc_url(home_url('/')); ?>"
						rel="home"
					>
						<?php bloginfo('name'); ?>
					</a>
				</p>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button
					class="menu-toggle"
					:class="{ 'active': isOpen() }"
					aria-controls="menu-mobile"
					aria-expanded="false"
					@click="toggle"
				>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class' => 'menu-desktop'
					)
				);
				?>
				<div class="menu-mobile" x-show="isOpen()"><?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'menu-mobile',
						)
					);
					?></div>
			</nav><!-- #site-navigation --></div>
	</header><!-- #masthead -->
