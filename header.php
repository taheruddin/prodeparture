<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
            <div id="header-inner">
				
				<div id="navbar" class="navbar top">
    				<nav id="site-navigation" class="navigation main-navigation toggled-on" role="navigation">
    					<!--<h3 class="menu-toggle"><img src="<?php echo get_stylesheet_directory_uri()."/images/mobile-menu-ux-stripe.png"; ?>" alt="menu" /><?php _e( 'Menu', 'twentythirteen' ); ?></h3>-->
    					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
    					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    					<?php //get_search_form(); ?>
    				</nav><!-- #site-navigation -->
    			</div><!-- #navbar -->
				
				<div class="hotline">
					<?php if ( is_active_sidebar( 'hotline' ) ) : ?>
						<div class="row" role="complementary">
							<div class="widget-area">
								<?php dynamic_sidebar( 'hotline' ); ?>
							</div><!-- .widget-area -->
						</div><!-- #secondary -->
					<?php endif; ?>
					<?php /* ?>
                    <p class="text">Contact One of Our Sleep Experts Today</p>
                    <a class="num" href="tel:2108122355">Call Now!! (210) 812-2355</a>
                    <div class="lang">Translate:<?php if(function_exists(qtrans_generateLanguageSelectCode)) echo qtrans_generateLanguageSelectCode('image'); ?></div>
                    <p class="follow">Follow us ... <a href="<?php echo of_get_option('twitter');?>"><img src="<?php echo get_stylesheet_directory_uri()."/images/twitter.png";?>" /></a > <a href="<?php echo of_get_option('facebook');?>"><img src="<?php echo get_stylesheet_directory_uri()."/images/facebook.png";?>" /></a></p>
					<?php */ ?>
                </div>
				
    			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        			<?php
    				$logo = of_get_option('site-logo');
    				if(empty($logo) ){ 
    					$logo =  get_stylesheet_directory_uri()."/images/logo.jpg";
    				}
    				?><img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" /><?php
    				if( !of_get_option('hide-header-text') ){
    					?>
    					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    	<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    					<?php
    				}
    				?>
                </a>
				
                <div class="header-right-banner">
					<?php if ( is_active_sidebar( 'header-right-banner' ) ) : ?>
						<div class="row" role="complementary">
							<div class="widget-area">
								<?php dynamic_sidebar( 'header-right-banner' ); ?>
							</div><!-- .widget-area -->
						</div><!-- .row -->
					<?php endif; ?>
                </div><!-- .header-ad-banner -->
    
    			
            </div><!-- #header-inner -->
		</header><!-- #masthead -->
		
		<div id="navbar2nd">
            <div id="navbar2nd-inner">
                <div id="navbar" class="navbar">
    				<nav id="site-navigation-2nd" class="navigation main-navigation" role="navigation">
    					<h3 class="menu-toggle-2nd"><img src="<?php echo get_stylesheet_directory_uri()."/images/mobile-menu-ux-stripe.png"; ?>" alt="menu" /><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
    					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
    					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
    				</nav><!-- #site-navigation -->
    			</div><!-- #navbar -->
            </div>
        </div>
		
		<div id="main" class="site-main">
            <div id="main-inner">
            
