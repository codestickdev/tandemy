<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tandemy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="siteHeader">
		<div class="siteHeader__wrap container">
			<nav class="siteHeader__menu">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tandemy' ); ?></button>
				<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id'        => 'primary-menu')); ?>
			</nav>
		</div>
	</header>
