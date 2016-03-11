<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saltandlight
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="visible-xs">
		<a class="mobile-toggle">
		<div id="nav-icon1">
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		</a>
		
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4  col-sm-4">
					<div class="site-branding">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								<span class="site-logo-credit">brought to you by EQUIP</span>
							</h1>
						<?php else : ?>
							<p class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
								<span class="site-logo-credit">brought to you by EQUIP</span>
							</p>
						<?php
						endif;
						?>
					</div><!-- .site-branding -->
				</div>

				<div class="col-md-8 col-sm-8">

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="visible-sm visible-md visible-lg">
							<!-- <button class="menu-toggle" aria-controls="overlaynav" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'saltandlight' ); ?></button> -->
							<?php if (is_page('home')) : ?>
								<?php $walker = new Menu_With_Description; ?>
								<?php wp_nav_menu( array( 'theme_location' => 'homepage', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu', 'walker' => $walker ) ); ?>
							<?php else: ?>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<?php endif; ?>
						</div>
					</nav><!-- #site-navigation -->

				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<nav class="mobile-nav" id="overlaynav">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'mobile-nav-menu', 'walker' => $walker ) ); ?>
	</nav>

	<div id="content" class="site-content">
