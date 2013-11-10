<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package hpf
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

<title><?php is_front_page() ? print 'Harry Denley Design' : wp_title('|'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header cf" role="banner">
		<div class="head-inner container">
			<div class="site-branding">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo.png" alt="HDD"></a>
			</div>

			<nav id="site-navigation" class="main-navigation cf" role="navigation">
				<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'hpf' ); ?>"><?php _e( 'Skip to content', 'hpf' ); ?></a></div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .head-inner -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
