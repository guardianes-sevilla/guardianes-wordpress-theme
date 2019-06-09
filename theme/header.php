<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Guardianes
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'guardianes' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<?php the_custom_logo(); ?>
			<div class="site-branding-text">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h1>
			</div>
		</div>
	</header><!-- #masthead -->
	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'menu_class'     => 'container'
		) );
		?>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content container">
