<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package my-simone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( "charset" ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( "|", true, "right" ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>">

<?php wp_head(); ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@StephanieJorda">
<meta name="twitter:creator" content="@StephanieJorda">
<meta name="twitter:title" content=og:title>
<meta name="twitter:description" content=og:description>
<meta name="twitter:image" content=og:image>    
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
            <?php if ( get_header_image() && ("blank" == get_header_textcolor()) ) : ?>
            <div class="header-image">
                    <a href="<?php echo esc_url( home_url( "/" ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo          get_custom_header()->height; ?>" alt="">
                    </a>
            </div>
            <?php endif; // End header image check. ?>
        
		<div class="site-branding header-background-image" style="background-image: url(<?php header_image(); ?>)">
            <div class="title-box">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( "description" ); ?></h2>
		</div>
</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( "Menu", "my-simone" ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( "Skip to content", "my-simone" ); ?></a>

			<?php wp_nav_menu( array( "theme_location" => "primary" ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">